@extends('admin.layouts.app')
@section('title', $row->label_lang)
@section('content')

<div class="element-actions">
    <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.module.index') }}">
        {{ trans('t.all_modules') }}</a>
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
                <h3>{{ trans('t.nr') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->nr }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.level') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->level_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.duration') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->duration_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.rotation') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->rotation_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.professor') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->professor_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.lecturer') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->lecturer_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.teaching_lang') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->teaching_lang }}</p>
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
                <h3>{{ trans('t.workload') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->workload_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.courses') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->courses_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.selfstudy_time') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->selfstudy_time_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.preliminary_work') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->preliminary_work_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.examination') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->examination_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.mediaform') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->mediaform_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.course_struc') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->course_struc_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.learning_goals') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->learning_goals_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.sp_skills') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->sp_skills_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.spec_req') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->spec_req_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.preliminary_knowledge') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->preliminary_knowledge_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.con_possib') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->con_possib_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.literature') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->literature_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.comment') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->comment_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.link') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->link_lang }}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>{{ trans('t.assign_curric') }}</h3>
            </div>
            <div class="body">
                <p>{{ $row->assign_curric_lang }}</p>
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
