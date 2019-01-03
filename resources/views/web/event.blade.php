@extends('web.layouts.base')

@section('title', 'Kyrgyz-German Institute of Applied Informatics')

@section('content')

<section class="section pt-4 sps sps--abv sps-pt-80">
    <div class="container">
        <nav class="mt-md-4 mt-sm-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('web.post.index') }}">События</a></li>
                <li class="breadcrumb-item active">Название</li>
            </ol>
        </nav>
        <div class="event-full content">
            <div class="row">
                <div class="col-12 mb-3 text-center mt-3">
                    <h2 class="text-bold section-title mb-3">Масштабный хакатон</h2>
                    <hr class="hr-1 w-75">
                </div>
                <div class="col-12 mb-3">
                    <div class="meta-text">
                        <span><i class="fa fa-calendar"></i> 2 меяца назад</span>
                        <span><i class="fa fa-eye"></i> 7</span>
                        <span><i class="fa fa-user-friends"></i> Зарегистрировались: 7</span>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="event-img">
                        <img src="{{ asset('/uploads/posts/image2.jpg') }}" alt="" class="w-100">
                    </div>
                    <div class="mt-3">
                        <h3>По всем вопросам:</h3>
                        <hr>
                        <div class="author">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-3 col-4">
                                    <div class="event-img">
                                        <img src="{{ asset('/uploads/posts/image2.jpg') }}" alt="" class="w-100">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-9 col-8">
                                    <h3 class="mt-0 mt-xl-3">Sven Koble</h3>
                                    <span class="mt-3"><a href=""><i class="fa fa-phone"></i> +999 555 666 777</a></span>
                                    <span><a href=""><i class="fa fa-envelope"></i> sven.koble@gmail.com</a></span>
                                </div>
                                <div class="col-12 mt-3">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora soluta aperiam nisi. Quisquam repellat velit commodi magnam minus accusantium recusandae libero voluptates officia soluta ut nulla placeat, vel atque animi!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="event-body">
                                <h3>О хакатоне</h3>
                                <hr>
                                <p>Студенты старшего курса бакалавриата по информамах стажеров. Студенты и студенты получают информацию из первых рук о стажировках, тезисах, работе студентов, образовании и студенческих работах от корпоративных сотрудников по персоналу. Многочисленные презентации и лекции компании, бесплатное профессиональное приложение и проверка CV, бесплатные фотографии приложений, бесплатный трансфер из окружающих университетов, а также рабочая стена с бесчисленными вакансиями дополняют диапазон ZWIK.</p>
                                <p>Студенты старшего курса бакалавриата по информамах стажеров. Студенты и студенты получают информацию из первых рук о стажировках, тезисах, работе студентов, образовании и студенческих работах от корпоративных сотрудников по персоналу. Многочисленные презентации и лекции компании, бесплатное профессиональное приложение и проверка CV, бесплатные фотографии приложений, бесплатный трансфер из окружающих университетов, а также рабочая стена с бесчисленными вакансиями дополняют диапазон ZWIK.</p>
        
                                <h3>Где и когда?</h3>
                                <hr>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem ipsa animi quisquam reprehenderit veritatis, enim a aliquid error nemo, tempora harum asperiores eaque iure id, provident aliquam esse cupiditate doloremque.
                                </p>
                                <p><span>Дата:</span> Понедельник 25 января</p>
                                <p><span>Время:</span> Понедельник 25 января</p>
                                <p><span>Место проведения:</span> Отель Дамас</p>
                                <p><span>Вход:</span> Свободный</p>

                                <h3>Что еще надо знать?</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem vel illum qui, velit alias in debitis non a officia doloribus expedita adipisci vero.</p>

                            </div>
                        </div>
                        <div class="col-12 mt-3 d-md-block d-flex justify-content-center">
                            <a href="{{ route('web.event.apply') }}" class="btn btn-primary">Зарегистрироваться</a>
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-12 mt-3">
                    <ul class="tags list-unstyled">
                        <li class="float-left"><a href="">#Hackathon</a></li>
                        <li class="float-left"><a href="">#Hackathon</a></li>
                        <li class="float-left"><a href="">#Hackathon</a></li>
                    </ul>
                </div>
    
                <div class="col-12 my-3">
                    <p>Поделиться:</p>
                    <ul class="share my-3 clearfix">
                        <li class="share-link">
                            <a href="#" data-social="facebook" data-image="https://centr.asia/uploads/posts/299/15456319395c2078c399e69_image.jpeg" class="share-link-in fb"><i class="fab fa-facebook-f"></i></a>
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