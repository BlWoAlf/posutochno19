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
        $propName = $item['propertyName'];
        $value = null;

        if(isset($apartment->$propName)){
            if(isset($item['prop'])){
                $value = $apartment->$propName[$item['prop']];               
            }
            else{
                $value = $apartment->$propName;
            }
        }

        if(isset($item['prop'])){
            $propName = $item['prop'];
        }
    @endphp
        @if($type == 'text')
        <label>
            {{$propName}}: <input type="{{$type}}" name="{{$name}}" value="{{$value}}">
        </label>
        <br>
        @elseif($type == 'textarea')
        <label>
            {{$propName}}: <textarea name="{{$name}}">{{$value}}</textarea>
        </label>
        <br>
        @elseif($type == 'checkbox')
        <label>
            <input name="{{$name}}" type="hidden" value="0">
            {{$propName}}: <input name="{{$name}}" type="{{$type}}" value="1" @if($value == 1) checked @endif>
        </label>
        <br>
        @endif
    @endforeach
    <br><br>
    <input type="submit" value="сохранить" name="save">
@endif