<?php

namespace App\Dictionary;

trait Dictionary {

    public $dictionary = [
        'error' => [
            'getModel' => [
                'msg' => "Error on get value on database!",
                'code' => 502
            ],
            'getUser' => [
                'msg' => "Error on get user!",
                'code' => 503
            ],
            'notAuthenticate' => [
                'msg' => "Error on get user!",
                'code' => 503
            ]
        ]
    ];

}
