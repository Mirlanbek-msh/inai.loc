@extends('admin.layouts.app')

@section('title', 'Новый пользователь')

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.user.index') }}">
        <i class="os-icon os-icon-user-male-circle"></i> Все пользователи</a>
    </div>
    <h6 class="element-header">
        Новый пользователь
    </h6>
    <div class="element-box">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        {!! Form::open(array('route' => 'admin.user.store','method'=>'POST')) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Имя:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Имя','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Пароль:</strong>
                    {!! Form::password('password', array('placeholder' => 'Пароль','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Подтвердить пароль:</strong>
                    {!! Form::password('confirm-password', array('placeholder' => 'Подтвердить пароль','class' => 'form-control')) !!}
                </div>
            </div>
            @hasanyrole('Super Administrator')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Роль:</strong>                   
                    {!! Form::select('roles', $roles, 3, ['class' => 'form-control', 'id' => 'roles']) !!}
                </div>
            </div>
            @endhasanyrole
            <div class="col-xs-12 col-sm-12 col-md-12 categoriesCont">
                <div class="form-group">
                    <strong>Категории:</strong>
                    {{-- <select id="categories" name="category" class="form-control categories"></select> --}}
                    {!! Form::select('categories[]', $categories, null, ['class' => 'form-control', 'id' => 'categories', 'multiple' => true])!!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 countriesCont">
                <div class="form-group">
                    <strong>Страны:</strong>
                    {{-- <select id="subcategories" name="subcategory" class="form-control subcategories"></select> --}}
                    {!! Form::select('countries[]', $countries, null, ['class' => 'form-control', 'id' => 'countries', 'multiple' => true])!!}
                </div>
            </div>
            <fieldset class="form-group col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Активировать</label>
                    <div class="col-sm-10">
                        <div class="checkbox">
                            <label>
                                {!! Form::hidden('activated', 0) !!}
                                {!! Form::checkbox('activated', 1, null) !!}
                                <i></i>
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        var roles = $('#roles').select2();
        $('#categories').select2();
        $('#countries').select2();
        var categories = $('.categoriesCont');
        var countries = $('.countriesCont');

        @hasanyrole('Super Administrator')
        if($('#roles').val() != 3){
            categories.hide();
            countries.hide();
        }
        @endhasanyrole

        roles.on("select2:select", function (e) { 
            // console.log($(this).val());
            if($(this).val() == 3){
                categories.show();
                countries.show();
                // console.log('shown');
            }else{
                categories.hide();
                countries.hide();
                // console.log('hidden');
            }
        });
    });
</script>

@endsection