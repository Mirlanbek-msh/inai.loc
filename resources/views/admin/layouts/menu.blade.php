<div class="menu-mobile menu-activated-on-click color-scheme-dark">
    <div class="mm-logo-buttons-w">
        <a class="mm-logo" href="{{ route('admin.home') }}"><img src="{{ asset('/assets/admin/img/logo.png') }}"><span>Панель управления</span></a>
        <div class="mm-buttons">
            <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
            </div>
        </div>
    </div>
    <div class="menu-and-user">
        <div class="logged-user-w">
            <div class="avatar-w">
                <img alt="" src="{{ asset('/assets/admin/img/no_avatar.png') }}">
            </div>
            <div class="logged-user-info-w">
                <div class="logged-user-name">
                    {{ auth()->user()->name }} 
                </div>
                <div class="logged-user-role">
                    {{ auth()->user()->getRoleNames()->first() }}
                </div>
            </div>
        </div>
        @include('admin.layouts.nav')
    </div>
</div>

<div class="menu-w selected-menu-color-light menu-has-selected-link menu-activated-on-click color-scheme-light color-style-default sub-menu-color-light menu-position-side menu-side-left menu-layout-compact sub-menu-style-inside">
    <div class="logo-w">
        <a class="logo" href="{{ route('admin.home') }}">
            <div class="logo">
                <img src="{{asset('/assets/admin/img/logo.png')}}" class="img-fluid">
            </div>            
            <div class="logo-label">
                {{trans('t.control_panel')}}
            </div>
        </a>
    </div>
    <div class="logged-user-w">
        <div class="logged-user-i">
            <div class="avatar-w">
                <img alt="" src="{{ asset('/assets/admin/img/no_avatar.png') }}">
            </div>
            <div class="logged-user-info-w">
                <div class="logged-user-name">
                    {{ auth()->user()->name }} 
                </div>
                <div class="logged-user-role">
                    {{ auth()->user()->getRoleNames()->first() }}
                </div>
            </div>
            <div class="logged-user-toggler-arrow">
                <div class="os-icon os-icon-chevron-down"></div>
            </div>
            <div class="logged-user-menu color-style-bright">
                <div class="logged-user-avatar-info">
                    <div class="avatar-w">
                        <img alt="" src="{{ asset('/assets/admin/img/no_avatar.png') }}">
                    </div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">
                            {{ auth()->user()->name }} 
                        </div>
                        <div class="logged-user-role">
                            {{ auth()->user()->getRoleNames()->first() }}
                        </div>
                    </div>
                </div>
                <div class="bg-icon">
                    <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                    <li>
                        <a href="{{ route('web.home') }}"><i class="os-icon os-icon-mail-18"></i><span>{{trans('t.to_site')}}</span></a>
                    </li>
                    <li>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @if(app()->getLocale() != $localeCode)
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <i class="flag-icon flag-icon-{{$localeCode}}"></i> <span>{{ strtoupper($localeCode) }}</span>
                            </a>
                            @endif
                        @endforeach
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="os-icon os-icon-signs-11"></i><span>{{trans('t.logout')}}</span></a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <h1 class="menu-page-header"></h1>
    @include('admin.layouts.nav')
</div>
