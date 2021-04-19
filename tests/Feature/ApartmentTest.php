<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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
        $response->assertViewHas('apartment', $apartment);

        // $response->assertSee($apartment->address);
    }
}
