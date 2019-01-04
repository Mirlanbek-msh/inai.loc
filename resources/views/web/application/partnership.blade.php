@extends('web.layouts.base') 
@section('title', 'Kyrgyz-German Institute of Applied Informatics') 
@section('styles')
<style>
    h4.card-title {
        margin: 0;
        font-family: "Open Sans";
        font-size: 1rem;
    }

    .card-header {
        padding: 0;
    }
</style>
@endsection
 
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
                    {{--
                    <h2 class="text-bold section-title mb-3">Поступление</h2>
                    <hr class="divider w-75"> --}}
                </div>

                <div class="col-12">
                    <div class="responsive-tabs row">
                        <ul class="nav nav-tabs responsive flex-column col-md-4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#p1" role="tab">Ассоциативный партнер</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#p2" role="tab">Практика</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#p3" role="tab">ДААД стипендии для Цвикау</a>
                            </li>
                        </ul>
                        <div class="tab-content responsive col-md-8">
                            <div class="tab-pane active" id="p1" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="content-body">
                                                <h3>Ассоциативный партнер</h3>
                                                <hr>
                                                <p>Университет прикладных наук Цвиккау, Германия (WHZ)</p>
                                                <p>WHZ — региональный университет прикладных наук с их образовательным и научным
                                                    профилем, ориентированным&nbsp;в области технологии, экономики и качества
                                                    жизни.</p>
                                                <p>Факультет физической техники&nbsp; / информатики (PTI) активено сотрудничает
                                                    в рамках проектов в Кыргызстане, в основном финансируемых Германской
                                                    службой академических обменов (DAAD), Европейской Коммиссией в программе
                                                    Эрасмус плюс&nbsp;и частными спонсорами.
                                                    <span title="At present, 5 projects with a total budget > 1.000.000 EUR are active: ">В настоящее время действуют&nbsp;или действовали проекты&nbsp;с общим
                                                        бюджетом&gt; 1.000.000 евро:</span>
                                                </p>
                                                <ul>
                                                    <li><span title="- Export of Bachelor in Informatics WHZ -> KSUCTA; ">Экспорт бакалавриата&nbsp;информатики WHZ -&gt; KSUCTA;</span></li>
                                                    <li><span title="- Ground up reconstruction of IT infrastructure at the Institute of New Information Technologies (3000 students); ">Создание ИТ-инфраструктуры в Институте новых информационных технологий, КГУСТА;</span></li>
                                                    <li><span title="- Establishment of a Technology Transfer Centre at KSUCTA; ">Создание Центра трансферта технологий в КГУСТА;</span></li>
                                                    <li><span title="- Practice Partnerships: Connecting informatics education with industry; ">Партнерские отношения: Укрепление связи между вузами и ИТ предприятиями;</span></li>
                                                    <li><span title="- Micro-E-Lectures for internet-based Tele Teaching (MINT): Development of internet based micro-units for MINT-subjects at DKU Almaty, Kazakhstan and KSUCTA Bishkek, Kirgizstan ">Micro-E-Lectures для интернет-обучения Teaching (MINT): Разработка&nbsp;учебных материалов&nbsp;в области STEM Немецко-Казахстанского университета, Адматы, Казахстан и КГУСТА, Бишкек, Кыргызстан</span></li>
                                                    <li><span title="- Internet-based student project (Kyrgyz, Kazakh and German student teams develop software collaboratively and evaluate project results at summer school in Kirgizstan) ">Международные студенческие проекты<br>
                                </span></li>
                                                    <li><span id="result_box" lang="ru"><span title="- Team-Up for Open Access ">Team-Up: Открытый доступ на учебные материалы</span></span>
                                                    </li>
                                                    <li><span title="- Practice Partnerships: Connecting education with industry in Kyrgyzstan and Georgia ">Партнерские отношения: Практико-ориентированное обучение в Кыргызстане и Грузии</span></li>
                                                    <li>Развитие высшего образования в области биомедицинской инженерии и менеджмента
                                                        в здравоохранении Кыргызстана, Эрасмус плюс</li>
                                                    <li>Создание магистратуры&nbsp;информатики</li>
                                                    <li><span title="- Scholarship projects ">Стипендиальные проекты</span></li>
                                                </ul>
                                                <p>В настоящее время, ок. 30 кыргызских студентов учатся в WHZ в прогарммах
                                                    бакалавриата и магистратуры, более 30 преподавателей информатики и 7
                                                    преподавателей языка прошли или в настоящее время проходят обучение в
                                                    WHZ.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="p2" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="content-body">
                                                <h3>Практика</h3>
                                                <hr>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae officiis
                                                    sit quos earum. Placeat pariatur expedita id, tenetur veniam quia eos
                                                    distinctio. Corrupti ad cupiditate eos, similique dolor ratione quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="p3" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="content-body">
                                                <h3>Стипендии для Цвикау</h3>
                                                <hr>
                                                <ul>
                                                    <li>ДААД стипендии&nbsp;(германская служба академических обменов)</li>
                                                    <li>Стипендии выдаются студентам с отличной успеваемостью:
                                                        <ul>
                                                            <li>20% лучших студентов курса</li>
                                                        </ul>
                                                    </li>
                                                    <li>Требования для участия
                                                        <ul>
                                                            <li>Студенты бакалавриата 6.семестр</li>
                                                            <li>Студенты магистратуры 2.семестр</li>
                                                        </ul>
                                                    </li>
                                                    <li>Условия отбора:
                                                        <ul>
                                                            <li>Отличная успеваемость</li>
                                                            <li>Разрабокта и презентация программы для отборочной комиссии</li>
                                                            <li>Мотивационное письмо</li>
                                                            <li>Немецкий язык уровня В1</li>
                                                        </ul>
                                                    </li>
                                                    <li>Длительность стипендии
                                                        <ul>
                                                            <li>с 1-сентября каждого года и до 31-августа следующего года</li>
                                                        </ul>
                                                    </li>
                                                    <li>Стипендии на проживание в Цвикау
                                                        <ul>
                                                            <li>750€ в месяц для студентов бакалавриата</li>
                                                            <li>850€ в месяц для студентов магистратуры</li>
                                                            <li>750€ для транспортных расходов</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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