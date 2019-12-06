<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\Boolean;

class WhoisService
{
    protected $host;
    protected $port;
    protected $timeout = 60;

    public function __construct(string $host, int $port)
    {
        $this->host = $host;
        $this->port = $port;
    }

    /**
     * trigger the query
     *
     * @param $query
     * @return string
     */
    public function whoisQuery($query)
    {
        $f = fsockopen("tcp://" . $this->host, $this->port, $errno, $errstr, $this->timeout);

        if (!$f) {
            return false;
        }

        // sending query
        fwrite($f, $query . "\r\n");

        // receving response
        $response = '';
        while (!feof($f)) {
            $response .= fgets($f, 1024);
        }

        // closing connection
        fclose($f);

        return trim($response);
    }


    /**
     * @param array $domains
     * @param bool $assoc
     * @return array|bool|string
     */
    public function whois(array $domains, bool $assoc = false)
    {
        if (is_null($domains) || !is_array($domains) || count($domains) < 1) {
            return ($assoc ? [] : false);
        }

        $query = trim(env('WHOIS_QUERY', '+v2 +market +no_header multi')) . ' ' . implode(",", $domains);
        $whois_response = $this->whoisQuery($query);

        return ($assoc ? $this->parseWhoisResponse($whois_response) : $whois_response);
    }

    public function fullwhois(string $domain)
    {
        $query = "full +parsed +force_xml " . $domain;
        $xml = $this->whoisQuery($query);

        $xml = simplexml_load_string($xml);
        $json = json_encode($xml);

        return json_decode($json, true);
    }

    /**
     * @param string $response
     * @return array
     */
    public function parseWhoisResponse(string $response)
    {
        $whois_response = explode(PHP_EOL, $response);
        $return = [];
        foreach ($whois_response as $value) {
            $arr = explode(':', $value);

            if (isset($arr[0]) && isset($arr[1])) {
                $return[trim($arr[0])] = trim($arr[1]);
            }
        }

        return $return;
    }
}
