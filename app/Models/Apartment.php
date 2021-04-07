<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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


    public $timestamps = false;

    public function photos(){
        return $this->hasMany('App\Models\ApartmentPhoto', 'id_apartment');
    }
    public function mainPhoto(){
        return $this->hasMany('App\Models\ApartmentPhoto', 'id_apartment')->orderBy('sort','desc');
    }

    public function addPhotos(){

        $photosExists = request()->input('photo') ? request()->input('photo') : [];

        $files = request()->file('photo');

        $apartmentPhoto = ApartmentPhoto::where('id_apartment',$this->id)->whereNotIn('photo_url', $photosExists)->get();

        foreach($apartmentPhoto as $photo){
            $photo->delete();
        }
        
        if($files!=null){
            foreach($files as $file){
                $pathPhoto = Storage::putFile('users_pictures', $file);
                ApartmentPhoto::insert(
                    [
                        'id_apartment' => $this->id,
                        'photo_url' => $pathPhoto
                    ]
                );
            }
        }
    }
}
