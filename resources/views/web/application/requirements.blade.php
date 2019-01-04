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
                                <a class="nav-link active" data-toggle="tab" href="#p4" role="tab">Учебные программы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#p1" role="tab">Поступление в бакалавриат</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#p2" role="tab">Поступление в магистратуру</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#p3" role="tab">ДААД стипендии для Бишкека</a>
                            </li>
                        </ul>
                        <div class="tab-content responsive col-md-8">
                            <div class="tab-pane active" id="p4" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="content-body">
                                                <h3>Учебные программы</h3>
                                                <hr>
                                                <p>Хотите знать, как работают машины и устройства? Какая программа гарантирует
                                                    определенный способ их функционирования и как они влияют на нашу жизнь?</p>
                                                <p>Вы хотите программировать видеоигры? Вы хотите, чтобы объекты перемещались,
                                                    бегали, спали и выполняли все действия, которые обычно для нормальных
                                                    людей?</p>
                                                <p>Вы хотите знать, как спроектирована виртуальная реальность? Какие интернет
                                                    и мобильные приложения вы хотите прогаммировать самостоятельно? Позволить
                                                    крупным компаниям общаться друг с другом и создавать сети для корпораций?</p>
                                                <p>На эти и многие другие вопросы вы можете найти ответы, если поступите на
                                                    нашу программу «Информатика»&nbsp;в INAI.kg!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="p1" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="content-body">
                                                <h3>Поступление в бакалавриат</h3>
                                                <hr>
                                                <ul>
                                                    <li>Паспорт&nbsp;(2 копии)</li>
                                                    <li>Аттестат о среднем школьном образовании, (оригинал)</li>
                                                    <li>Сертификат ОРТ (оригинал)</li>
                                                    <li>Фото 3*4 (6&nbsp;штук с Ф.И.О. на обратной стороне)</li>
                                                    <li>Приписное свидетельство (при предъявлении оригинала копия принимается)</li>
                                                    <li>Форма 086</li>
                                                </ul>
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
                                                <h3>Поступление в магистратуру</h3>
                                                <hr>
                                                <ul>
                                                    <li>Заявление на поступление в магистратуру</li>
                                                    <li>
                                                        <p align="LEFT">Подлинник диплома бакалавра (специалиста) с приложением выписки из
                                                            зачетной ведомости (оригинал)</p>
                                                    </li>
                                                    <li>
                                                        <p align="LEFT">Оригинал приложения к диплому</p>
                                                    </li>
                                                    <li>
                                                        <p align="LEFT"><span style="font-family: georgia,palatino,serif; font-size: 12pt;">2 фотографии 3×4</span></p>
                                                    </li>
                                                    <li>
                                                        <p align="LEFT">Копия паспорта (оригинал для просмотра)</p>
                                                    </li>
                                                    <li>
                                                        <p align="LEFT">Договор</p>
                                                    </li>
                                                    <li>
                                                        <p align="LEFT">Личный листок по учету кадров</p>
                                                    </li>
                                                    <li>
                                                        <p>Мед. справка Ф-086</p>
                                                    </li>
                                                    <li>Альтернативно:
                                                        <ul>
                                                            <li>Диплом бакалавриата или специалиста в технических специальностей</li>
                                                            <li>Профессиональный опыт</li>
                                                        </ul>
                                                    </li>
                                                </ul>
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
                                                <h3>ДААД стипендии для студентов бакалавриата</h3>
                                                <hr>
                                                <ul>
                                                    <li>20% лучших студентов одного курса</li>
                                                    <li>Длительсность стипендии
                                                        <ul>
                                                            <li>с 1-сентября каждого года до 31-августа следующего года</li>
                                                        </ul>
                                                    </li>
                                                    <li>Размер стипендии:
                                                        <ul>
                                                            <li>Ок. &nbsp;1.850€ (меняется в зависимости от актуального курса
                                                                валют)
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>Требования для участия в конкурсе:
                                                        <ul>
                                                            <li>Минимум 110 баллов по ОРТ, 60 баллов по математике</li>
                                                            <li>Хорошее владение анлдийского или немецкого языков</li>
                                                        </ul>
                                                    </li>
                                                    <li>Условия отбора:
                                                        <ul>
                                                            <li><b>На 1-курс</b><b>: </b>90-минутный логико-математический тест
                                                                и эссе</li>
                                                            <li><b>На 2,3,4-курсы</b><b>: </b>Отличная успеваемость за прошедшие
                                                                семестры
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                <h3>ДААД стипендии для стдентов магистратуры</h3>
                                                <hr>
                                                <ul>
                                                    <li>20% лучщих студентов курса</li>
                                                    <li>Длительность стипендии
                                                        <ul>
                                                            <li>с 1-сентября каждого года до 31-августа следующего года</li>
                                                        </ul>
                                                    </li>
                                                    <li>Размер стипендии:
                                                        <ul>
                                                            <li>ок. 1.050€ (меняется в зависимости от актуального курса валют)</li>
                                                        </ul>
                                                    </li>
                                                    <li>Требования для участия в конкурсе:
                                                        <ul>
                                                            <li>Студент магистратуры INAI.kg</li>
                                                        </ul>
                                                    </li>
                                                    <li>Условия отбора:
                                                        <ul>
                                                            <li><b>На 1-курc</b><b>: </b>Разработка и презентация проекта программирования</li>
                                                            <li><b>на 2-курс</b><b>: </b>Отличная успеваемость за прошедшие семестры</li>
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