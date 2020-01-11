@extends('pattern')

@section('content')
    {{$apartment_data->address}}
    @foreach($apartment_photos as $photo)
        {{$photo->photo_url}}
    @endforeach
    @foreach($similar_apartments as $similar_apartment)
        {{$similar_apartment->address}}
    @endforeach
@endsection