@extends('web.layouts.base')

@section('title', $row->title_lang. " | INAI.KG")

@section('social_meta')
    <!-- Twitter Meta -->
    {{-- <meta name="twitter:site" content="@centraltoday"> --}}
    {{-- <meta name="twitter:creator" content="@centraltoday"> --}}
    <meta name="twitter:card" content="{{$row->title_lang}} | INAI.KG">
    <meta name="twitter:title" content="{{$row->title_lang}} | INAI.KG">
    <meta name="twitter:description" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:image" content="{{ asset('/ogassets/og-image.jpg') }}">

    <!-- Facebook Meta -->
    <meta property="og:title" content="{{$row->title_lang}} | INAI.KG">
    <meta property="og:description" content="{{ trans('t.kgiai') }}">

    @include('partials.ogdata')
@endsection

@section('content')

<section class="section pt-4 sps sps--abv sps-pt-80">
    <div class="container">
        <nav class="mt-md-4 mt-sm-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">{{ trans('t.home') }}</a></li>
                <li class="breadcrumb-item active">{{ $row->title_lang }}</li>
            </ol>
        </nav>
        <div class="post-full">
            <div class="row">
                <div class="col-12 mb-3 text-center mt-3">
                    <h2 class="text-bold section-title mb-3">{{ $row->title_lang }}</h2>
                    <hr class="divider w-75">
                </div>
    
                <div class="col-12 mb-3 mt-3">
                    <div class="logo">
                        <div class="logo-img">
                            <img src="{{ asset('/images/logo-sq.jpg') }}" alt="">
                        </div>
                        <span class="logo-text">INAI.KG</span>
                    </div>
                </div>

                <div class="col-12 mt-3 mb-3">
                    <div class="post-body">
                        {!! $row->content_lang !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
                
@section('scripts')
<script>


</script>
@endsection