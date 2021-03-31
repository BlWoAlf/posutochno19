@extends('pattern')

@section('content')
<div class="apartment-content">
    {{-- @foreach ($apartment as $item) --}}
        <div class="ap-data">
            @if(isset($apartment->id))
            <form action="{{url('admin/save-edit/'.$apartment->id)}}" method="post">
            {{ csrf_field() }}
            <label>address <input type="text" name="address" value="{{$apartment->address}}"></label>
            <label>town <input type="text" name="town" value="{{$apartment->town}}"></label>
            <label>district <input type="text" name="district" value="{{$apartment->district}}"></label>
            <label>price1_2 <input type="text" name="price1_2" value="{{$apartment->price1_2}}"></label>
            <label>price3_9 <input type="text" name="price3_9" value="{{$apartment->price3_9}}"></label>
            <label>price10_29 <input type="text" name="price10_29" value="{{$apartment->price10_29}}"></label>
            <label>price30 <input type="text" name="price30" value="{{$apartment->price30}}"></label>
            <label>rooms <input type="text" name="rooms" value="{{$apartment->rooms}}"></label>
            <label>places <input type="text" name="places" value="{{$apartment->places}}"></label>
            <label>description <textarea type="text" name="description">{{$apartment->description}}</textarea></label>

            {{-- @foreach (json_decode($apartment->facilities) as $item) --}}
                {{-- <input type="text" name="{{}}" value="{{}}"> --}}
            {{-- @endforeach --}}

            {{ method_field('PUT') }}
            <input type="submit" value="сохранить" name="save">
            </form>

            <form action="{{url('admin/delete-apartment/'.$apartment->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="submit" name="delete" value="Удалить">
            </form>

            @else
            <form action="{{url('admin/save-create/')}}" method="post">
                {{ csrf_field() }}
                <label>address <input type="text" name="address"></label>
                <label>town <input type="text" name="town"></label>
                <label>district <input type="text" name="district"></label>
                <label>price1_2 <input type="text" name="price1_2"></label>
                <label>price3_9 <input type="text" name="price3_9"></label>
                <label>price10_29 <input type="text" name="price10_29"></label>
                <label>price30 <input type="text" name="price30"></label>
                <label>rooms <input type="text" name="rooms"></label>
                <label>places <input type="text" name="places"></label>
                <label>description <textarea type="text" name="description"></textarea></label>
    
                {{-- @foreach (json_decode($apartment->facilities) as $item) --}}
                    {{-- <input type="text" name="{{}}" value="{{}}"> --}}
                {{-- @endforeach --}}
    
                {{ method_field('POST') }}
                <input type="submit" value="сохранить" name="save">
                </form>
            @endif
        </div>
    {{-- @endforeach --}}
</div>
@endsection