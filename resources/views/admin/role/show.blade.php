@extends('admin.layouts.app')

@section('title', 'Посмотреть роль')

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.role.index') }}">
        <i class="os-icon os-icon-user-male-circle"></i> Все роли</a>
    </div>
    <h6 class="element-header">
        Посмотреть роль
    </h6>
    <div class="element-box timeline">
        <div class="entry">
            <div class="title">
                <h3>Название</h3>
            </div>
            <div class="body">
                <p>{{ $role->name }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>Права</h3>
            </div>
            <div class="body">
                @if(!empty($rolePermissions))
                <div class="row">
                    @foreach($rolePermissions as $value)
                        <div class="checkbox col-md-3 col-sm-4 col-6">
                            <label>
                                {{ Form::checkbox('permission[]', $value->id, array('class' => 'name'), array('disabled')) }}
                                <i></i>{{ $value->name }}
                            </label>
                        </div>
                        {{-- <label class="label label-success">{{ $v->name }},</label> --}}
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <fieldset>
            <div class="buttons-w">
                <a class="btn btn-success" href="{{route('admin.role.index')}}">Все</a>
                <a class="btn btn-primary" href="{{ route('admin.role.edit', $role) }}">Изменить</a>
                {!! Form::open(['method' => 'DELETE','route' => ['admin.role.destroy', $role],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
                <input type="hidden" value="Delete">
                <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>Удалить</button>
                {!! Form::close() !!}
            </div>
        </fieldset>
    </div>

@endsection

@section('scripts')

@endsection