@extends('web.layouts.base')

@section('title', $row->title_lang." | INAI.KG")

@section('social_meta')
    <!-- Twitter Meta -->
    {{-- <meta name="twitter:site" content="@centraltoday"> --}}
    {{-- <meta name="twitter:creator" content="@centraltoday"> --}}
    <meta name="twitter:card" content="INAI.KG: {{ $row->title_lang }}">
    <meta name="twitter:title" content="INAI.KG: {{ $row->title_lang }}">
    <meta name="twitter:description" content="{{ $row->description_lang }}">
    <meta name="twitter:image" content={{ asset($row->image) }}">
    <meta property='article:published_time' content='{{ $row->created_at }}' />

    <!-- Facebook Meta -->
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="inai.kg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="720">
    <meta property="og:url" content="{{ route('web.post.show', $row->slug) }}">
    <meta property="og:image" content="{{ asset($row->image) }}">
    <meta property="og:image:secure_url" content="{{ asset($row->image, true) }}">
    <meta property="og:description" content="{{ $row->description_lang }}">
    <meta property="og:title" content="Central Today: {{ $row->title_lang }}">
    <meta property="article:published_time" content="{{ $row->created_at }}">
    <meta property="article:author" content="{{ $row->user->name }}">

    @foreach($row->tags_lang as $tag)
        <meta property="article:tag" content="{{ $tag->title }}">
    @endforeach
    
@endsection

@section('content')

<section class="section pt-4 sps sps--abv sps-pt-80">
    <div class="container">
        <nav class="mt-md-4 mt-sm-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">{{ trans('t.home') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('web.event.index') }}">{{ trans('t.events') }}</a></li>
                <li class="breadcrumb-item active">{{$row->title_lang}}</li>
            </ol>
        </nav>
        <div class="event-full content">
            <div class="row">
                <div class="col-12 mb-3 text-center mt-3">
                    <h2 class="text-bold section-title mb-3">{{$row->title_lang}}</h2>
                    <hr class="hr-1 w-75">
                </div>
                <div class="col-12 mb-3">
                    <div class="meta-text">
                        <span><i class="fa fa-calendar"></i> {{$row->created_at->diffForHumans()}}</span>
                        <span><i class="fa fa-eye"></i> {{$row->views}}</span>
                        <span><i class="fa fa-user-friends"></i> {{ trans('t.signed_up') }}: {{$row->replies()->count()}}</span>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="event-img">
                        <img src="{{ asset($row->image) }}" alt="" class="w-100">
                    </div>
                    <div class="mt-3 content-body">
                        <h3>{{trans('t.for_questions')}}:</h3>
                        <div class="author">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-3 col-4">
                                    <div class="event-img">
                                        <img src="{{ asset($row->author_img) }}" alt="" class="w-100">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-9 col-8">
                                    <h3 class="mt-0 mt-xl-3 no-underline">{{$row->author_name_lang}}</h3>
                                    <span class="mt-3"><a href="tel:{{$row->author_phone}}"><i class="fa fa-phone"></i> {{$row->author_phone}}</a></span>
                                    <span><a href="mailto:{{$row->author_email}}"><i class="fa fa-envelope"></i> {{$row->author_email}}</a></span>
                                </div>
                                <div class="col-12 mt-3">
                                    <p>{{$row->author_desc_lang}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-body">
                                <h3>{{trans('t.about_event')}}</h3>
                                {!!$row->content_lang!!}
                                <h3>{{trans('t.where_and_when')}}</h3>
                                @if($row->has_end_date)
                                <p><span class="meta">{{trans('t.start_date')}}:</span> {{$row->event_start_date_full}}</p>
                                <p><span class="meta">{{trans('t.time')}}:</span> {{$row->event_start_date->format('H:i')}}</p>
                                <p><span class="meta">{{trans('t.end_date')}}:</span> {{$row->event_end_date_full}}</p>
                                @else
                                    <p><span class="meta">{{trans('t.date')}}:</span> {{$row->event_start_date_full}}</p>
                                @endif
                                <p><span class="meta">{{trans('t.event_place')}}:</span> {{$row->event_place_lang}}</p>
                                <p><span class="meta">{{trans('t.event_entrance')}}:</span> {{$row->event_entrance_lang}}</p>
                            </div>
                        </div>
                        @if($row->has_signing_up_form)
                        <div class="col-12 mt-3 d-md-block d-flex justify-content-center">
                            <a href="{{ route('web.event.apply', $row->slug) }}" class="btn btn-primary">{{ trans('t.sign_up') }}</a>
                        </div>
                        @endif
                    </div>
                    
                </div>
                
                <div class="col-12 mt-3">
                    <ul class="tags list-unstyled">
                        @foreach($row->tags_lang as $tag)
                        <li class="float-left"><a href="{{ route('web.tag', $tag->slug) }}">#{{$tag->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
    
                <div class="col-12 my-3">
                    <p>{{ trans('t.share') }}:</p>
                    <ul class="share my-3 clearfix">
                        <li class="share-link">
                            <a href="#" data-social="facebook" data-image="{{ asset($row->image) }}" class="share-link-in fb"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        
                        <li class="share-link">
                            <a href="#" data-social="vkontakte" class="share-link-in vk"><i class="fab fa-vk"></i></a>
                        </li>
                        <li class="share-link">
                            <a href="#" data-social="twitter" class="share-link-in tw"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="share-link">
                            <a href="#" data-social="telegram" class="share-link-in tm"><i class="fab fa-telegram-plane"></i></a>
                        </li>
                        <li class="share-link">
                            <a href="#" data-social="whatsapp" class="share-link-in wt"><i class="fab fa-whatsapp"></i></a>
                        </li>
                    </ul>
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