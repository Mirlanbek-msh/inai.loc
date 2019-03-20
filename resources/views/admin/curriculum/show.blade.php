@extends('admin.layouts.app') 
@section('title', $row->module->label) 
@section('content')

<div class="element-actions">
    <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.curriculum.index') }}">
        {{ trans('t.all_curricula') }}</a>
</div>
<h6 class="element-header">
    {{$row->module->label}}
</h6>
<div class="element-box timeline">

    <fieldset>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.module') }}</h3>
            </div>
            <div class="body">
                <p><a href="{{ route('admin.module.show', $row->module) }}">{{$row->module->label}}</a></p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.specialisation') }}</h3>
            </div>
            <div class="body">
                <p><a href="{{ route('admin.specialisation.show', $row->specialisation) }}">{{$row->specialisation->label}}</a></p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.comment') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->comment }}</p>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <div class="buttons-w">
            <a class="btn btn-success" href="{{route('admin.curriculum.index')}}">{{ trans('t.all_curricula') }}</a>
            <a class="btn btn-primary" href="{{ route('admin.curriculum.edit', $row) }}">{{ trans('t.edit') }}</a> {!! Form::open(['method'
            => 'DELETE','route' => ['admin.curriculum.destroy', $row],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()'])
            !!}
            <input type="hidden" value="Delete">
            <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>{{ trans('t.remove') }}</button>            {!! Form::close() !!}
        </div>
    </fieldset>
</div>
@endsection