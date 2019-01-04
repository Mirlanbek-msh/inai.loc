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
                                <a class="nav-link active" data-toggle="tab" href="#p1" role="tab">Учебные программы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#p2" role="tab">Бакалавриат информатики</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#p3" role="tab">Программные технологии (Бакалавриат)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#p4" role="tab">Медицинская информатика (Бакалавриат)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#p5" role="tab">Веб-информатика (Бакалавриат)</a>
                            </li>
                        </ul>
                        <div class="tab-content responsive col-md-8">
                            <div class="tab-pane active" id="p1" role="tabpanel">
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

                            <div class="tab-pane" id="p2" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="content-body">
                                                <h3>Бакалавриат информатики</h3>
                                                <hr>
                                                <table class="table table-bordered" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td width="155"><strong>Степень</strong> <strong>&nbsp;</strong></td>
                                                            <td width="411">Бакалавр (Bachelor of Science, B.Sc.)</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="155"><strong>Форма обучения</strong></td>
                                                            <td width="411">дневная</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="155"><strong>Начало обучения</strong></td>
                                                            <td width="411">Зимний семестр</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="155"><strong>Длительность / ECTS </strong></td>
                                                            <td width="411">8 семестров / 240 ECTS</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="155"><strong>Практика</strong></td>
                                                            <td width="411">10 ECTS в 7.семестре, 18 ECTS а 8.семестре</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="155"><strong>Условия поступления</strong></td>
                                                            <td width="411">—&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Аттестат о среднем
                                                                школьном образовании
                                                                <p></p>
                                                                <p>—&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ОРТ 110 баллов
                                                                    по основной части, 60 по математике</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="155"><strong>Плата за обучение</strong></td>
                                                            <td width="411">1.200 USD</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>Учебный план можете просмотреть здесь: <a href="http://inai-kg.de/wp-content/uploads/2018/11/Учебный-план-ВA_INAI.kg_RUS.pdf">Учебный план ВA_INAI.kg_RUS</a></p>
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
                                                <h3>Программные технологии (Бакалавриат)</h3>
                                                <hr>
                                                <p>В начальных курсах бакалаврской программы предлагаются модули «Основы информатики и программирования», «Математика и логика», и, следовательно, обеспечиваются широкие базовые знания в области информатики. На этой основе программа далее предусматривает модули, касающиеся разработки объектно-ориентированного программирования, программного обеспечения, технологии баз данных, компьютерной архитектуры, информационных систем, структур данных, и направлена ​​на обучение наиболее важных методов и теорий в области информатики. В старших курсах, предлагаются мобильные приложения и веб-технологии. В дополнение к специализации в области компьютерных наук, также предлагаются более сложные компьютерные технологии, например, искусственный интеллект и разработка и анализ алгоритмов. Далее укрепляются практические знания в различных областях информатики теоретической информатикой и математическими основами. В течение последних курсов, предлагаются модули с более сложными задачами информатики как взаимодействие компьютера и человечека, системное программирование и разработка системы объектно-ориентированного программирования. В последней части обучения, до выполнения бакалаврских работ, студенты могут выбрать новые сферы компьютерных наук, такие как облачные вычисления, программирование для микропроцессоров, шаблонов проектирования, робототехники и интеллектуального анализа данных и так далее.</p>
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
                                                <h3>Медицинская информатика (Бакалавриат)</h3>
                                                <hr>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat nihil, eligendi excepturi numquam unde nisi obcaecati porro dolorum earum necessitatibus reiciendis corrupti ducimus veniam quae facere reprehenderit aliquid voluptatem ut.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="p5" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="content-body">
                                                <h3>Веб-информатика (Бакалавриат)</h3>
                                                <hr>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat nihil, eligendi excepturi numquam unde nisi obcaecati porro dolorum earum necessitatibus reiciendis corrupti ducimus veniam quae facere reprehenderit aliquid voluptatem ut.</p>
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