@extends('bash.layouts.app')

@section('title', 'Изменить права')

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('permissions.index') }}">
        <i class="os-icon os-icon-user-male-circle"></i> Все права</a>
    </div>
    <h6 class="element-header">
        Изменить права - {{$permission->name}}
    </h6>
    <div class="element-box">

        {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}
        
            <div class="form-group">
                {{ Form::label('name', 'Permission Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>
            {{ Form::submit('Изменить', array('class' => 'btn btn-primary')) }}
        
        {{ Form::close() }}
        
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('#datatables').DataTable();
        });
    </script>

@endsection