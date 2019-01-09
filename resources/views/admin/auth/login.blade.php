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
    @include('partials.ogdata')
    <meta property="og:description" content="{{ trans('t.kgiai') }}">
    <meta property="og:title" content="{{trans('t.login')}} | {{trans('t.control_panel')}}">
    @include('partials.favicon')

    

</head>
<body class="auth-wrapper">
      <div class="auth-box-w">
        <div class="logo-w">
        <a href="index.html"><img alt="" src="{{ asset('/admin/img/logo-big.png') }}"></a>
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