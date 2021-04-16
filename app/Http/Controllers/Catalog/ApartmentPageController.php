<?php

namespace App\Http\Controllers\Catalog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApartmentPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apartment_data = \DB::table('apartments')
            ->select('id', 'address', 'town', 'district', 'price1_2 as price1', 'price3_9 as price2', 'price10_29 as price3', 'price30', 'rooms', 'places', 'facilities', 'description')
            ->where('id','=',$id)
            ->first();
        $apartment_data_facilities = json_decode($apartment_data->facilities);

        $apartment_photos = \DB::table('apartment_photos')
            ->select('apartment_photos.photo_url')
            ->where('id_apartment','=',$id)
            ->orderBy('apartment_photos.sort','desc')
            ->get();

        $similar_apartments = \DB::table('apartments')
            ->select(\DB::raw('`apartments`.`id`, `apartments`.`address`, `apartments`.`price1_2` as "price", `apartments`.`rooms`, `apartments`.`places`, (
    SELECT `apartment_photos`.`photo_url`
    FROM `apartment_photos`
    WHERE `apartment_photos`.`id_apartment` = `apartments`.`id`
    ORDER BY `apartment_photos`.`sort` DESC
    LIMIT 1
) as "photo"
'))
            ->where('id','!=',$id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('apartment', ['apartment_data' => $apartment_data, 'apartment_data_facilities'=>$apartment_data_facilities, 'apartment_photos' => $apartment_photos, 'similar_apartments'=>$similar_apartments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
