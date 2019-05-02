@extends('admin.layouts.app') 
@section('title', $row->label_lang) 
@section('content')

<div class="element-actions">
    <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.specialisation.index') }}">
        {{ trans('t.all_specialisations') }}</a>
</div>
<h6 class="element-header">
    {{$row->label_lang}}
</h6>
<div class="element-box timeline">

    <fieldset>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.label') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->label_lang}}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.program') }}</h3>
            </div>
            <div class="body">
                <p><a href="{{ route('admin.program.show', $row->program) }}">{{$row->program->label_lang}}</a></p>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <div class="buttons-w">
            <a class="btn btn-success" href="{{route('admin.specialisation.index')}}">{{ trans('t.all_specialisations') }}</a>
            <a class="btn btn-primary" href="{{ route('admin.specialisation.edit', $row) }}">{{ trans('t.edit') }}</a> {!! Form::open(['method'
            => 'DELETE','route' => ['admin.specialisation.destroy', $row],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()'])
            !!}
            <input type="hidden" value="Delete">
            <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>{{ trans('t.remove') }}</button>            {!! Form::close() !!}
        </div>
    </fieldset>
</div>
@endsection