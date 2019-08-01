@extends('admin.layouts.app') 
@section('title', $row->title) 
@section('content')

<div class="element-actions">
    <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.post.index') }}">
            <i class="os-icon os-icon-user-male-circle"></i>{{ trans('t.all_posts') }}</a>
</div>
<h6 class="element-header">
    {{$row->title}}
</h6>
<div class="element-box timeline">

    <fieldset>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.title') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->title}}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.description') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->description }}</p>
            </div>
        </div>
        @isset($row->video_id)
        <div class="entry">
            <div class="title">
                <h3>Video URL</h3>
            </div>
            <div class="body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/{{ $row->getYouTubeVideoId() }}?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        @endisset
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.content') }}</h3>
            </div>
            <div class="body">
                <p><a target="_blank" href="{{ route('web.post.show', $row->slug) }}">{{ trans('t.open_on_site') }}</a></p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.tags') }}</h3>
            </div>
            <div class="body">
                @foreach($row->tags()->get() as $tag) @if($tag != '')
                <button class="mr-2 mb-2 btn btn-outline-primary" type="button"> {{ $tag->title }}</button> @endif @endforeach
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.image') }}</h3>
            </div>
            <div class="body">
                <img class="img-fluid rounded" src="{{asset($row->image)}}" alt="">
            </div>
        </div>
        @isset($row->gallery)
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.gallery') }} ({{count($row->gallery['thumbs'])}})</h3>
            </div>
            <div class="body">
                <div class="row">
                    @foreach ($row->gallery['thumbs'] as $item)
                    <div class="col-md-2 col-sm-3 mb-3">
                        <img class="img-fluid rounded" src="{{asset($item['file'])}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endisset
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.category') }}</h3>
            </div>
            <div class="body">
                <p>
                    {{ $row->category->title }}
                </p>
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
            <a class="btn btn-success" href="{{route('admin.post.index')}}">{{ trans('t.all_posts') }}</a>
            <a class="btn btn-primary" href="{{ route('admin.post.edit', $row) }}">{{ trans('t.edit') }}</a> {!! Form::open(['method'
            => 'DELETE','route' => ['admin.post.destroy', $row],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()'])
            !!}
            <input type="hidden" value="Delete">
            <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>{{ trans('t.remove') }}</button>            {!! Form::close() !!}
        </div>
    </fieldset>
</div>
@endsection
 
@section('scripts')
@endsection