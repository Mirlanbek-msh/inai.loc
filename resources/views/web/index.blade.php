@extends('web.layouts.base')

@section('title', trans('t.kgiai'))

@section('social_meta')
    <!-- Twitter Meta -->
    {{-- <meta name="twitter:site" content="@centraltoday"> --}}
    {{-- <meta name="twitter:creator" content="@centraltoday"> --}}
    <meta name="twitter:card" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:title" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:description" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:image" content={{ asset('/images/icon-sq.png') }}">

    <!-- Facebook Meta -->
    <meta property="og:title" content="INAI.KG">
    <meta property="og:description" content="{{ trans('t.kgiai') }}">

    <meta property="og:site_name" content="inai.kg">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://inai.kg">
    <meta property="og:site_name" content="inai.kg">

    <meta property="og:image" content="/images/og-image.jpg">
    <meta property="og:image:width" content="1239">
    <meta property="og:image:height" content="649">
    <meta property="og:url" content="http://inai.kg">
@endsection

@section('content')

<section class="section sps sps--abv sps-pt-60">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            @for($i = 0; $i < ($banner_events->count() + $banner_posts->count()); $i++)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" @if($i == 0) class="active" @endif></li>
            @endfor
        </ol>
        <div class="carousel-inner">
            @foreach($banner_events as $row)
            <div class="carousel-item @if($loop->first) active @endif">
                <img class="d-block w-100" src="{{ asset($row->image) }}" alt="">
                <div class="carousel-caption d-md-block">
                    <h5>{{ $row->title_lang }}</h5>
                    <p class="d-sm-none d-md-block">{{ $row->description_lang }}</p>

                    <a href="{{ route('web.event.show', $row->slug) }}" class="btn btn-primary">{{ trans('t.learn_more') }}</a>
                    @if($row->has_signing_up_form)
                    <a href="{{ route('web.event.apply', $row->slug) }}" class="btn btn-outline-primary">{{ trans('t.sign_up') }}</a>
                    @endif
                </div>
            </div>
            @endforeach

            @foreach($banner_posts as $row)
            <div class="carousel-item @if($loop->first && !$banner_events->count()) active @endif">
                <img class="d-block w-100" src="{{ asset($row->image) }}" alt="">
                <div class="carousel-caption d-md-block">
                    <h5>{{ $row->title }}</h5>
                    <p class="d-sm-none d-md-block">{{ $row->description }}</p>

                    <a href="{{ route('web.post.show', $row->slug) }}" class="btn btn-primary">{{ trans('t.learn_more') }}</a>
                    {{-- <a href="" class="btn btn-outline-primary">Other</a> --}}
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev d-lg-flex d-none" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="carousel-control-next d-lg-flex d-none" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
</section>

<section class="section bg-gray pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 text-center">
                <h2 class="text-bold section-title mb-3">{{ trans('t.events') }}</h2>
                <hr class="divider w-75">
            </div>

            @foreach($events as $row)
            <div class="col-md-6 col-sm-12 p-4 d-flex justify-content-center">
                <div class="event">
                    <div class="event-img">
                        <img src="{{ asset($row->image) }}" alt="">
                        <div class="event-overlay">
                            @if($row->has_signing_up_form)
                            <a href="{{ route('web.event.apply', $row->slug) }}" class="btn btn-primary">{{ trans('t.sign_up') }}</a>
                            @endif
                            <a href="{{ route('web.event.show', $row->slug) }}" class="btn btn-outline-primary">{{ trans('t.learn_more') }}</a>
                        </div>
                    </div>
                    <div class="event-body">
                        <div class="meta-text text-center">
                            <h3>{{$row->event_start_date->format('d')}}</h3>
                            <p>{{trans("months_decl.".$row->event_start_date->format('m'))}}</p>
                            <span>{{$row->event_start_date->format('H:i')}}</span>
                        </div>
                        <div class="main-text">
                            <h6><a href="{{ route('web.event.show', $row->slug) }}">{{$row->title_lang}}</a></h6>
                            <ul>
                                <li><i class="fa fa-user"></i> {{$row->author_name_lang}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-12 justify-content-center d-flex">
                <a href="{{ route('web.event.index') }}" class="btn btn-primary">{{ trans('t.show_more') }}</a>
            </div>

        </div>
    </div>
</section>

<section class="section bg-gray pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 text-center">
                <h2 class="text-bold section-title mb-3">{{ trans('t.recent_news') }}</h2>
                <hr class="divider w-75">
            </div>

            @foreach($posts as $row)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post">
                    <a href="{{ route('web.post.show', $row->slug) }}" class="post-img">
                        <img src="{{ asset($row->thumb) }}" alt="">
                    </a>
                    <div class="post-body">
                        <a href="{{ route('web.post.show', $row->slug) }}"><h6>{{ $row->title }}</h6></a>
                        <p>{{ $row->description }}</p>
                        <div class="mt-3">
                            <span class="meta-text"><i class="fa fa-calendar"></i> {{ $row->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-12 justify-content-center d-flex mb-3">
                <a href="{{ route('web.post.index') }}" class="btn btn-primary">{{ trans('t.show_more') }}</a>
            </div>

        </div>
    </div>
</section>

@endsection
                
@section('scripts')
<script>


</script>
@endsection