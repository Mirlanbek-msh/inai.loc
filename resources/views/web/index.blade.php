@extends('web.layouts.base')

@section('title', 'INAI.KG')

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
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid itaquevelit?</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem reiciendis soluta ex, facilis cum rerum tenetur illo magni culpa sit animi voluptatibus ipsum maiores odio fugit itaque! Obcaecati, porro iusto.</p>

                    <a href="" class="btn btn-primary">Learn more</a>
                    {{-- <a href="" class="btn btn-outline-primary">Other</a> --}}
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/uploads/banner/2.jpg') }}" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid itaquevelit?</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem reiciendis soluta ex, facilis cum rerum tenetur illo magni culpa sit animi voluptatibus ipsum maiores odio fugit itaque! Obcaecati, porro iusto.</p>
                    <a href="" class="btn btn-primary">Learn more</a>
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

            @for($i = 0; $i < 4; $i++)
            <div class="col-md-6 col-sm-12 p-4 d-flex @if($i % 2 != 0) justify-content-start @else justify-content-end @endif">
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
                            <h3>31</h3>
                            <p>September</p>
                            <span>14:00</span>
                        </div>
                        <div class="main-text">
                            <h6><a href="">SCRUM Metodolgy</a></h6>
                            <ul>
                                <li><i class="fa fa-user"></i> Sven Koble</li>
                                <li><i class="fa fa-user"></i> David Hoffman</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endfor

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

            @for($i = 0; $i < 6; $i++)
            <div class="col-md-4 col-sm-12">
                <div class="post">
                    <a href="">
                        <img src="{{ asset('/uploads/banner/1.jpg') }}" alt="">
                    </a>
                    <div class="post-body">
                        <a href=""><h6>Title</h6></a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, consequatur tempora.</p>
                        <div class="mt-3">
                            <span class="meta-text"><i class="fa fa-calendar"></i> 2 days ago</span>
                        </div>
                    </div>
                </div>
            </div>
            @endfor

            <div class="col-12 justify-content-center d-flex mb-3">
                <a href="" class="btn btn-primary">Просмотреть все новости</a>
            </div>

        </div>
    </div>
</section>

@endsection
                
@section('scripts')
<script>
    $(document).ready(function(){
        console.log('loaded');
    });
</script>
@endsection