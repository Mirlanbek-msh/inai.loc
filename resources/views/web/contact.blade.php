@extends('web.layouts.base')

@section('title', trans('t.contacts') . " | INAI.KG")

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
                        <li><a href="tel:+996557312711"><i class="fa fa-phone"></i> +996 557 312 711</a></li>
                        <li><a href="tel:+996312549238"><i class="fa fa-phone"></i> +996 312 549 238</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-12 mt-3">
                    <h3 class="text-bold section-title">E-Mail</h3>
                    <ul class="list-unstyled">
                        <li><a href="mailto:info@inai.kg"><i class="fa fa-envelope"></i> info@inai.kg</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-12 mt-3">
                    <h3 class="text-bold section-title">{{ trans('t.address') }}</h3>
                    <ul class="list-unstyled">
                        <li><a href="geo:42.84036863922435,74.60068702697755"><i class="fa fa-map"></i> Малдыбыаева 34 Б<br>Бишкек 720000</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-12 mt-3">
                    <h3 class="text-bold section-title">{{ trans('t.reception') }}</h3>
                    <ul class="list-unstyled">
                        <li>{{ trans('t.project_office') }}</li>
                        <li><i class="fa fa-calendar"></i> Пн-Пт с 9:00 - 17:00</li>
                    </ul>
                </div>

                <div class="col-12 my-3">
                    <h3 class="text-bold section-title">{{ trans('t.social_networks') }}</h3>
                    <div class="social-links">
                        <ul>
                            <li><a class="fab fa-facebook-f fb" href="//www.facebook.com/kgiaibishkek" target="_blank"></a></li>
                            <li><a class="fab fa-youtube youtube" href="#" target="_blank"></a></li>
                            <li><a class="fab fa-twitter twitter" href="#" target="_blank"></a></li>
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