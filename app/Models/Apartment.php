<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
        'id',
        'address',
        'town',
        'district',
        'price1_2',
        'price3_9',
        'price10_29',
        'price30',
        'rooms',
        'places',
        'facilities',
        'description'
    ];
    protected $casts = [
        'facilities' => 'array'
    ];
    // protected $guarded = self::$facilityFields;
    public $timestamps = false;

    // public static $facilityFields = [
    //     'elevator',
    //     'balcony',
    //     'floor',
    //     'wifi',
    //     'parking',
    //     'washer',
    //     'iron',
    //     'furniture',
    //     'microwave',
    //     'tv',
    //     'hairdryer'
    // ];

    public static function addFacilities($object){
        if($object->facilities != null){
            foreach ($object->facilities as $key => $value) {
                $object->$key = $value;
            }
        }
        return $object;
    }

    // public static function collectFacilities($array){
    //     $facilities = [];
    //     foreach(self::$facilityFields as $item){
    //         $facilities[$item] = $array[$item];
    //     }
    //     return $facilities;
    // }
}
