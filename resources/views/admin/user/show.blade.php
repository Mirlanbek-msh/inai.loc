@extends('admin.layouts.app')

@section('title', 'Посмотреть пользователя')

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.user.index') }}">
        <i class="os-icon os-icon-user-male-circle"></i> Все пользователи</a>
    </div>
    <h6 class="element-header">
        Посмотреть пользователя
    </h6>
    <div class="element-box timeline">
        <div class="entry">
            <div class="title">
                <h3>Аты жөнү</h3>
            </div>
            <div class="body">
                <p>{{ $user->name }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>Email</h3>
            </div>
            <div class="body">
                <p>{{ $user->email }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>Роль</h3>
            </div>
            <div class="body">
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                @endif
            </div>
        </div>
        @isset($user->user_id)
        @if($user->user_id->categories())
            <div class="entry">
                <div class="title">
                    <h3>Категория</h3>
                </div>
                <div class="body">
                    <p>{{ $user->user_id->categories()->title['ru'] }}</p>
                </div>
            </div>
            @endif
        @endisset
    
        <fieldset>
            <div class="buttons-w">
                <a class="btn btn-success" href="{{route('admin.user.index')}}">Все</a>
                <a class="btn btn-primary" href="{{ route('admin.user.edit', $user) }}">Изменить</a>
                {!! Form::open(['method' => 'DELETE','route' => ['admin.user.destroy', $user],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
                <input type="hidden" value="Delete">
                <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>Удалить</button>
                {!! Form::close() !!}
            </div>
        </fieldset>
    </div>
        
        {{-- @isset($user->user_id)
            @if($user->user_id->subcategories())
                <div class="entry">
                    <div class="title">
                        <h3>Суб Категория</h3>
                    </div>
                    <div class="body">
                        <p>{{ $user->user_id->subcategories()->title['ru'] }}</p>
                    </div>
                </div>
            </div>
            @endif
        @endisset --}}

@endsection

@section('scripts')
@endsection