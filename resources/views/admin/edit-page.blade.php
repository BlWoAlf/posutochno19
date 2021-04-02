@extends('pattern')

@section('content')
<div class="apartment-content">
    {{-- @foreach ($apartment as $item) --}}
        <div class="ap-data">
            @if(isset($apartment->id))
            
            <form action="{{url('admin/save-edit/'.$apartment->id)}}" method="post" enctype="multipart/form-data"> 
                @foreach ($apartment_photos as $item)
                <div class="image_box">
                    <div class="main_content_image">
                        <img src="{{asset('storage/users_pictures/'.$item->photo_url)}}">
                        <input type='hidden' name="photo[]" value="{{$item->photo_url}}">
                    </div>
                    <button class="delete-photo">Удалить фото</button>
                </div>
                @endforeach
                
                @include('layouts.redactor-form')
                {{ method_field('PUT') }}
            </form> 

            <form action="{{url('admin/delete-apartment/'.$apartment->id)}}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" name="delete" value="Удалить">
            </form>

            @else

            <form action="{{url('admin/save-create/')}}" method="post" enctype="multipart/form-data">
                @include('layouts.redactor-form')
                {{ method_field('POST') }}
            </form>
            
            @endif
        </div>
    {{-- @endforeach --}}
</div>
@endsection