@extends('admin.layouts.app')
@section('title', $row->name )

@section('styles')
@endsection

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.country.index') }}">
        <i class="os-icon os-icon-user-male-circle"></i> Все страны</a>
    </div>
    <h6 class="element-header">
        {{$row->name }}
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
        {!! Form::model($row, 
            [	'id' => 'editForm',
                'route' => ['admin.country.update', $row], 
                'method' => 'PUT', 
                'enctype' => 'multipart/form-data'
            ]) !!}
            @include('admin.country.form', $row)
        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')

@endsection