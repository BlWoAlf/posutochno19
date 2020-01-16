@extends('pattern')

@section('title')
    <title>ЧерногорскСутки.ру — Квартиры посуточно | в Черногорске</title>
@endsection

@section('content')
    <div class="container main_content">
        <div class="main_content_header">Квартиры на сутки в Черногорске</div>
        <div class="row">
            @foreach($items as $item)
                <div class="col-sm-12 col-md-6 col-lg-4 main_content_col_box">
                    <div class="main_content_box">
                        <div class="main_content_image">
                            <a href="{{url('apartment/'.$item->id)}}">
                                <img src="{{asset('users_pictures/'.$item->photo)}}">
                                <div class="main_content_image_background">
                                    <div class="main_content_image_background_circle">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="main_content_image_price">{{$item->price}} руб.</div>
                            </a>
                        </div>
                        <div class="main_content_maininfo">
                            <div class="main_content_maininfo_address">
                                <a href="{{url('apartment/'.$item->id)}}">{{$item->address}}</a>
                            </div>
                            <div class="main_content_maininfo_r_and_p">
                                <div class="main_content_maininfo_r_and_p_rooms">
                                    <i class="fas fa-th-large"></i> <span>Комнат: {{$item->rooms}}</span>
                                </div>
                                <div class="main_content_maininfo_r_and_p_places">
                                    <i class="fas fa-bed"></i> <span>{{$item->places}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container static_content">
        <div class="map"></div>
        <div class="row availability_list">
            <div class="col-sm-12 col-md-4 col-lg-4 availability_box">
                <div class="availability_icon"><i class="fas fa-wifi"></i></div>
                <div class="availability_head">Бесплатный Wi-Fi</div>
                <div class="availability_description">Можете быть уверены, что в любой посуточной квартире вы найдете бесплатный безлимитный интернет 100 мбит/с..</div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 availability_box">
                <div class="availability_icon"><i class="fas fa-desktop"></i></div>
                <div class="availability_head">Бытовая техника</div>
                <div class="availability_description">Полный набор бытовой техники для развлечений и удобств: ЖК-телевизор, холодильник, микроволновка, утюг, фен, стиральная машина и пр.</div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 availability_box">
                <div class="availability_icon"><i class="fas fa-broom"></i></div>
                <div class="availability_head">Уборка квартиры</div>
                <div class="availability_description">При долгом проживании мы берем на себя обязанности по уборке квартиры и смене постельного белья (1 раз в 2 дня), чтобы вы чувствовали себя как в гостинице!</div>
            </div>
        </div>
        <div class="row advantages_list">
            <div class="col-sm-12 col-md-6 col-lg-4 advantage_box">
                <div class="advantage_icon"><i class="fas fa-thumbs-up"></i></div>
                <div class="advantage_text">
                    <div class="advantage_text_head">Всегда чистые квартиры</div>
                    <div class="advantage_text_description">Снимая квартиру посуточну у нас, вы можете быть уверены, что получите чистую квартиру без грязи, пыли или неприятного запаха.</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 advantage_box">
                <div class="advantage_icon"><i class="fas fa-wallet"></i></div>
                <div class="advantage_text">
                    <div class="advantage_text_head">Бесплатное бронирование</div>
                    <div class="advantage_text_description">Cамый верный способ заранее позаботиться о том, чтобы по приезду в Черногорск вас уже ждала посуточная квартира.</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 advantage_box">
                <div class="advantage_icon"><i class="fas fa-suitcase"></i></div>
                <div class="advantage_text">
                    <div class="advantage_text_head">Бесплатный трансфер</div>
                    <div class="advantage_text_description">Для проживающих у нас 3 дня и более мы предоставляем бесплатный трансфер от аэропорта, ЖД- или автовокзала.</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 advantage_box">
                <div class="advantage_icon"><i class="fas fa-file-alt"></i></div>
                <div class="advantage_text">
                    <div class="advantage_text_head">Документы командированным</div>
                    <div class="advantage_text_description">Если вы едете в командировку, то вам потребуются документы для отчетности, чтобы расходы за проживание оплатила компания. Мы предоставляем ВСЕ необходимые документы.</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 advantage_box">
                <div class="advantage_icon"><i class="fas fa-credit-card"></i></div>
                <div class="advantage_text">
                    <div class="advantage_text_head">Оплата по безналичному расчету</div>
                    <div class="advantage_text_description">Отпрваляете сотрудника в командировку? Мы можем предложить вам оплатить проживание банковским переводом. Акты вы получите с сотрудником либо по почте.</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 advantage_box">
                <div class="advantage_icon"><i class="fas fa-map-marked-alt"></i></div>
                <div class="advantage_text">
                    <div class="advantage_text_head">Квартиры в центре города</div>
                    <div class="advantage_text_description">Мы не держим квартиры в спальных или удаленных промышленных районах. Все нашипосуточные квартиры находятся близко к центру Черногорска.</div>
                </div>
            </div>
        </div>
    </div>
@endsection
