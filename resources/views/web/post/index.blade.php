@extends('web.layouts.base')

@section('title', trans('t.news') . " | INAI.KG")

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
    <meta property="og:title" content="{{ trans('t.news') }} | INAI.KG">

    @include('partials.ogdata')
    
@endsection

@section('content')

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

        </div>
    </div>
</section>

@endsection
                
@section('scripts')
<script>


</script>
@endsection