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
        ['name' => 'elevator', 'type' => 'checkbox', 'option' => true, 'optionPrefix' => 'facilities'],
        ['name' => 'balcony', 'type' => 'checkbox', 'option' => true, 'optionPrefix' => 'facilities'],
        ['name' => 'floor', 'type' => 'text', 'option' => true, 'optionPrefix' => 'facilities'],
        ['name' => 'wifi', 'type' => 'checkbox', 'option' => true, 'optionPrefix' => 'facilities'],
        ['name' => 'parking', 'type' => 'checkbox', 'option' => true, 'optionPrefix' => 'facilities'],
        ['name' => 'washer', 'type' => 'checkbox', 'option' => true, 'optionPrefix' => 'facilities'],
        ['name' => 'iron', 'type' => 'checkbox', 'option' => true, 'optionPrefix' => 'facilities'],
        ['name' => 'furniture', 'type' => 'checkbox', 'option' => true, 'optionPrefix' => 'facilities'],
        ['name' => 'microwave', 'type' => 'checkbox', 'option' => true, 'optionPrefix' => 'facilities'],
        ['name' => 'tv', 'type' => 'checkbox', 'option' => true, 'optionPrefix' => 'facilities'],
        ['name' => 'hairdryer', 'type' => 'checkbox', 'option' => true, 'optionPrefix' => 'facilities']
    ];
}
