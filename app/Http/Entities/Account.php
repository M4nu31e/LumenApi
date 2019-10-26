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
     * The salutation
     *
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
     * The firstname
     *
     * @OA\Property(
     *     default="firstname",
     *     title="Firstname",
     *     description="Firstname"
     * )
     *
     * @var string
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
