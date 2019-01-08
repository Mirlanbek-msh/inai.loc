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
                        <a class="nav-link" href="{{ route('web.home') }}">{{ trans('t.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.event.index') }}">{{ trans('t.events') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.gallery') }}">{{ trans('t.gallery') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.about') }}">{{ trans('t.about') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.contact') }}">{{ trans('t.contacts') }}</a>
                    </li>
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-flip="false" data-display="static">
                        <i class="fa fa-graduation-cap"></i> {{ trans('t.for_graduates') }}
                        </a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <div class="container">
                                <div class="row">
                                    <li class="col-lg-6 col-md-12 col-sm-12">
                                        <ul>
                                            <li class="dropdown-header">{{ $bachelor->title_lang }}</li>
                                            @foreach($bachelor->pages as $row)
                                            <li><a href="{{ route('web.application.show', $bachelor->slug) }}">{{$row->title_lang}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12">
                                        <ul>
                                            <li class="dropdown-header">{{ $master->title_lang }}</li>
                                            @foreach($master->pages as $row)
                                            <li><a href="{{ route('web.application.show', $master->slug) }}">{{$row->title_lang}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12">
                                        <ul>
                                            <li class="dropdown-header">{{ $admission->title_lang }}</li>
                                            @foreach($admission->pages as $row)
                                            <li><a href="{{ route('web.application.show', $admission->slug) }}">{{$row->title_lang}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12">
                                        <ul>
                                            <li class="dropdown-header">{{ $internationalization->title_lang }}</li>
                                            @foreach($internationalization->pages as $row)
                                            <li><a href="{{ route('web.application.show', $internationalization->slug) }}">{{$row->title_lang}}</a></li>
                                            @endforeach
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

