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
        $input = $request->except(['_token','_method','save','photo']);

        // $input['facilities'] = collectFacilities($input['apartment']);

        $id = Apartment::insertGetId($input['apartment']);

        $photos = $request->input('photo');

        $files = $request->file('photo');

        $this->addPhotos($photos, $id, $files);

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

        $apartFull = Apartment::addFacilities($apartment);

        $apartment_photos = ApartmentPhoto::where('id_apartment', '=', $id)
        ->orderBy('sort','desc')
        ->get();

        $form = Form::$inputs;

        return view('admin/edit-page', ['apartment' => $apartFull, 'apartment_photos' => $apartment_photos, 'form' => $form]);
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
        $input = $request->except(['_token','_method','save', 'photo']);

        $photos = $request->input('photo');

        $files = $request->file('photo');

        $this->addPhotos($photos, $id, $files);
        
        Apartment::where('id', $id)
        ->update($input['apartment']);

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
        $apPhotos = ApartmentPhoto::where('id_apartment',$id);
        $photos = $apPhotos->get();

        if($photos){
            foreach($photos as $photo){
                if(Storage::get('public/users_pictures/'.$photo->photo_url)){
                    Storage::delete('public/users_pictures/'.$photo->photo_url);
                }
            }
        }

        $apPhotos->delete();
        Apartment::where('id', '=', $id)->delete();
        return redirect('admin');
    }

    private function addPhotos($photos, $apId, $files){
        
        $getPhotos = ApartmentPhoto::where('id_apartment',$apId)->select('photo_url');

        $photosBefore = $getPhotos->get();

        ApartmentPhoto::where('id_apartment',$apId)->delete();
        
        if($files!=null){
            foreach($files as $file){
                $path = $file->store('public/users_pictures');
                $photos[] = explode("/", $path)[2];
            }
        }

        if($photos!=null){
            foreach($photos as $photo){
                if($photo != null){
                    ApartmentPhoto::insert(
                        [
                            'id_apartment' => $apId,
                            'photo_url' => $photo
                        ]
                    );
                }
            }
        }

        $photosAfter = $getPhotos->get();

        $bfPhotos = $this->getObjectNames($photosBefore, 'photo_url');
        $afPhotos = $this->getObjectNames($photosAfter, 'photo_url');

        $difArray = array_diff($bfPhotos, $afPhotos);
        
        foreach($difArray as $dif){
            if(Storage::get('public/users_pictures/'.$dif)){
                Storage::delete('public/users_pictures/'.$dif);
            }
        }
    }

    private function getObjectNames($photosObject, $field){
        $photos = [];
        if($photosObject){
            foreach($photosObject as $photo){
                $photos[] = $photo->$field;
            }
            return $photos;
        }     
    }
}
