<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public static $inputs = [
        ['name' => 'apartment[address]', 'type' => 'text', 'propertyName' => 'address'],
        ['name' => 'apartment[town]', 'type' => 'text', 'propertyName' => 'town'],
        ['name' => 'apartment[district]', 'type' => 'text', 'propertyName' => 'district'],
        ['name' => 'apartment[price1_2]', 'type' => 'text', 'propertyName' => 'price1_2'],
        ['name' => 'apartment[price3_9]', 'type' => 'text', 'propertyName' => 'price3_9'],
        ['name' => 'apartment[price10_29]', 'type' => 'text', 'propertyName' => 'price10_29'],
        ['name' => 'apartment[price30]', 'type' => 'text', 'propertyName' => 'price30'],
        ['name' => 'apartment[rooms]', 'type' => 'text', 'propertyName' => 'rooms'],
        ['name' => 'apartment[places]', 'type' => 'text', 'propertyName' => 'places'],
        ['name' => 'apartment[description]', 'type' => 'textarea', 'propertyName' => 'description'],
        ['name' => 'apartment[facilities][elevator]', 'type' => 'checkbox', 'propertyName' => 'facilities', 'prop' => 'elevator'],
        ['name' => 'apartment[facilities][balcony]', 'type' => 'checkbox', 'propertyName' => 'facilities', 'prop' => 'balcony'],
        ['name' => 'apartment[facilities][floor]', 'type' => 'text', 'propertyName' => 'facilities', 'prop' => 'floor'],
        ['name' => 'apartment[facilities][wifi]', 'type' => 'checkbox', 'propertyName' => 'facilities', 'prop' => 'wifi'],
        ['name' => 'apartment[facilities][parking]', 'type' => 'checkbox', 'propertyName' => 'facilities', 'prop' => 'parking'],
        ['name' => 'apartment[facilities][washer]', 'type' => 'checkbox', 'propertyName' => 'facilities', 'prop' => 'washer'],
        ['name' => 'apartment[facilities][iron]', 'type' => 'checkbox', 'propertyName' => 'facilities', 'prop' => 'iron'],
        ['name' => 'apartment[facilities][furniture]', 'type' => 'checkbox', 'propertyName' => 'facilities', 'prop' => 'furniture'],
        ['name' => 'apartment[facilities][microwave]', 'type' => 'checkbox', 'propertyName' => 'facilities', 'prop' => 'microwave'],
        ['name' => 'apartment[facilities][tv]', 'type' => 'checkbox', 'propertyName' => 'facilities', 'prop' => 'tv'],
        ['name' => 'apartment[facilities][hairdryer]', 'type' => 'checkbox', 'propertyName' => 'facilities', 'prop' => 'hairdryer']
    ];
}
