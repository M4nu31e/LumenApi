<?php
/**
 * Created by PhpStorm.
 * User: andreas.schmid
 * Date: 25.10.19
 * Time: 09:49
 */

namespace App\Http\Entities;

/**
 * Class Login
 *
 * @package App\Http\Entities
 *
 * @OA\Schema(
 *     title="Login model",
 *     description="Login model",
 * )
 */
class Login
{

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'username' => 'required',
        'client_ip' => 'required',
        'appkey' => 'required',
    ];
}
