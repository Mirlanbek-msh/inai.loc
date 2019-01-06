@extends('web.layouts.base')

@section('title', 'Kyrgyz-German Institute of Applied Informatics')

@section('content')

<section class="section pt-4 sps sps--abv sps-pt-80">
    <div class="container">
        <nav class="mt-md-4 mt-sm-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">{{ trans('t.home') }}</a></li>
                <li class="breadcrumb-item active">{{ trans('t.gallery') }}</li>
            </ol>
        </nav>
        <div class="gallery">
            <div class="row">
                <div class="col-12 mb-3 text-center mt-3">
                    <h2 class="text-bold section-title mb-3">{{ trans('t.gallery') }}</h2>
                    <hr class="divider w-75">
                </div>

                <div class="col-12 mt-3 mb-3">
                    <div id="lightgallery" class="row">
                        @for($i = 1; $i < 23; $i++)
                        <a class="col-lg-4 col-md-6 col-12 img-cont" href="{{ asset("/images/gallery/origs/$i.jpg") }}">
                            <img class="img-responsive" src="{{ asset("/images/gallery/thumbs/$i.jpg") }}" />
                            <div class="overlay">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
                
@section('scripts')
<script>

$(document).ready(function(){
    $('#lightgallery').lightGallery({
        thumbnail: true
    });
});

</script>
@endsection