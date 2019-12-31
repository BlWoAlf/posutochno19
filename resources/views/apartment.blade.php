@extends('pattern')

@section('content')
    {{$apartment_data->id}}
    {{$aprtment_data->address}}
    @foreach($apartment_photos as $photo)
    {{$photo->photo_url}}
    @endforeach
@endsection