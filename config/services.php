<?php
/**
 * Created by PhpStorm.
 * User: andreas.schmid
 * Date: 14.10.19
 * Time: 22:13
 */

return [

    'fraudprotection' => [
        'low_risk' => [
            'min' => env('FRAUDPROTECTION_POINTS_LOWRISK_MIN'),
            'max' => env('FRAUDPROTECTION_POINTS_LOWRISK_MAX'),
        ],
        'medium_risk' => [
            'min' => env('FRAUDPROTECTION_POINTS_MEDIUMRISK_MIN'),
            'max' => env('FRAUDPROTECTION_POINTS_MEDIUMRISK_MAX'),
        ],
        'high_risk' => [
            'min' => env('FRAUDPROTECTION_POINTS_HIGHRISK_MIN'),
        ],
        'businesshours' => [
            'begin' => env('FRAUDPROTECTION_BUSINESSHOURS_BEGIN'),
            'end' => env('FRAUDPROTECTION_BUSINESSHOURS_END')
        ]
    ],

];