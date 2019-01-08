@extends('web.layouts.base')

@section('title', $row->title.' | INAI.KG')

@section('social_meta')
    <!-- Twitter Meta -->
    {{-- <meta name="twitter:site" content="@centraltoday"> --}}
    {{-- <meta name="twitter:creator" content="@centraltoday"> --}}
    <meta name="twitter:card" content="INAI.KG: {{ $row->title }}">
    <meta name="twitter:title" content="INAI.KG: {{ $row->title }}">
    <meta name="twitter:description" content="{{ $row->description }}">
    <meta name="twitter:image" content={{ asset($row->image) }}">
    <meta property='article:published_time' content='{{ $row->created_at }}' />
    <meta property='article:section' content='{{ $row->category->title }}' />

    <!-- Facebook Meta -->
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="inai.kg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="720">
    <meta property="og:url" content="{{ route('web.post.show', $row->slug) }}">
    <meta property="og:image" content="{{ asset($row->image) }}">
    <meta property="og:image:secure_url" content="{{ asset($row->image, true) }}">
    <meta property="og:description" content="{{ $row->description }}">
    <meta property="og:title" content="{{ $row->title }} | INAI.KG">
    <meta property="article:published_time" content="{{ $row->created_at }}">
    <meta property="article:author" content="{{ $row->author ? $row->author :$row->user->name }}">

    @foreach($row->tags()->get() as $tag)
        <meta property="article:tag" content="{{ $tag->title }}">
    @endforeach
    
@endsection

@section('content')

<section class="section pt-4 sps sps--abv sps-pt-80">
    <div class="container">
        <nav class="mt-md-4 mt-sm-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">{{ trans('t.home') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('web.post.index') }}">{{ trans('t.news') }}</a></li>
                <li class="breadcrumb-item active">{{ $row->title }}</li>
            </ol>
        </nav>
        <div class="post-full content">
            <div class="row">
                <div class="col-12 mb-3 text-center mt-3">
                    <h2 class="text-bold section-title mb-3">{{ $row->title }}</h2>
                    <hr class="divider w-75">
                </div>
                <div class="col-12">
                    <div class="meta-text">
                        <span><i class="fa fa-calendar"></i> {{ $row->created_at->diffForHumans() }}</span>
                        <span><i class="fa fa-user"></i> {{ $row->author }}</span>
                        <span><i class="fa fa-eye"></i> {{ $row->views }}</span>
                    </div>
                </div>
    
                <div class="col-12 mt-3">
                    <div class="post-img">
                        <img src="{{ asset($row->image) }}" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="post-body">
                        {!! $row->content !!}
                        @isset($row->video)
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/{{ $row->video }}?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                            </div>
                        @endisset
                        @isset($row->gallery)
                        <ul id="imageGallery">
                            @foreach ($row->gallery['fulls'] as $full)
                                <li data-thumb="{{ asset($full['file']) }}" data-src="{{ asset($full['file'])  }}">
                                    <img class="resizegallery img-fluid" src="{{ asset($full['file'])  }}" />
                                </li>
                            @endforeach
                        </ul>
                        @endisset
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <ul class="tags list-unstyled">
                        @foreach($row->tags()->get() as $tag)
                        <li class="float-left"><a href="{{ route('web.tag', $tag->slug) }}">#{{ $tag->title }}</a></li>
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
        $(document).ready(function() {
            $('#imageGallery').lightSlider({
                gallery:true,
                item:1 ,
                loop:true,
                thumbItem:5,
                enableDrag: true,
                onSliderLoad: function(el) {
                    el.lightGallery({
                        selector: '#imageGallery .lslide',
                        download:false,
                        share: false,
                        actualSize: false,
                        autoplayControls:false,
                    });
                }
            });
        });

</script>
@endsection