<?php

namespace App\Observers;

use App\Models\ApartmentPhoto;
use Illuminate\Support\Facades\Storage;

class ApartmentPhotoObserver
{
    public function deleted(ApartmentPhoto $apartmentPhoto)
    {
        if(Storage::exists($apartmentPhoto->photo_url)){
            Storage::delete($apartmentPhoto->photo_url);
        }
    }
}