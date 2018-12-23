@extends('web.layouts.base')

@section('title', 'Kyrgyz-German Institute of Applied Informatics')

@section('content')

<section class="section">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('/uploads/banner/1.jpg') }}" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ярмарка карьеры и контактов 2018</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem reiciendis soluta ex, facilis cum rerum tenetur illo magni culpa sit animi voluptatibus ipsum maiores odio fugit itaque! Obcaecati, porro iusto.</p>

                    <a href="" class="btn btn-primary">Подробнее</a>
                    {{-- <a href="" class="btn btn-outline-primary">Other</a> --}}
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/uploads/banner/2.jpg') }}" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Тренинг по методологии SCRUM</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem reiciendis soluta ex, facilis cum rerum tenetur illo magni culpa sit animi voluptatibus ipsum maiores odio fugit itaque! Obcaecati, porro iusto.</p>
                    <a href="" class="btn btn-primary">Подробнее</a>
                    {{-- <a href="" class="btn btn-outline-primary">Other</a> --}}
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
</section>

<section class="section bg-gray pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 text-center">
                <h2 class="text-bold section-title mb-3">Ивенты</h2>
                <hr class="divider w-75">
            </div>

            <div class="col-md-6 col-sm-12 p-4 d-flex justify-content-center">
                <div class="event">
                    <div class="event-img">
                        <img src="{{ asset('/uploads/banner/1.jpg') }}" alt="">
                        <div class="event-overlay">
                            <a href="" class="btn btn-primary">Зарегистрироваться</a>
                            <a href="" class="btn btn-outline-primary">Подробнее</a>
                        </div>
                    </div>
                    <div class="event-body">
                        <div class="meta-text text-center">
                            <h3>18</h3>
                            <p>Октябрь</p>
                            <span>10:00</span>
                        </div>
                        <div class="main-text">
                            <h6><a href="">Ярмарка карьеры и контактов, 2018, Бишкек</a></h6>
                            <ul>
                                <li><i class="fa fa-user"></i> INAI.KG</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 p-4 d-flex justify-content-center">
                <div class="event">
                    <div class="event-img">
                        <img src="{{ asset('/uploads/events/img2.jpg') }}" alt="">
                        <div class="event-overlay">
                            <a href="" class="btn btn-primary">Зарегистрироваться</a>
                            <a href="" class="btn btn-outline-primary">Подробнее</a>
                        </div>
                    </div>
                    <div class="event-body">
                        <div class="meta-text text-center">
                            <h3>22</h3>
                            <p>Сентябрь</p>
                            <span>9:30</span>
                        </div>
                        <div class="main-text">
                            <h6><a href="">Методология SCRUM</a></h6>
                            <ul>
                                <li><i class="fa fa-user"></i> Sven Koble</li>
                                <li><i class="fa fa-user"></i> David Grossman</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 justify-content-center d-flex">
                <a href="" class="btn btn-primary">Просмотреть все ивенты</a>
            </div>

        </div>
    </div>
</section>

<section class="section bg-gray pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 text-center">
                <h2 class="text-bold section-title mb-3">Последние новости</h2>
                <hr class="divider w-75">
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post">
                    <a href="" class="post-img">
                        <img src="{{ asset('/uploads/posts/image1.png') }}" alt="">
                    </a>
                    <div class="post-body">
                        <a href=""><h6>Студенты INAI.kg разработали приложение ZWIK</h6></a>
                        <p>Студенты старшего курса бакалавриата по информатике INAI.kg ...</p>
                        <div class="mt-3">
                            <span class="meta-text"><i class="fa fa-calendar"></i> 2 дня назад</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post">
                    <a href="" class="post-img">
                        <img src="{{ asset('/uploads/posts/image2.jpg') }}" alt="">
                    </a>
                    <div class="post-body">
                        <a href=""><h6>Более 300 студентов посетили ярмарку карьеры и контактов в Бишкеке</h6></a>
                        <p>16 октября в отеле Дамас прошла пятая ежегодная ярмарка карьеры и контактов. ...</p>
                        <div class="mt-3">
                            <span class="meta-text"><i class="fa fa-calendar"></i> месяц назад</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post">
                    <a href="" class="post-img">
                        <img src="{{ asset('/uploads/posts/image3.jpg') }}" alt="">
                    </a>
                    <div class="post-body">
                        <a href=""><h6>Прошел хакатон среди студентов</h6></a>
                        <p>28 ноября в институте прошел первый большой хакатон. ...</p>
                        <div class="mt-3">
                            <span class="meta-text"><i class="fa fa-calendar"></i> неделю назад</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 justify-content-center d-flex mb-3">
                <a href="" class="btn btn-primary">Просмотреть все новости</a>
            </div>

        </div>
    </div>
</section>

<section class="section bg-gray pt-5">
    <div id="map" class="map">
    </div>
</section>

@endsection
                
@section('scripts')
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<script>
    $(document).ready(function(){
        console.log('loaded');
    });

    var map;

    DG.then(function () {
        map = DG.map('map', {
            center: [42.84036863922435, 74.60068702697755],
            zoom: 16,
            dragging:false,
            scrollWheelZoom: false,

        });

        DG.popup([42.84036863922435, 74.60068702697755])
                    .setLatLng([42.84036863922435, 74.60068702697755])
                    .setContent('Мы находимся здесь')
                    .openOn(map);
    });
</script>
@endsection