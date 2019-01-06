@extends('bash.layouts.app')

@section('title', 'Новая роль')

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('roles.index') }}">
        <i class="os-icon os-icon-user-male-circle"></i> Все роли</a>
    </div>
    <h6 class="element-header">
        Новая роль
    </h6>
    <div class="element-box">
        {!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}
            
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', '', array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                
                @if(!$roles->isEmpty())
                    <h5>Привязать права</h5>
                    
                    @foreach ($roles as $role) 
                    {{ Form::checkbox('roles[]',  $role->id ) }}
                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                    @endforeach
                    
                @endif
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Кошуу</button>
            </div>
            
        {{ Form::close() }}
    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('#datatables').DataTable();
        });
    </script>

@endsection