<?php
/**
 * Created by PhpStorm.
 * User: andreas.schmid
 * Date: 25.10.19
 * Time: 09:49
 */

namespace App\Http\Entities;

/**
 * Class Account
 *
 * @package App\Http\Entities
 *
 * @OA\Schema(
 *     title="Account model",
 *     description="Account model",
 * )
 */
class Account
{

    /**
     * @OA\Property(
     *     default="salutation",
     *     title="Salutation",
     *     description="Salutation"
     * )
     *
     * @var string
     */
    public $salutation;

    /**
     * The salutation name
     * @var string
     * @OA\Property()
     */
    public $firstname;


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'salutation' => 'required',
        'firstname' => 'required',
        /*    'lastname' => 'required',
            'email' => 'required',
            'street' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'country' => 'required',
            'users_id' => 'required',*/
    ];
}
