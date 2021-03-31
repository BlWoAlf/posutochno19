<?php

namespace App\Http\Controllers\Catalog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\ApartmentPhoto;

class ApartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subquery = ApartmentPhoto::select('apartment_photos.photo_url')
        // ->where('apartment_photos.id_apartment', '=', 'apartments.id')
        ->whereRaw('`apartment_photos`.`id_apartment` = `apartments`.`id`')
        ->orderBy('apartment_photos.sort','desc')
        ->limit(1);

        $apartments = Apartment::select('*', 'apartments.price1_2 as price', \DB::raw("({$subquery->toSql()}) as photo"))
        ->get();

        return view('admin\main', ['items' => $apartments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input = $request->except(['_token','_method','save']);

        $values = [];

        foreach($input as $key => $value){
            if($value!=null){
                $values[$key] = $value;
            }
        }

        Apartment::insert($values);
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apartment = Apartment::where('id', '=', $id)
        ->first();

        $apartment_photos = ApartmentPhoto::where('id_apartment', '=', $id)
        ->orderBy('sort','desc')
        ->get();

        return view('admin/edit-page', ['apartment' => $apartment, 'apartment_photos' => $apartment_photos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $input = $request->all();
        $input = $request->except(['_token','_method','save']);
        
        Apartment::where('id', $id)
        ->update(
            $input
        );
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Apartment::where('id', '=', $id)->delete();
        return redirect('admin');
    }
}
