@extends('bash.layouts.app')

@section('title', 'Посмотреть роль')

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('roles.index') }}">
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
    </div>

@endsection

@section('scripts')

@endsection