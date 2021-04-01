@extends('pattern')

@section('content')
<div class="apartment-content">
    {{-- @foreach ($apartment as $item) --}}
        <div class="ap-data">
            @if(isset($apartment->id))
            <form action="{{url('admin/save-edit/'.$apartment->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @foreach ($apartment_photos as $item)
            <div class="image_box">
                <div class="main_content_image">
                    <img src="{{asset('storage/users_pictures/'.$item->photo_url)}}">
                    <input type='hidden' name="photo[]" value="{{$item->photo_url}}">
                </div>
                <button class="delete-photo">Удалить фото</button>
            </div>
            @endforeach

            <br><br>

            добавить фото
            <input type='file' name='photo[]'>

            <br><br><br>

            <label>address <input type="text" name="address" value="{{$apartment->address}}"></label><br>
            <label>town <input type="text" name="town" value="{{$apartment->town}}"></label><br>
            <label>district <input type="text" name="district" value="{{$apartment->district}}"></label><br>
            <label>price1_2 <input type="text" name="price1_2" value="{{$apartment->price1_2}}"></label><br>
            <label>price3_9 <input type="text" name="price3_9" value="{{$apartment->price3_9}}"></label><br>
            <label>price10_29 <input type="text" name="price10_29" value="{{$apartment->price10_29}}"></label><br>
            <label>price30 <input type="text" name="price30" value="{{$apartment->price30}}"></label><br>
            <label>rooms <input type="text" name="rooms" value="{{$apartment->rooms}}"></label><br>
            <label>places <input type="text" name="places" value="{{$apartment->places}}"></label><br>
            <label>description <textarea type="text" name="description">{{$apartment->description}}</textarea></label><br>

            {{-- @foreach (json_decode($apartment->facilities) as $item) --}}
                {{-- <input type="text" name="{{}}" value="{{}}"> --}}
            {{-- @endforeach --}}

            <br><br>

            {{ method_field('PUT') }}
            <input type="submit" value="сохранить" name="save">
            </form>

            <form action="{{url('admin/delete-apartment/'.$apartment->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="submit" name="delete" value="Удалить">
            </form>

            @else
            <form action="{{url('admin/save-create/')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br><br>

                добавить фото
                <input type='file' name='photo[]'>

                <br><br><br>
                <label>address <input type="text" name="address"></label><br>
                <label>town <input type="text" name="town"></label><br>
                <label>district <input type="text" name="district"></label><br>
                <label>price1_2 <input type="text" name="price1_2"></label><br>
                <label>price3_9 <input type="text" name="price3_9"></label><br>
                <label>price10_29 <input type="text" name="price10_29"></label><br>
                <label>price30 <input type="text" name="price30"></label><br>
                <label>rooms <input type="text" name="rooms"></label><br>
                <label>places <input type="text" name="places"></label><br>
                <label>description <textarea type="text" name="description"></textarea></label>
    
                {{-- @foreach (json_decode($apartment->facilities) as $item) --}}
                    {{-- <input type="text" name="{{}}" value="{{}}"> --}}
                {{-- @endforeach --}}

                <br><br>
    
                {{ method_field('POST') }}
                <input type="submit" value="сохранить" name="save">
                </form>
            @endif
        </div>
    {{-- @endforeach --}}
</div>
@endsection