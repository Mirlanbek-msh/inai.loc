@extends('web.layouts.base')

@section('title', trans('t.kgiai'))

@section('social_meta')
<!-- Twitter Meta -->
{{-- <meta name="twitter:site" content="@centraltoday"> --}}
{{-- <meta name="twitter:creator" content="@centraltoday"> --}}
<meta name="twitter:card" content="{{ trans('t.kgiai') }}">
<meta name="twitter:title" content="{{ trans('t.kgiai') }}">
<meta name="twitter:description" content="{{ trans('t.kgiai') }}">
<meta name="twitter:image" content={{ asset('/assets/images/icon-sq.png') }}">

<!-- Facebook Meta -->
@include('partials.ogdata')
<meta property="og:title" content="INAI.KG">
<meta property="og:description" content="{{trans('t.kgiai')}}">
@endsection

{{-- @section('styles')
<style>
    .event {
        width: unset;
    }

    .pignose-calendar {
        width: unset;
        background-color: #fff;
        box-shadow: 0 0 25px 0 rgba(11, 61, 145, .22);
        border: none;
    }

    .pignose-calendar.pignose-calendar-blue .pignose-calendar-top {
        background-color: #1f214a;
    }

    .pignose-calendar .pignose-calendar-top {
        padding: 2.4em 0;
    }

    .pignose-calendar .pignose-calendar-top .pignose-calendar-top-date {
        padding: 1.2em 0;
    }

    .pignose-calendar .pignose-calendar-header {
        padding: 0 1.2em;
        margin-top: 0em;
    }

    .pignose-calendar .pignose-calendar-body {
        padding: 0.8em;
        padding-top: 0.2em;
    }

    .pignose-calendar .pignose-calendar-unit {
        height: 2.8em;
        line-height: unset;
    }

    .pignose-calendar.pignose-calendar-blue .pignose-calendar-body .pignose-calendar-row .pignose-calendar-unit.pignose-calendar-unit-active a {
        background-color: #1f214a;
    }

    .pignose-calendar .pignose-calendar-unit a {
        width: 2.2em;
        height: 2.2em;
        line-height: 2.2em;
    }
</style>
@endsection --}}

@section('content')

<section class="section sps sps--abv sps-pt-60">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            @for($i = 0; $i < ($banner_events->count() + $banner_posts->count()); $i++)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" @if($i==0) class="active" @endif>
                </li>
                @endfor
        </ol>
        <div class="carousel-inner">
            @foreach($banner_events as $row)
            <div class="carousel-item @if($loop->first) active @endif">
                <img class="d-block w-100" src="{{ asset($row->image) }}" alt="">
                <div class="carousel-caption d-md-block">
                    <h5>{{ $row->title_lang }}</h5>
                    <p class="d-sm-none d-md-block">{{ $row->description_lang }}</p>

                    <a href="{{ route('web.event.show', $row->slug) }}"
                        class="btn btn-primary">{{ trans('t.learn_more') }}</a>
                    @if($row->canShowForm())
                    <a href="{{ route('web.event.apply', $row->slug) }}"
                        class="btn btn-outline-primary">{{ trans('t.sign_up') }}</a>
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

                    <a href="{{ route('web.post.show', $row->slug) }}"
                        class="btn btn-primary">{{ trans('t.learn_more') }}</a>
                    {{-- <a href="" class="btn btn-outline-primary">Other</a> --}}
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev d-lg-flex d-none" href="#carouselExampleIndicators" role="button"
            data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="carousel-control-next d-lg-flex d-none" href="#carouselExampleIndicators" role="button"
            data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
</section>

<section class="section bg-gray pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 text-center">
                <h2 class="text-bold section-title mb-3">{{ trans('t.events_for') }} {{trans("months.".$selected_date->format('m'))}}</h2>
                <hr class="divider w-75">
            </div>

            
            <div class="col-md-8 col-12">
                <div class="row">
                    @foreach($events as $row)
                    <div class="event-calendar-item {{$row->event_start_date->format('d-m-Y')}} col-md-6 col-sm-12 pb-4 d-flex justify-content-center">
                        <div class="event">
                            <div class="event-img">
                                <img src="{{ asset($row->image) }}" alt="">
                                <div class="event-overlay">
                                    <a href="{{ route('web.event.show', $row->slug) }}"
                                        class="btn btn-primary">{{ trans('t.learn_more') }}</a>
                                    @if($row->canShowForm())
                                    <a href="{{ route('web.event.apply', $row->slug) }}"
                                        class="btn btn-outline-primary">{{ trans('t.sign_up') }}</a>
                                    @endif
                                </div>
                            </div>
                            <div class="event-body">
                                <div class="meta-text text-center">
                                    <h3>{{$row->event_start_date->format('d')}}</h3>
                                    <p>{{trans("months_decl.".$row->event_start_date->format('m'))}}</p>
                                    <span>{{$row->event_start_date->format('H:i')}}</span>
                                </div>
                                <div class="main-text">
                                    <h6><a href="{{ route('web.event.show', $row->slug) }}">{{$row->title_lang}}</a>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-user"></i> {{$row->author_name_lang}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12 no-calendar-items" style="display:none">
                        <div class="legend text-center my-md-5 py-5">
                            <p>{{trans('t.no_data_for_this_date')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="calendar pb-4"></div>
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

            @forelse($posts as $row)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post">
                    <a href="{{ route('web.post.show', $row->slug) }}" class="post-img">
                        <img src="{{ asset($row->thumb) }}" alt="">
                    </a>
                    <div class="post-body">
                        <a href="{{ route('web.post.show', $row->slug) }}">
                            <h6>{{ $row->title }}</h6>
                        </a>
                        <p>{{ $row->description }}</p>
                        <div class="mt-3">
                            <span class="meta-text"><i class="fa fa-calendar"></i>
                                {{ $row->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="legend text-center">
                    <p>{{trans('t.no_data')}}</p>
                </div>
            </div>
            @endforelse
            <div class="col-12 justify-content-center d-flex mb-3">
                <a href="{{ route('web.post.index') }}" class="btn btn-primary">{{ trans('t.show_more') }}</a>
            </div>

        </div>
    </div>
</section>

@endsection

@section('scripts')

<script>

    $('.calendar').pignoseCalendar({
        theme: 'blue',
        date: '{{$selected_date->format("Y-m-d")}}',
        initialize: false,
        lang: '{{app()->getLocale()}}',
        week: 1,
        scheduleOptions: {
            colors: {
                primary: '#1f214a',
                secondary: '#2487ab'
            },
        },
        schedules: [
            @foreach($events as $row)
            {
                name: 'secondary',
                date: '{{$row->event_start_date->format("Y-m-d")}}'
            },
            @endforeach
        ],
        select: function(date, context) {
            if(date[0]){
                $('.no-calendar-items').hide();
                $('.event-calendar-item').attr('style','display:none !important');
                $('.' + date[0].format('DD-MM-YYYY')).attr('style','display:block !important');
                if(context.storage.schedules.length == 0){
                    $('.no-calendar-items').show();
                }
            }
        },
        next: changeMonth,
        prev: changeMonth,
        init: function(context){
            if($('.event-calendar-item').length == 0){
                $('.no-calendar-items').show();
            }
        }
    });

</script>
@endsection