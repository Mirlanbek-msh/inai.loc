@extends('admin.layouts.app') 
@section('title', $row->label) 
@section('content')

<div class="element-actions">
    <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.program.index') }}">
        {{ trans('t.all_programs') }}</a>
</div>
<h6 class="element-header">
    {{$row->label}}
</h6>
<div class="element-box timeline">

    <fieldset>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.label') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->label}}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.licensed') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->licensed }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.degree') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->degree }}</p>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <div class="buttons-w">
            <a class="btn btn-success" href="{{route('admin.program.index')}}">{{ trans('t.all_programs') }}</a>
            <a class="btn btn-primary" href="{{ route('admin.program.edit', $row) }}">{{ trans('t.edit') }}</a> {!! Form::open(['method'
            => 'DELETE','route' => ['admin.program.destroy', $row],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()'])
            !!}
            <input type="hidden" value="Delete">
            <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>{{ trans('t.remove') }}</button>            {!! Form::close() !!}
        </div>
    </fieldset>
</div>
@endsection