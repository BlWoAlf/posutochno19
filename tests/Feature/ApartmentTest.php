<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\ApartmentPhoto;

class ApartmentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApartment(){
        $apartment = factory('App\Models\Apartment')->create();

        $response = $this->get('/admin/edit-apartment/'.$apartment->id);

        // $this->assertDatabaseHas('apartments', ['address' => $apartment->address]);

        $response->assertStatus(200);
        // $response->assertViewHasAll($apartment);
        // $response->assertViewHas('id', $apartment->id);
        // $response->assertViewHas('apartment', $apartment);

        // $response->assertSee($apartment->address);
    }

    public function testUpdateApartment(){
        $apartment = factory('App\Models\Apartment')->create();

        $new_data = ['apartment' => [
            "address" => "FFFffff",
            "town" => "Faasdasd",
            "district" => "reer",
            "price1_2" => "556",
            "price3_9" => "124",
            "price10_29" => "123",
            "price30" => "12",
            "rooms" => "2",
            "places" => "2+2",
            "description" => "ABOBA",
            "facilities" => [
                "elevator" => "1",
                "balcony" => "1",
                "floor" => "4",
                "wifi" => "1",
                "parking" => "1",
                "washer" => "1",
                "iron" => "1",
                "furniture" => "1",
                "microwave" => "1",
                "tv" => "1",
                "hairdryer" => "1"
                ]
            ]
        ];

        $response = $this->put('/admin/save-edit/'.$apartment->id, $new_data);

        $this->assertDatabaseHas('apartments', [
            "facilities" => "{\"elevator\":\"1\",\"balcony\":\"1\",\"floor\":\"4\",\"wifi\":\"1\",\"parking\":\"1\",\"washer\":\"1\",\"iron\":\"1\",\"furniture\":\"1\",\"microwave\":\"1\",\"tv\":\"1\",\"hairdryer\":\"1\"}"
        ]);
    }

    public function testUpadateApartmentPhoto(){
        Storage::fake('public');

        $apartment = factory('App\Models\Apartment')->create();
        // $photos = factory('App\Models\ApartmentPhoto', 3)->make();

        $photos = [];
        for($i = 1; $i <= 3; $i++){
            $photos['photo'][] = $file = UploadedFile::fake()->image(uniqid() . '.jpg');
        }

        $response = $this->put('/admin/save-edit/'.$apartment->id, $photos);

        $photo = ApartmentPhoto::where('id_apartment', $apartment->id)->first();

        dd($photo);

        $this->assertDatabaseHas('apartment_photos', ['photo_url' => $photo->photo_url]);
        // $this->assertEquals($photos['photo_url'][0], $photo->photo_url);
    }
}
