@extends('web.layouts.base')

@section('title', trans('t.events') . " | INAI.KG")

@section('social_meta')
    <!-- Twitter Meta -->
    {{-- <meta name="twitter:site" content="@centraltoday"> --}}
    {{-- <meta name="twitter:creator" content="@centraltoday"> --}}
    <meta name="twitter:card" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:title" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:description" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:image" content={{ asset('images/favicon.ico') }}">

    <!-- Facebook Meta -->
    <meta property="og:description" content="{{ trans('t.kgiai') }}">
    <meta property="og:title" content="{{ trans('t.events') }} | INAI.KG">

    @include('partials.ogdata')

@endsection

@section('content')


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
                            <a href="{{ route('web.event.show', $row->slug) }}" class="btn btn-primary">{{ trans('t.learn_more') }}</a>
                            @if($row->canShowForm())
                            <a href="{{ route('web.event.apply', $row->slug) }}" class="btn btn-outline-primary">{{ trans('t.sign_up') }}</a>
                            @endif
                        </div>
                    </div>
                    <div class="event-body">
                        <div class="meta-text text-center">
                            <h3>{{$row->event_start_date->format('d')}}</h3>
                            <p>{{trans("months.".$row->event_start_date->format('m'))}}</p>
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

        </div>
    </div>
</section>

@endsection
                
@section('scripts')
<script>


</script>
@endsection