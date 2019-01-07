@extends('admin.layouts.app')

@section('title', $row->title_lang)

@section('content')

    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.event.index') }}">
            <i class="os-icon os-icon-user-male-circle"></i>{{ trans('t.all_events') }}</a>
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
                        <h3>{{ trans('t.tags') }}</h3>
                    </div>
                    <div class="body">
                        @foreach($row->tags_lang as $tag)
                            @if($tag != '')
                                <button class="mr-2 mb-2 btn btn-outline-primary" type="button"> {{ $tag->title }}</button>
                            @endif
                        @endforeach
                    </div>
                </div>
            </fieldset>
    <fieldset>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.image') }}</h3>
            </div>
            <div class="body">
                <img class="img-fluid rounded" src="{{asset($row->image)}}" alt="">
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.views') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->views}}</p>
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
                <a class="btn btn-success" href="{{route('admin.event.index')}}">{{ trans('t.all_events') }}</a>
                <a class="btn btn-primary" href="{{ route('admin.event.edit', $row) }}">{{ trans('t.edit') }}</a>
                {!! Form::open(['method' => 'DELETE','route' => ['admin.event.destroy', $row],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
                <input type="hidden" value="Delete">
                <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>{{ trans('t.remove') }}</button>
                {!! Form::close() !!}
            </div>
        </fieldset>
    </div>

@endsection

@section('scripts')

@endsection