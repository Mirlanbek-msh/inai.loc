<nav class="navbar navbar-expanded-lg navbar-top top-bar-menu">
    <div class="container">
        <nav class="nav navbar-social">
            <a class="nav-link" href="tel:+996557312711">
                <i class="fa fa-phone"></i> +996 557 312 711
            </a>
            <a class="nav-link" href="mailto:info@inai.kg">
                <i class="fa fa-envelope"></i> info@inai.kg
            </a>
        </nav>
        {{-- <ul class="nav justify-content-center nav-info">
            <li class="nav-item">
                <span>asdfasdfasdf</span>
            </li>
        </ul> --}}
        <ul class="nav navbar-navs locale">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @if(app()->getLocale() != $localeCode)
                <li class="nav-item">
                    <a class="nav-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        <span class="label label-default"><span class="flag-icon flag-icon-{{$localeCode}}"></span> {{ strtoupper($localeCode) }}</span>
                    </a>
                </li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>
<header class="header sticky-top sps sps--abv" >
    <div class="container">
        <div class="main-header">
            <div id="hamburger-menu" class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <div class="logo">
                <a href="{{ route('web.home') }}" class="navbar-brand">
                    <img src="{{ asset('/images/logo.png') }}" alt="">
                </a>
            </div>
            <nav id="main-nav">
                <ul class="nav float-right">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('web.home') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.event.index') }}">События</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.gallery') }}">Галерея</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.about') }}">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.contact') }}">Контакты</a>
                    </li>
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-flip="false" data-display="static">
                        <i class="fa fa-graduation-cap"></i> Для абитуриентов 
                        </a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <div class="container">
                                <div class="row">
                                    <li class="col-lg-6 col-md-12 col-sm-12">
                                        <ul>
                                            <li class="dropdown-header">Бакалавриат информатики</li>
                                            <li><a href="#">Программные технологии</a></li>
                                            <li><a href="#">Медицинская информатика</a></li>
                                            <li><a href="#">Веб-информатика</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12">
                                        <ul>
                                            <li class="dropdown-header">Магистратура информатики</li>
                                            <li><a href="#">Инженерия системного программирования проектов</a></li>
                                            <li><a href="#">Предпринимательство в сфере информационных технологий</a></li>
    
                                        </ul>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12">
                                        <ul>
                                            <li class="dropdown-header">Требования к поступлению</li>
                                            <li><a href="#">Поступление в бакалавриат</a></li>
                                            <li><a href="#">Поступление в магистратуру</a></li>
                                            <li><a href="#">ДААД стипендии для Бишкека</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12">
                                        <ul>
                                            <li class="dropdown-header">Международное сотрудничество</li>
                                            <li><a href="#">Ассоциативный партнер</a></li>
                                            <li><a href="#">Практика</a></li>
                                            <li><a href="#">ДААД стипендии для Цвикау</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-navs locale d-lg-none mt-3 float-left">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if(app()->getLocale() != $localeCode)
                        <li class="nav-item">
                            <a class="nav-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <span class="label label-default"><span class="flag-icon flag-icon-{{$localeCode}}"></span> {{ strtoupper($localeCode) }}</span>
                            </a>
                        </li>
                        @endif
                    @endforeach
                    <li class="nav-item contacts-item">
                        <ul class="nav-contacts">
                            <li><a href="mailto:info@inai.kg"> <i class="fa fa-envelope"></i> info@inai.kg</a></li>
                            <li><a href="tel:+996557312711"> <i class="fa fa-phone"></i> +996 557 312 711</a></li>
                        </ul>

                    </li>
                    <li class="nav-item social-item">
                        <div class="ml-3 mt-1 social-links">
                            <ul>
                                <li><a class="fab fa-facebook-f fb" href="//www.facebook.com/kgiaibishkek" target="_blank"></a></li>
                                <li><a class="fab fa-youtube youtube" href="#" target="_blank"></a></li>
                                <li><a class="fab fa-twitter twitter" href="#" target="_blank"></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div id="shadow-layer"></div>

