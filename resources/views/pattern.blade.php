<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ЧерногорскСутки.ру — Квартиры посуточно | в Черногорске</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/brands.css')}}">
    <link rel="stylesheet" href="{{asset('css/solid.css')}}">
    <link rel="stylesheet" href="{{asset('css/regular.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/dynamic_content.css')}}">
    <link rel="stylesheet" href="{{asset('css/media.css')}}">
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
</head>
<body>
<header class="header">
    <div class="header_upper_content">
        <div class="container header_upper_container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url ('/')}}">
                    <img src="{{asset('images/apartments-2.png')}}" alt="Главная">
                    <span>ЧерногорскСутки.ру</span>
                </a>
                <div class="navbar-text">
                    <span>Квартиры посуточно</span>
                    <span>в Черногорске</span>
                </div>
            </div>
            <div class="mini_menu_button">
                <i class="fas fa-bars"></i>
            </div>
            <a class="mini_phone" href="tel:+79628431999">
                <i class="fas fa-phone-alt"></i>
            </a>
            <div class="header_contact_info_box">
                <span>Звоните круглосуточно:</span>
                <div class="header_contact_info">
                    <div class="header_icon"><i class="fas fa-phone-alt"></i></div>
                    <ul>
                        <li><a class="phone" href="tel:+79231234567">+7 962 843-19-99</a></li>
                        <li><a class="phone" href="tel:+79231234567">+7 913 034-27-57</a></li>
                        <li><a class="phone" href="tel:+79231234567">+7 (3902)351-583</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header_lower_content">
        <div class="container header_lower_container">
            <div class="header_site_menu unselectable">
                <ul class="header_menu_list">
                    <li><a href="{{url ('/')}}" class="{{Request::is('/') ? 'current_page' : ''}}">Главная</a></li>
                    <li><a href="{{url('pravila_prozhivaniya')}}" class="{{Request::is('pravila_prozhivaniya') ? 'current_page' : ''}}">Правила проживания</a></li>
                    <li><a href="{{url('otchetnye-dokumenty')}}" class="{{Request::is('otchetnye-dokumenty') ? 'current_page' : ''}}">Отчёты и документы</a></li>
                    <li><a href="{{url('sposoby_oplaty')}}" class="{{Request::is('sposoby_oplaty') ? 'current_page' : ''}}">Способы оплаты</a></li>
                </ul>
            </div>
            <div class="header_mini_menu_box unselectable">
                <ul class="header_mini_menu">
                    <li><a href="{{url ('/')}}">Главная</a></li>
                    <li><a href="{{url('pravila_prozhivaniya')}}">Правила проживания</a></li>
                    <li><a href="{{url('otchetnye-dokumenty')}}">Отчёты и документы</a></li>
                    <li><a href="{{url('sposoby_oplaty')}}">Способы оплаты</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer class="footer">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-sm-12 col-md-7 col-lg-4">
                <div class="widget widget_aviators_features">
                    <div class="widgettitle">
                        Почему стоит выбрать нас?
                    </div>
                    <div class="clearfix">
                        <ul class="clearfix_list">
                            <li><i class="fas fa-thumbs-up"></i><span>Всегда чистые квартиры</span></li>
                            <li><i class="fas fa-wallet"></i><span>Бесплатное бронирование</span></li>
                            <li><i class="fas fa-suitcase"></i><span>Бесплатный трансфер</span></li>
                            <li><i class="fas fa-file-alt"></i><span>Документы командированным</span></li>
                            <li><i class="fas fa-credit-card"></i><span>Оплата по безналичному расчету</span></li>
                            <li><i class="fas fa-map-marked-alt"></i><span>Квартиры в центре города</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-1 col-lg-2"></div>
            <div class="site_menu col-sm-12 col-md-4 col-lg-3">
                <div class="widgettitle menu_header">Меню сайта</div>
                <div class="menu-primary-container">
                    <ul id="menu-primary" class="menu">
                        <li class=""><a href="{{url('/')}}"><i class="fas fa-angle-right"></i>Главная</a></li>
                        <li class=""><a href="{{url('pravila_prozhivaniya')}}" aria-current="page"><i class="fas fa-angle-right"></i>Правила проживания</a></li>
                        <li class=""><a href="{{url('otchetnye-dokumenty')}}"><i class="fas fa-angle-right"></i>Отчёты  и документы</a></li>
                        <li class=""><a href="{{url('sposoby_oplaty')}}"><i class="fas fa-angle-right"></i>Способы оплаты</a></li>
                    </ul>
                </div>
            </div>
            <div class="contacts col-sm-12 col-md-5 col-lg-3">
                <div class="widgettitle">Контакты</div>
                <div class="textwidget contacts_list">
                    <div>Звоните круглосуточно:</div>
                    <ul>
                        <li><a class="telefon-f" href="tel:+79628431999">+7 962 843-19-99</a></li>
                        <li><a class="telefon-f" href="tel:+79130342757">+7 913 034-27-57</a></li>
                        <li><a class="telefon-f" href="tel:+73902351587">+7 (3902) 351-587</a></li>
                        <li><a class="telefon-f" href="sutki-v-chernogorske@mail.ru">sutki-v-chernogorske@mail.ru</a></li>
                    </ul>
                </div>
                <div id="identx">
                    <span>
                        <a class="hv" title="identx.ru" href="//identx.ru/?utm_source=copyright&amp;utm_medium=http://posutochno19.ru/">создание сайтов</a>
                        <a class="hv" title="identx.ru" href="//identx.ru/реклама-яндекс-google/?utm_source=copyright&amp;utm_medium=http://posutochno19.ru/">реклама в интернете</a>
                    </span>
                    <div class="logo_identx">
                    <a class="hv identx" title="identx.ru" href="//identx.ru/?utm_source=copyright&amp;utm_medium=http://posutochno19.ru/">
                        <img src="../images/logo.svg" alt="айдентика">
                        <span class="first"><span class="green_letter">A</span><span>йдентика</span></span>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>