<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{trans('t.login')}} | {{trans('t.control_panel')}}</title>

    <link rel="stylesheet" href="{{ asset('/admin/css/app.css') }}">

    <!-- Twitter Meta -->
    {{-- <meta name="twitter:site" content="@centraltoday"> --}}
    {{-- <meta name="twitter:creator" content="@centraltoday"> --}}
    <meta name="twitter:card" content="{{trans('t.login')}} | {{trans('t.control_panel')}}">
    <meta name="twitter:title" content="{{trans('t.login')}} | {{trans('t.control_panel')}}">
    <meta name="twitter:description" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:image" content={{ asset('/images/icon-sq.png') }}">

    <!-- Facebook Meta -->
    <meta property="og:title" content="{{trans('t.login')}} | {{trans('t.control_panel')}}">
    <meta property="og:description" content="{{ trans('t.kgiai') }}">

    <meta property="og:site_name" content="inai.kg">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://inai.kg">
    <meta property="og:site_name" content="inai.kg">

    <meta property="og:image" content="/images/og-image.jpg">
    <meta property="og:image:width" content="1239">
    <meta property="og:image:height" content="649">
    <meta property="og:url" content="http://inai.kg">

    <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/images/icons/site.webmanifest">
    <link rel="mask-icon" href="/images/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>
<body class="auth-wrapper">
      <div class="auth-box-w">
        <div class="logo-w">
        <a href="index.html"><img alt="" src="{{ asset('/admin/img/logo.png') }}"></a>
        </div>
        <h4 class="auth-header">
                {{trans('t.authorization')}}
        </h4>
        <form method="POST" action="{{ route('loginPost') }}" novalidate>
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="password">{{trans('t.password')}}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                @if ($errors->has('emailandpass'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('emailandpass') }}</strong>
                    </span>
                @endif
            </div>
            <div class="buttons-w">
                <button class="btn btn-primary" type="submit">{{trans('t.login')}}</button>
                {{-- <div class="form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{trans('t.remember')}}
                    </label>
                </div> --}}
            </div>
        </form>
      </div>

</body>
</html>