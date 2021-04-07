<?php

namespace App\Http\Controllers\Catalog\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\ApartmentPhoto;
use App\Models\Form;

class ApartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::get();

        return view('admin\main', ['items' => $apartments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = Form::$inputs;

        return view('admin/edit-page', ['form' => $form]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->input('apartment');
        
        $apartment = Apartment::create($input);

        $apartment->addPhotos();

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
        $apartment = Apartment::find($id);

        $form = Form::$inputs;

        return view('admin/edit-page', ['apartment' =>  $apartment, 'form' => $form]);
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
        $input = $request->input('apartment');
        
        $apartment = Apartment::find($id);

        $apartment->fill($input)->save();

        $apartment->addPhotos();

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
        $apPhotos = ApartmentPhoto::where('id_apartment',$id)->get();
        
        foreach($apPhotos as $photo){
            $photo->delete();
        }

        Apartment::where('id', '=', $id)->delete();
        return redirect('admin');
    }
}
