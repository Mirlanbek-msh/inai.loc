@extends('admin.layouts.app')

@section('title', 'Новая роль')

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.role.index') }}">
        <i class="os-icon os-icon-user-male-circle"></i> Все роли</a>
    </div>
    <h6 class="element-header">
        Новая роль
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
        {!! Form::open(array('route' => 'admin.role.store','method'=>'POST')) !!}
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Название:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Название','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Права:</strong>
                    <div class="row">
                        @foreach($permission as $value)
                        <div class="checkbox col-md-3 col-sm-4 col-6">
                            <label>
                                {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                <i></i>{{ $value->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('#datatables').DataTable();
        });
    </script>

@endsection