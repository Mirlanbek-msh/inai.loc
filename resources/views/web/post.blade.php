@extends('web.layouts.base')

@section('title', 'Kyrgyz-German Institute of Applied Informatics')

@section('content')

<section class="section pt-4 sps sps--abv sps-pt-80">
    <div class="container">
        <nav class="mt-md-4 mt-sm-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{ route('web.post.index') }}">Новости</a></li>
                <li class="breadcrumb-item active">Название</li>
            </ol>
        </nav>
        <div class="post-full content">
            <div class="row">
                <div class="col-12 mb-3 text-center mt-3">
                    <h2 class="text-bold section-title mb-3">Студенты INAI.kg разработали приложение ZWIK</h2>
                    <hr class="divider w-75">
                </div>
                <div class="col-12">
                    <div class="meta-text">
                        <span><i class="fa fa-calendar"></i> 2 меяца назад</span>
                        <span><i class="fa fa-user"></i> Марио Нойгебауер</span>
                        <span><i class="fa fa-eye"></i> 7</span>
                    </div>
                </div>
    
                <div class="col-12 mt-3">
                    <div class="post-img">
                        <img src="{{ asset('/uploads/posts/image2.jpg') }}" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="post-body">
                        <p>Студенты старшего курса бакалавриата по информатике INAI.kg, Эркебек Абдрахман уулу, Адилет Кутманов, Эрлан Артыкбаев и Булат Хамидуллин разработали приложение Android для ярмарки ZWIK. Это было задание, которое они получили от профессора Райнера Вазингера из Университета прикладных наук Цвиккау, для того, чтобы сдать экзамен по модулю «Программирование на Android». Это приложение было разработано студентами для студентов и доступно в App Store.

                                Приложение разработано для того, чтобы помочь студентам лучше организовать их посещение на ярмарке. В ходе подготовки к участию в ярмарке студенты могут найти список компаний, которые выставлены, и добавить заинтересованных в свой собственный график. Студенты также могут добавлять интересные презентации и специальные мероприятия к их расписанию. Так что посещение ярмарки доставит много удовольствия.
                                
                                Ярмарка ZWIK Zwickau — это ярмарка контактов с карьерой и компанией для студентов и выпускников. В общей сложности 120 компаний в ZWIK Messe Zwickau предоставляют специалистам и выпускникам информацию о планировании карьеры, о карьере и программах стажеров. Студенты и студенты получают информацию из первых рук о стажировках, тезисах, работе студентов, образовании и студенческих работах от корпоративных сотрудников по персоналу. Многочисленные презентации и лекции компании, бесплатное профессиональное приложение и проверка CV, бесплатные фотографии приложений, бесплатный трансфер из окружающих университетов, а также рабочая стена с бесчисленными вакансиями дополняют диапазон ZWIK.</p>
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