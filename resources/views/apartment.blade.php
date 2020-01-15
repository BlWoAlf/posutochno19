@extends('pattern')

@section('content')
    <div class="container main-picture-container">
        <div class="main-picture-container-header">
        <div class="main-picture-container-header-address">{{$apartment_data->address}}</div>
            <div class="main-picture-container-header-district">
            <div class="main-picture-container-header-district-address">{{$apartment_data->town}}, {{$apartment_data->district}}</div>
            <div class="main-picture-container-header-district-price">{{$apartment_data->price1}} руб.</div>
            </div>
        </div>
        <div class="main-picture-container-picture"><img id="main-picture" src="@if($apartment_photos->count() > 0) {{asset('users_pictures/'.$apartment_photos->first()->photo_url)}} @endif"></div>
    </div>
    <div class="container more-pictures-container ">
        <div class="more-pictures-container-box owl-carousel">
            @foreach($apartment_photos as $apartment_photo)
                <img class="mini-picture" src="{{asset('users_pictures/'.$apartment_photo->photo_url)}}">
            @endforeach
        </div>
    </div>
    <div class="container properties-container">
        <div class="row properties-container-listbox">
            <div class="col-sm-12 col-md-6">
                <ul>
                    <li><span>Комнат</span><span>{{$apartment_data->rooms}}</span></li>
                    <li><span>Спальных мест</span><span>{{$apartment_data->places}}</span></li>
                    <li><span>Лифт</span><span>@if($apartment_data_facilities->elevator==1) Есть@else Нет@endif</span></li>
                    <li><span>Балкон</span><span>@if($apartment_data_facilities->balcony==1) Есть@else Нет@endif</span></li>
                    <li><span>Этаж</span><span>{{$apartment_data_facilities->floor}}</span></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6">
                <ul>
                    <li><span>Цена за 1-2 дня</span><span>{{$apartment_data->price1}} руб.</span></li>
                    <li><span>3-9 дней</span><span>{{$apartment_data->price2}} руб.</span></li>
                    <li><span>10-29 дней</span><span>{{$apartment_data->price3}} руб.</span></li>
                    <li><span>от 30 дней</span><span>{{$apartment_data->price30}} руб.</span></li>                    
                </ul>
            </div>
        </div>        
    </div>
    <div class="container description-container">
        <div class="description-container-head apartment_page-head">Описание</div>
        <div class="description-container-body">{{$apartment_data->description}}</div>
    </div>
    <div class="container facilities-container">
        <div class="facilities-container-head apartment_page-head">Удобства</div>
        <div class="row facilities-container-listbox">
            <div class="col-sm-12 col-md-6">
                <ul>
                    <li><span>WiFi</span><span>@if($apartment_data_facilities->wifi==1) <i class="fas fa-check-circle"></i>@else <i class="fas fa-times-circle"></i>@endif</span></li>
                    <li><span>Парковка</span><span>@if($apartment_data_facilities->parking==1) <i class="fas fa-check-circle"></i>@else <i class="fas fa-times-circle"></i>@endif</span></li>
                    <li><span>Стиральная машина</span><span>@if($apartment_data_facilities->washer==1) <i class="fas fa-check-circle"></i>@else <i class="fas fa-times-circle"></i>@endif</span></li>
                    <li><span>Утюг</span><span>@if($apartment_data_facilities->iron==1) <i class="fas fa-check-circle"></i>@else <i class="fas fa-times-circle"></i>@endif</span></li>                    
                </ul>
            </div>
            <div class="col-sm-12 col-md-6">
                <ul>
                    <li><span>Мягкая мебель</span><span>@if($apartment_data_facilities->furniture==1) <i class="fas fa-check-circle"></i>@else <i class="fas fa-times-circle"></i>@endif</span></li>
                    <li><span>СВЧ-печь</span><span>@if($apartment_data_facilities->microwave==1) <i class="fas fa-check-circle"></i>@else <i class="fas fa-times-circle"></i>@endif</span></li>
                    <li><span>Телевизор</span><span>@if($apartment_data_facilities->tv==1) <i class="fas fa-check-circle"></i>@else <i class="fas fa-times-circle"></i>@endif</span></li>
                    <li><span>Фен</span><span>@if($apartment_data_facilities->hairdryer==1) <i class="fas fa-check-circle"></i>@else <i class="fas fa-times-circle"></i>@endif</span></li>                    
                </ul>
            </div>
        </div> 
    </div>
    <div class="container location-container"></div>
    <div class="container similar_apartments-container">
        <div class="similar_apartments-container-head apartment_page-head">Похожие квартиры</div>
        <div class="row">        
        </div>
    </div>
@endsection