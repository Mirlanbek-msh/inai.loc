@extends('web.layouts.base')

@section('title', 'Kyrgyz-German Institute of Applied Informatics')

@section('content')

<section class="section pt-4 sps sps--abv sps-pt-80">
    <div class="container">
        <nav class="mt-md-4 mt-sm-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">{{ trans('t.home') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('web.event.index') }}">{{ trans('t.events') }}</a></li>
                <li class="breadcrumb-item active">{{ trans('t.signing_up') }}</li>
            </ol>
        </nav>
        <div class="event-full content">
            <div class="row">
                <div class="col-12 mb-3 text-center mt-3">
                    <h2 class="text-bold section-title mb-3">{{ trans('t.signing_up') }}</h2>
                    <hr class="hr-1 w-75">
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-body">
                                <h3>Здесь можно написать еще что-то</h3>
                                <hr>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem ipsa animi quisquam reprehenderit veritatis, enim a aliquid error nemo, tempora harum asperiores eaque iure id, provident aliquam esse cupiditate doloremque.
                                </p>

                                <form class="form" method="POST">
                                    <div class="form-group">
                                        <label for="">{{ trans('t.full_name') }}:</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="">{{ trans('t.phone_number') }}:</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email:</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Отдел:</label>
                                        <select class="form-control select2">
                                            <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput">
                                            <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                            <span class="fileinput-filename"></span>
                                        </div>
                                        <span class="input-group-addon btn btn-default btn-file">
                                            <span class="fileinput-new">{{ trans('t.select_file') }}</span>
                                            <span class="fileinput-exists">{{ trans('t.change') }}</span>
                                            <input type="file" name="file">
                                        </span>
                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">
                                            {{ trans('t.remove') }}
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Выберите ваш пол:</label><br>
                                        <input type="radio" id="r1" value="male" name="gender">
                                        <label for="r1">Мужчина</label>
                                        <input type="radio" id="r2" value="female" name="gender">
                                        <label for="r2">Женщина</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="ch1">
                                        <label for="ch1">Запомнить</label>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success">{{ trans('t.send') }}</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
                
@section('scripts')
<script>
    $(document).ready(function(){
        $('.select2').select2({
            minimumResultsForSearch: -1,
            containerCssClass: 'select2-container-custom',
            placeholder: "{{ trans('t.select') }}",
            dropdownCssClass: 'select2-dropdown',
            language: '{{ app()->getLocale() }}',
            // theme: "bootstrap",

        });

        $('input').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue'
        });
    });
</script>
@endsection