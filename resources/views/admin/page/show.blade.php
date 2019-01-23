@extends('admin.layouts.app') 
@section('title', $row->title_lang) 
@section('content')

<div class="element-actions">
    <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.page.index') }}">
            <i class="os-icon os-icon-user-male-circle"></i> {{ trans('t.all_pages') }}</a>
</div>
<h6 class="element-header">
    {{$row->title_lang}}
</h6>
<div class="element-box timeline">

    <fieldset>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.title') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->title_lang}}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.description') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->description_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.content') }}</h3>
            </div>
            <div class="body">
                <p>{!! $row->content_lang !!}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.category') }}</h3>
            </div>
            <div class="body">
                <p>
                    {{ $row->category->title_lang }}
                </p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.date_time') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->created_at}}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.status') }}</h3>
            </div>
            <div class="body">
                <p>
                    @status($row->status)
                </p>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <div class="buttons-w">
            <a class="btn btn-success" href="{{route('admin.page.index')}}">{{ trans('t.all_pages') }}</a>
            <a class="btn btn-primary" href="{{ route('admin.page.edit', $row) }}">{{ trans('t.edit') }}</a> 
            {{-- {!! Form::open(['method'
            => 'DELETE','route' => ['admin.page.destroy', $row],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()'])
            !!}
            <input type="hidden" value="Delete">
            <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>
                {{ trans('t.remove') }}
            </button>
            {!! Form::close() !!} --}}
        </div>
    </fieldset>
</div>
@endsection
 
@section('scripts')
@endsection