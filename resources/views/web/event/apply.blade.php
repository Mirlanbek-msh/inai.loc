@extends('web.layouts.base')

@section('title', trans('t.signing_up')." на ".$row->title_lang . " | INAI.KG")

@section('head_extra')
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
@section('content')

<section class="section pt-4 sps sps--abv sps-pt-80">
    <div class="container">
        <nav class="mt-md-4 mt-sm-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">{{ trans('t.home') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('web.event.index') }}">{{ trans('t.events') }}</a></li>
                <li class="breadcrumb-item active">{{$row->title_lang}} - {{ trans('t.signing_up') }}</li>
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
                                <h3>{{$row->title_lang}}</h3>
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>{{trans('t.oops_error')}}</strong> {{trans('t.form_error')}}<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if($row->canShowForm())
                                <form class="form form-validate" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if($row->need_org_name)
                                    <div class="form-group">
                                        <label for="">{{ trans('t.org_name') }}:</label>
                                        <input placeholder="INAI.KG" name="org_name" data-error="{{trans('validation.required',['attribute' => ''])}}" class="form-control" type="text" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    @endif
                                    @if($row->need_full_name)
                                    <div class="form-group">
                                        <label for="">{{ trans('t.full_name') }}:</label>
                                        <input placeholder="{{trans('t.full_name_example')}}" name="full_name" data-error="{{trans('validation.required',['attribute' => ''])}}" class="form-control" type="text" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    @endif
                                    @if($row->need_university)
                                    <div class="form-group">
                                        <label for="">{{ trans('t.university') }}:</label>
                                        <input placeholder="{{trans('t.university_example')}}" name="university" data-error="{{trans('validation.required',['attribute' => ''])}}" class="form-control" type="text" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    @endif
                                    @if($row->need_group_course)
                                    <div class="form-group">
                                        <label for="">{{ trans('t.group_course') }}:</label>
                                        <input placeholder="{{trans('t.group_course_example')}}" name="group_course" data-error="{{trans('validation.required',['attribute' => ''])}}" class="form-control" type="text" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    @endif
                                    @if($row->need_team_name)
                                    <div class="form-group">
                                        <label for="">{{ trans('t.team_name') }}:</label>
                                        <input placeholder="{{trans('t.team_name_example')}}" name="team_name" data-error="{{trans('validation.required',['attribute' => ''])}}" class="form-control" type="text" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    @endif
                                    @if($row->need_phone)
                                    <div class="form-group">
                                        <label for="">{{ trans('t.phone_number') }}:</label>
                                        <input required name="phone" placeholder="+996 555 555 555" data-error="{{trans('validation.regex',['attribute' => ''])}} (+996 555 555 555)" class="form-control" type="tel" pattern="(0|[+][0-9]{1,3})[ ]?[0-9]{3}[ ]?[0-9]{3}[ ]?[0-9]{3,6}">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    @endif
                                    @if($row->need_email)
                                    <div class="form-group">
                                        <label for="">Email:</label>
                                        <input required name="email" placeholder="balanchaev@mail.com" data-error="{{trans('validation.email',['attribute' => ''])}}" class="form-control" type="email">
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    @endif
                                    {{-- <div class="form-group">
                                        <label for="">Отдел:</label>
                                        <select class="form-control select2">
                                            <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div> --}}
                                    @if($row->need_file)
                                    <label for="">{{trans('t.file')}}:</label>
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
                                    @endif
                                    {{-- <div class="form-group">
                                        <label for="">Выберите ваш пол:</label><br>
                                        <input type="radio" id="r1" value="male" name="gender">
                                        <label for="r1">Мужчина</label>
                                        <input type="radio" id="r2" value="female" name="gender">
                                        <label for="r2">Женщина</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="ch1">
                                        <label for="ch1">Запомнить</label>
                                    </div> --}}
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6LcDPYgUAAAAACVPk7QZmavWfsFq1F7wLHbBx-id"></div>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    <div class="form-group mt-4">
                                        <button class="btn btn-success">{{ trans('t.send') }}</button>
                                    </div>
                                </form>
                                @else
                                <div class="alert alert-danger">
                                    <p>{{trans('t.deadline_past')}}</p>
                                </div>
                                @endif

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