@extends('admin.layouts.app') 
@section('title', $row->obligatoryModule->label) 
@section('content')

<div class="element-actions">
    <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.obligatory-catalogue.index') }}">
        {{ trans('t.all_obligatory-catalogues') }}</a>
</div>
<h6 class="element-header">
    {{$row->obligatoryModule->label}}
</h6>
<div class="element-box timeline">

    <fieldset>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.placeholder_module') }}</h3>
            </div>
            <div class="body">
                <p><a href="{{ route('admin.module.show', $row->placeholderModule) }}">{{$row->placeholderModule->label}}</a></p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.obligatory_module') }}</h3>
            </div>
            <div class="body">
                <p><a href="{{ route('admin.module.show', $row->obligatoryModule) }}">{{$row->obligatoryModule->label}}</a></p>
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
            <a class="btn btn-success" href="{{route('admin.obligatory-catalogue.index')}}">{{ trans('t.all_obligatory-catalogues') }}</a>
            <a class="btn btn-primary" href="{{ route('admin.obligatory-catalogue.edit', $row) }}">{{ trans('t.edit') }}</a> {!! Form::open(['method'
            => 'DELETE','route' => ['admin.obligatory-catalogue.destroy', $row],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()'])
            !!}
            <input type="hidden" value="Delete">
            <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>{{ trans('t.remove') }}</button>            {!! Form::close() !!}
        </div>
    </fieldset>
</div>
@endsection