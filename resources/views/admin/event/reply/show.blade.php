@extends('admin.layouts.app') 
@section('title', $event->title_lang) 
@section('content')

<div class="element-actions">
    <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.event.reply', $event) }}">
            <i class="os-icon os-icon-user-male-circle"></i> {{ trans('t.others') }}</a>
</div>
<h6 class="element-header">
    {{$row->org_name ? $row->org_name : $row->full_name}}
</h6>
<div class="element-box timeline">

    <fieldset>
        @if($event->need_org_name)
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.org_name') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->org_name}}</p>
            </div>
        </div>
        @endif
        @if($event->need_full_name)
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.full_name') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->full_name}}</p>
            </div>
        </div>
        @endif
        @if($event->need_university)
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.university') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->university}}</p>
            </div>
        </div>
        @endif
        @if($event->need_group_course)
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.group_course') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->group_course}}</p>
            </div>
        </div>
        @endif
        @if($event->need_team_name)
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.team_name') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->team_name}}</p>
            </div>
        </div>
        @endif
        @if($event->need_phone)
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.phone_number') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->phone}}</p>
            </div>
        </div>
        @endif
        @if($event->need_email)
        <div class="entry">
            <div class="title">
                <h3>Email</h3>
            </div>
            <div class="body">
                <p>{{$row->email}}</p>
            </div>
        </div>
        @endif
        @if($event->need_file)
        <div class="entry">
            <div class="title">
                <h3>{{trans('t.file')}}</h3>
            </div>
            <div class="body">
                <p><a href="{{asset($row->file)}}" target="_blank">{{trans('t.view')}}</a></p>
            </div>
        </div>
        @endif
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.time') }}</h3>
            </div>
            <div class="body">
                <p>{{$row->created_at}}</p>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <div class="buttons-w">
            <a class="btn btn-success" href="{{route('admin.event.reply', $event)}}">{{ trans('t.others') }}</a>
            {!! Form::open(['method'
            => 'DELETE','route' => ['admin.event.reply.destroy', $event, $row],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()'])
            !!}
            <input type="hidden" value="Delete">
            <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>{{ trans('t.remove') }}</button>            {!! Form::close() !!}
        </div>
    </fieldset>
</div>
@endsection
 
@section('scripts')
@endsection