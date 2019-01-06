@extends('admin.layouts.app')

@section('title', 'Новая страна')

@section('styles')
@endsection

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.category.index') }}">
        <i class="os-icon os-icon-user-male-circle"></i> Все страны</a>
    </div>
    <h6 class="element-header">
        Новая страна
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
        {!! Form::model(
            $row,['id' => 'createForm', 
            'route' => 'admin.country.store', 
            'enctype' => 'multipart/form-data']) !!}
            @include('admin.country.form', $row)
        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')

@endsection