@extends('web.layouts.base')

@section('title', 'Kyrgyz-German Institute of Applied Informatics')

@section('content')

<section class="section pt-4 sps sps--abv sps-pt-80">
    <div class="container">
        <nav class="mt-md-4 mt-sm-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Главная</a></li>
                <li class="breadcrumb-item active">Контакты</li>
            </ol>
        </nav>
        <div class="contact">
            <div class="row">
                <div class="col-12 mb-3 text-center mt-3">
                    <h2 class="text-bold section-title mb-3">Контакты</h2>
                    <hr class="hr-1 w-50">
                </div>

                <div class="col-md-6 col-12 mt-3">
                    <h3 class="text-bold section-title">Телефоны</h3>
                    <hr class="divider w-100">
                    <ul class="list-unstyled">
                        <li><a href="tel:+996557312711"><i class="fa fa-phone"></i> +996 557 312 711</a></li>
                        <li><a href="tel:+996312549238"><i class="fa fa-phone"></i> +996 312 549 238</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-12 mt-3">
                    <h3 class="text-bold section-title">E-Mail</h3>
                    <hr class="divider w-100">
                    <ul class="list-unstyled">
                        <li><a href="mailto:info@inai.kg"><i class="fa fa-envelope"></i> info@inai.kg</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-12 mt-3">
                    <h3 class="text-bold section-title">Адрес</h3>
                    <hr class="divider w-100">
                    <ul class="list-unstyled">
                        <li><a href="geo:42.84036863922435,74.60068702697755"><i class="fa fa-map"></i> Малдыбыаева 34 Б<br>Бишкек 720000</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-12 mt-3">
                    <h3 class="text-bold section-title">Прием</h3>
                    <hr class="divider w-100">
                    <ul class="list-unstyled">
                        <li>Проектное бюро</li>
                        <li><i class="fa fa-calendar"></i> Пн-Пт с 9:00 - 17:00</li>
                    </ul>
                </div>

                <div class="col-12 my-3">
                    <h3 class="text-bold section-title">Мы в социальных сетях</h3>
                    <hr>
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