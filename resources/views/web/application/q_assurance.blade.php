@extends('web.layouts.base')
@section('title', $category->title_lang." | INAI.KG")
@include('partials.ogdata')
<meta property="og:description" content="{{ trans('t.kgiai') }}">
<meta property="og:title" content="{{ $category->title_lang }} | INAI.KG">

@section('content')

<section class="section pt-4 sps sps--abv sps-pt-80">
    <div class="container">
        <nav class="mt-md-4 mt-sm-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">{{trans('t.home')}}</a></li>
                <li class="breadcrumb-item"><span>{{trans('t.for_students')}}</span></li>
                <li class="breadcrumb-item active">{{$category->title_lang}}</li>
            </ol>
        </nav>
        <div class="post-full content">
            <div class="row">
                <div class="col-12 mb-3 text-center mt-3">
                    {{--
                    <h2 class="text-bold section-title mb-3">Поступление</h2>
                    <hr class="divider w-75"> --}}
                </div>

                <div class="col-12">
                    <div class="responsive-tabs row">
                        <ul class="nav nav-tabs responsive flex-column col-md-4" role="tablist">
                            @foreach($category->pages as $row)
                            <li class="nav-item">
                                <a class="nav-link @if($loop->first) active @endif" data-toggle="tab" href="#p{{ $loop->iteration }}" role="tab">{{$row->title_lang}}</a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content responsive col-md-8">
                            @foreach($category->pages as $row)
                            <div class="tab-pane @if($loop->first) active @endif" id="p{{ $loop->iteration }}" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="content-body">
                                                <h3>{{ $row->title_lang }}</h3>
                                                {!!$row->content_lang!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-12 my-3">
                    <p>{{trans('t.share')}}:</p>
                    <ul class="share my-3 clearfix">
                        <li class="share-link">
                            <a href="#" data-social="facebook" class="share-link-in fb"><i class="fab fa-facebook-f"></i></a>
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
