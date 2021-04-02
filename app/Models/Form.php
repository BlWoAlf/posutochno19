<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public static $inputs = [
        ['name' => 'address', 'type' => 'text'],
        ['name' => 'town', 'type' => 'text'],
        ['name' => 'district', 'type' => 'text'],
        ['name' => 'price1_2', 'type' => 'text'],
        ['name' => 'price3_9', 'type' => 'text'],
        ['name' => 'price10_29', 'type' => 'text'],
        ['name' => 'price30', 'type' => 'text'],
        ['name' => 'rooms', 'type' => 'text'],
        ['name' => 'places', 'type' => 'text'],
        ['name' => 'description', 'type' => 'textarea'],
        // ['name' => 'elevator', 'type' => 'checkbox'],
        // ['name' => 'balcony', 'type' => 'checkbox'],
        // ['name' => 'floor', 'type' => 'text'],
        // ['name' => 'wifi', 'type' => 'checkbox'],
        // ['name' => 'parking', 'type' => 'checkbox'],
        // ['name' => 'washer', 'type' => 'checkbox'],
        // ['name' => 'iron', 'type' => 'checkbox'],
        // ['name' => 'furniture', 'type' => 'checkbox'],
        // ['name' => 'microwave', 'type' => 'checkbox'],
        // ['name' => 'tv', 'type' => 'checkbox'],
        // ['name' => 'hairdryer', 'type' => 'checkbox']
    ];
}
