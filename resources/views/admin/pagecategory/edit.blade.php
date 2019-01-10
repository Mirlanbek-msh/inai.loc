@extends('admin.layouts.app')
@section('title', $row->title_lang )

@section('styles')
@endsection

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.pagecategory.index') }}">
        <i class="os-icon os-icon-user-male-circle"></i> Все категории</a>
    </div>
    <h6 class="element-header">
        {{$row->title_lang }}
    </h6>
    <div class="element-box">
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
        {!! Form::model($row, 
            [	'id' => 'editForm',
                'route' => ['admin.pagecategory.update', $row], 
                'method' => 'PUT', 
                'enctype' => 'multipart/form-data'
            ]) !!}
            @include('admin.pagecategory.form', $row)
        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')

@endsection