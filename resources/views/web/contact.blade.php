@extends('web.layouts.base')

@section('title', trans('t.contacts') . " | INAI.KG")

@section('social_meta')
    <!-- Twitter Meta -->
    {{-- <meta name="twitter:site" content="@centraltoday"> --}}
    {{-- <meta name="twitter:creator" content="@centraltoday"> --}}
    <meta name="twitter:card" content="{{trans('t.contacts')}} | INAI.KG">
    <meta name="twitter:title" content="{{trans('t.contacts')}} | INAI.KG">
    <meta name="twitter:description" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:image" content="{{ asset('/ogassets/og-image.jpg') }}">

    <!-- Facebook Meta -->
    <meta property="og:title" content="{{trans('t.contacts')}} | INAI.KG">
    <meta property="og:description" content="{{ trans('t.kgiai') }}">

    @include('partials.ogdata')
@endsection

@section('content')

<section class="section pt-4 sps sps--abv sps-pt-80">
    <div class="container">
        <nav class="mt-md-4 mt-sm-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">{{ trans('t.home') }}</a></li>
                <li class="breadcrumb-item active">{{ trans('t.contacts') }}</li>
            </ol>
        </nav>
        <div class="contact content">
            <div class="row content-body">
                <div class="col-12 mb-3 text-center mt-3">
                    <h2 class="text-bold section-title mb-3">{{ trans('t.contacts') }}</h2>
                    <hr class="hr-1 w-50">
                </div>

                <div class="col-md-6 col-12 mt-3">
                    <h3 class="text-bold section-title">{{ trans('t.phone_numbers') }}</h3>
                    <ul class="list-unstyled">
                        @isset($contact_data['phone_1'])
                        <li>
                            <a href="tel:{{preg_replace("/\s+/","", $contact_data['phone_1'])}}">
                                <i class="fa fa-phone"></i> {{$contact_data['phone_1']}}
                            </a>
                        </li>
                        @endif
                        @isset($contact_data['phone_2'])
                        <li>
                            <a href="tel:{{preg_replace("/\s+/","", $contact_data['phone_2'])}}">
                                <i class="fa fa-phone"></i> {{$contact_data['phone_2']}}
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>

                <div class="col-md-6 col-12 mt-3">
                    <h3 class="text-bold section-title">E-Mail</h3>
                    <ul class="list-unstyled">
                        @isset($contact_data['email'])
                        <li><a href="mailto:{{$contact_data['email']}}"><i class="fa fa-envelope"></i> {{$contact_data['email']}}</a></li>
                        @endif
                    </ul>
                </div>

                <div class="col-md-6 col-12 mt-3">
                    <h3 class="text-bold section-title">{{ trans('t.address') }}</h3>
                    <ul class="list-unstyled">
                        @isset($contact_data['address'])
                        <li><a href="geo:42.84036863922435,74.60068702697755"><i class="fa fa-map"></i>{{$contact_data['address']}}</a></li>
                        @endif
                    </ul>
                </div>

                <div class="col-md-6 col-12 mt-3">
                    <h3 class="text-bold section-title">{{ trans('t.reception') }}</h3>
                    <ul class="list-unstyled">
                        <li>{{ trans('t.project_office') }}</li>
                        @isset($contact_data['reception_hours'])
                        <li><i class="fa fa-calendar"></i> {{$contact_data['reception_hours']}}</li>
                        @endif
                    </ul>
                </div>

                <div class="col-12 my-3">
                    <h3 class="text-bold section-title">{{ trans('t.social_networks') }}</h3>
                    <div class="social-links">
                        <ul>
                            @isset($contact_data['fb'])
                            <li><a class="fab fa-facebook-f fb" href="{{$contact_data['fb']}}" target="_blank"></a></li>
                            @endif
                            @isset($contact_data['tw'])
                            <li><a class="fab fa-twitter twitter" href="{{$contact_data['tw']}}" target="_blank"></a></li>
                            @endif
                            @isset($contact_data['yt'])
                            <li><a class="fab fa-youtube youtube" href="{{$contact_data['yt']}}" target="_blank"></a></li>
                            @endif
                            @isset($contact_data['wa'])
                            <li><a class="fab fa-whatsapp whatsapp" href="https://wa.me/{{preg_replace("/\s+|[+]/","", $contact_data['wa'])}}" target="_blank"></a></li>
                            @endif
                            @isset($contact_data['instagram'])
                            <li><a class="fab fa-instagram instagram" href="{{$contact_data['instagram']}}" target="_blank"></a></li>
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="col-12 mt-3 mb-3">
                    <div class="post-body">
                        <div id="map" class="map"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
                
@section('scripts')
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>

<script>

    var map;

    DG.then(function () {
        map = DG.map('map', {
            center: [42.84036863922435, 74.60068702697755],
            zoom: 16,
            scrollWheelZoom: false,

        });
        DG.marker([42.84036863922435, 74.60068702697755]).addTo(map);


        // DG.popup([42.84036863922435, 74.60068702697755])
        //             .setLatLng([42.84036863922435, 74.60068702697755])
        //             .setContent('Мы находимся здесь')
        //             .openOn(map);
    });

</script>
@endsection