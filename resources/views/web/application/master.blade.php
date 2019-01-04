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
                                <a class="nav-link active" data-toggle="tab" href="#p2" role="tab">Магистратура информатики</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#p3" role="tab">Инженерия системного программирования проектов</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#p4" role="tab">Предпринимательство в сфере информационных технологий</a>
                            </li>
                        </ul>
                        <div class="tab-content responsive col-md-8">
                            <div class="tab-pane active" id="p2" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="content-body">
                                                <h3>Магистратура информатики</h3>
                                                <hr>
                                                <table class="table table-bordered" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td width="155"><strong>Степень</strong> <strong>&nbsp;</strong></td>
                                                            <td width="411">Магистр (Master of Science, MSc.)</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="155"><strong>Форма обучения</strong></td>
                                                            <td width="411">вечерняя</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="155"><strong>Начало обучения</strong></td>
                                                            <td width="411">Зимний семестр</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="155"><strong>Длительность / ECTS </strong></td>
                                                            <td width="411">4&nbsp;семестров / 120 ECTS</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="155"><strong>Выпускная работа</strong></td>
                                                            <td width="411">30 ECTS</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="155"><strong>Условия поступления</strong></td>
                                                            <td width="411">—&nbsp; Диплом бакалавра или специалиста по информатике с успеваемостью
                                                                75% за последние два года обучения.
                                                                <p></p>
                                                                <p>—&nbsp; диплом бакалавра или специалиста по техническому
                                                                    направлению с успеваемостью 85% по предметам, связаные
                                                                    с информатикой, за последние два года обучения.</p>
                                                                <p>—&nbsp; Профессиональная деятельность в сфере программирования
                                                                    может быть признана в качестве&nbsp; выполнения критерия
                                                                    для поступления.</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="155"><strong>Плата за обучение</strong></td>
                                                            <td width="411">1.200 USD</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>Учебный план можете просмотреть здесь: <a href="http://inai-kg.de/wp-content/uploads/2018/11/Учебный-план-MA_INAI.kg_RUS.pdf">Учебный план MA_INAI.kg_RUS</a></p>
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
                                                <h3>Инженерия системного программирования проектов</h3>
                                                <hr>
                                                <p>Эта специализация ориентирована на магистерскую программу информатики в Западно-Саксонском университете Цвикау с уклоном на разработку программного обеспечения. Предоставляемый контент также адаптирован к потребностям местных компаний, которые активно участвуют в разработке программного обеспечения и пользуются высоким спросом у разработчиков программного обеспечения на уровне мастера.&nbsp;Широкие практические модули во 2-м и 3-м семестрах охватывают техническую разработку и долгосрочное обслуживание программных систем в более крупных командах. Языковая подготовка и межкультурное обучение позволяют успешно работать в международных командах.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="p4" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="content-body">
                                                <h3>Предпринимательство в сфере информационных технологий</h3>
                                                <hr>
                                                <p>Вторая, ориентированная на бизнес специализация, основывается на программах бакалавриата по информатике и веб-информатике. Основное внимание в программе «Предпринимательство в сфере информационных технологий» уделяет учащимся коммерческое использование программных продуктов, а также связанных с ними организационных структур и необходимых управленческих знаний. Содержание курса способствует передаче знаний и технологий экономике Кыргызстана и укреплению существующей ИТ-экономики на национальном и международном уровнях. Таким образом, основное внимание в обучении уделяется техническим основам разработки программного обеспечения, компонентам управления бизнесом в отношении использования изобретений, а также межкультурных аспектов и языковой подготовки. Широкие практические модули во 2-м и 3-м семестрах с акцентом на стартап-коучинг позволяют выпускникам создавать собственную компанию, а также успешно создавать и реализовывать новые проекты в рамках существующей компании.</p>
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