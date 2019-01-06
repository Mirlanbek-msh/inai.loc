@extends('web.layouts.base')

@section('title', trans('t.kgiai'))

@section('social_meta')
    <!-- Twitter Meta -->
    <meta name="twitter:site" content="@centraltoday">
    <meta name="twitter:creator" content="@centraltoday">
    <meta name="twitter:card" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:title" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:description" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:image" content={{ asset('images/favicon.ico') }}">

    <!-- Facebook Meta -->
    <meta property="og:description" content="{{ trans('t.kgiai') }}">
    <meta property="og:title" content="{{ trans('t.kgiai') }}">

    <meta property="og:site_name" content="inai.kg">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://inai.kg">
    <meta property="og:site_name" content="inai.kg">
    <meta property="og:image" content="{{ asset('images/favicon.ico') }}">
    <meta property="og:image:secure_url" content="{{ asset('images/favicon.ico', true) }}">
    <meta property="og:image:width" content="64">
    <meta property="og:image:height" content="64">
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
                    <h5>{{ $row->title }}</h5>
                    <p class="d-sm-none d-md-block">{{ $row->description }}</p>

                    <a href="{{ route('web.event.show', $row->slug) }}" class="btn btn-primary">{{ trans('t.learn_more') }}</a>
                    <a href="{{ route('web.event.apply', $row->slug) }}" class="btn btn-outline-primary">{{ trans('t.sign_up') }}</a>
                </div>
            </div>
            @endforeach

            @foreach($banner_posts as $row)
            <div class="carousel-item @if($loop->first) active @endif">
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

            <div class="col-md-6 col-sm-12 p-4 d-flex justify-content-center">
                <div class="event">
                    <div class="event-img">
                        <img src="{{ asset('/uploads/banner/1.jpg') }}" alt="">
                        <div class="event-overlay">
                            <a href="{{ route('web.event.apply') }}" class="btn btn-primary">{{ trans('t.sign_up') }}</a>
                            <a href="{{ route('web.event.index') }}" class="btn btn-outline-primary">{{ trans('t.learn_more') }}</a>
                        </div>
                    </div>
                    <div class="event-body">
                        <div class="meta-text text-center">
                            <h3>18</h3>
                            <p>Октябрь</p>
                            <span>10:00</span>
                        </div>
                        <div class="main-text">
                            <h6><a href="">Ярмарка карьеры и контактов, 2018, Бишкек</a></h6>
                            <ul>
                                <li><i class="fa fa-user"></i> INAI.KG</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 p-4 d-flex justify-content-center">
                <div class="event">
                    <div class="event-img">
                        <img src="{{ asset('/uploads/events/img2.jpg') }}" alt="">
                        <div class="event-overlay">
                            <a href="{{ route('web.event.apply') }}" class="btn btn-primary">{{ trans('t.sign_up') }}</a>
                            <a href="{{ route('web.event.index') }}" class="btn btn-outline-primary">{{ trans('t.learn_more') }}</a>
                        </div>
                    </div>
                    <div class="event-body">
                        <div class="meta-text text-center">
                            <h3>22</h3>
                            <p>Сентябрь</p>
                            <span>9:30</span>
                        </div>
                        <div class="main-text">
                            <h6><a href="">Методология SCRUM</a></h6>
                            <ul>
                                <li><i class="fa fa-user"></i> Sven Koble</li>
                                <li><i class="fa fa-user"></i> David Grossman</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

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