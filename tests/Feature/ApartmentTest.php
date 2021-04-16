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
        $apartment = factory('App\Apartment')->create();

        $response = $this->get('/admin/edit-apartment/'.$apartment->id);

        $response->assertSee($apartment->address);
    }
}
