<?php

namespace App\Models;


class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'l one',
                'description' => 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '
            ],
            [
                'id' => 2,
                'title' => 'l two',
                'description' => 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '
            ],
            [
                'id' => 3,
                'title' => 'l three',
                'description' => 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum '
            ],
        ];
    }
}
