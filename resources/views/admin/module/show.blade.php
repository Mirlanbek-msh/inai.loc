@extends('admin.layouts.app') 
@section('title', $row->label) 
@section('content')

<div class="element-actions">
    <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.module.index') }}">
        {{ trans('t.all_modules') }}</a>
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
                <h3>{{ trans('t.nr') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->nr }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.ects') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->ects }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.professor') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->professor }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.content') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->content }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.learning_goals') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->learning_goals }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.literature') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->literature }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.preliminary_knowledge') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->preliminary_knowledge }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.preliminary_work') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->preliminary_work }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.examination') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->examination }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.exam_duration') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->exam_duration }}</p>
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
            <a class="btn btn-success" href="{{route('admin.module.index')}}">{{ trans('t.all_modules') }}</a>
            <a class="btn btn-primary" href="{{ route('admin.module.edit', $row) }}">{{ trans('t.edit') }}</a> {!! Form::open(['method'
            => 'DELETE','route' => ['admin.module.destroy', $row],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()'])
            !!}
            <input type="hidden" value="Delete">
            <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>{{ trans('t.remove') }}</button>            {!! Form::close() !!}
        </div>
    </fieldset>
</div>
@endsection