@extends('web.layouts.base')

@section('title', trans('t.gallery') . " | INAI.KG")

@include('partials.ogdata')
<meta property="og:title" content="{{trans('t.gallery') . " | INAI.KG"}}">
<meta property="og:description" content="{{trans('t.kgiai')}}">

@section('content')

<section class="section bg-gray pt-4 sps sps--abv sps-pt-80">
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
                        @foreach($data as $row)
                        <a class="col-lg-4 col-md-6 col-12 img-cont" href="{{ asset($row->image) }}">
                            <img class="img-responsive" src="{{ asset($row->thumb) }}" />
                            <div class="overlay">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                <div class="col-12">
                    {!! $data->links() !!}
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
        thumbnail: true,
        download:false,
        share: false,
        actualSize: false,
        autoplayControls:false,
    });
});

</script>
@endsection