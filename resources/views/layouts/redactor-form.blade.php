@if(isset($form))
    {{ csrf_field() }}
    <br><br>
    добавить фото
    <input type='file' name='photo[]'>
    <br><br><br>
    @foreach ($form as $item)
    @php
        $name = $item['name'];
        $type = $item['type'];
    @endphp
        @if($type == 'text')
        <label>
            {{$name}}: <input type="{{$type}}" name="apartment[{{$name}}]"@if(isset($apartment->$name)) value="{{$apartment->$name}}" @endif>
        </label>
        <br>
        @elseif($type == 'textarea')
        <label>
            {{$name}}: <textarea name="apartment[{{$name}}]">@if(isset($apartment->$name)) {{$apartment->$name}} @endif</textarea>
        </label>
        <br>
        @elseif($type == 'checkbox')
        <label>
            <input name="apartment[{{$name}}]" type="hidden" value="0">
            {{$name}}: <input name="apartment[{{$name}}]" type="{{$type}}" value="1" @if(isset($apartment->$name) && $apartment->$name == 1) checked @endif>
        </label>
        <br>
        @endif
    @endforeach
    <br><br>
    <input type="submit" value="сохранить" name="save">
@endif