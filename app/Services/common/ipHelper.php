<?php

namespace App\Services\common;

class ipHelper
{

    function ip_in_range($ip, $range = null)
    {

        if (!isset($ip) || empty($ip) || !isset($range) || empty($range)) {
            return false;
        }

        if (!is_array($range)) {
            $local_networks = array($range);
        } else {
            $local_networks = $range;
        }

        $return = false;

        foreach ($local_networks as $range) {
            if (strpos($range, '/') !== false) {
                // $range is in IP/NETMASK format
                list($range, $netmask) = explode('/', $range, 2);
                if (strpos($netmask, '.') !== false) {
                    // $netmask is a 255.255.0.0 format
                    $netmask = str_replace('*', '0', $netmask);
                    $netmask_dec = ip2long($netmask);
                    $return = ((ip2long($ip) & $netmask_dec) == (ip2long($range) & $netmask_dec));

                    if ($return) {
                        return true;
                    }
                } else {
                    // $netmask is a CIDR size block
                    // fix the range argument
                    $x = explode('.', $range);
                    while (count($x) < 4) {
                        $x[] = '0';
                    }
                    list($a, $b, $c, $d) = $x;
                    $range = sprintf("%u.%u.%u.%u", empty($a) ? '0' : $a, empty($b) ? '0' : $b, empty($c) ? '0' : $c,
                        empty($d) ? '0' : $d);
                    $range_dec = ip2long($range);
                    $ip_dec = ip2long($ip);

                    # Strategy 1 - Create the netmask with 'netmask' 1s and then fill it to 32 with 0s
                    #$netmask_dec = bindec(str_pad('', $netmask, '1') . str_pad('', 32-$netmask, '0'));
                    # Strategy 2 - Use math to create it
                    $wildcard_dec = pow(2, (32 - $netmask)) - 1;
                    $netmask_dec = ~$wildcard_dec;

                    $return = (($ip_dec & $netmask_dec) == ($range_dec & $netmask_dec));
                    if ($return) {
                        return true;
                    }
                }
            } else {
                // range might be 255.255.*.* or 1.2.3.0-1.2.3.255
                if (strpos($range, '*') !== false) { // a.b.*.* format
                    // Just convert to A-B format by setting * to 0 for A and 255 for B
                    $lower = str_replace('*', '0', $range);
                    $upper = str_replace('*', '255', $range);
                    $range = "$lower-$upper";
                }

                if (strpos($range, '-') !== false) { // A-B format
                    list($lower, $upper) = explode('-', $range, 2);
                    $lower_dec = (float)sprintf("%u", ip2long($lower));
                    $upper_dec = (float)sprintf("%u", ip2long($upper));
                    $ip_dec = (float)sprintf("%u", ip2long($ip));
                    $return = (($ip_dec >= $lower_dec) && ($ip_dec <= $upper_dec));

                    if ($return) {
                        return true;
                    }
                }
            }
        }

        return $return;
    }


}