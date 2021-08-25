<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a href="#nav-en" class="nav-item nav-link active" id="nav-en-tab" data-toggle="tab" role="tab" aria-controls="nav-en" aria-selected="false">English</a>
        <a href="#nav-ru" class="nav-item nav-link" id="nav-ru-tab" data-toggle="tab" role="tab" aria-controls="nav-ru" aria-selected="true">Русский</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-en" role="tabpanel">
        <fieldset class="form-group">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.label')}} *</label>
                <div class="col-sm-10">
                    {!! Form::text('label', null, ['class' => 'form-control', 'required' => 'required', 'data-error' => trans('validation.required',['attribute' => ''])]) !!}
                    <div class="help-block with-errors text-danger"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.level')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('level', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.duration')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('duration', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.rotation')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('rotation', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.professor')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('professor', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.lecturer')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('lecturer', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.teaching_lang')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('teaching_lang', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.workload')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('workload', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.courses')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('courses', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.selfstudy_time')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('selfstudy_time', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.preliminary_work')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('preliminary_work', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.examination')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('examination', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.mediaform')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('mediaform', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.course_struc')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('course_struc', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.learning_goals')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('learning_goals', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.sp_skills')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('sp_skills', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.spec_req')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('spec_req', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.preliminary_knowledge')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('preliminary_knowledge', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.con_possib')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('con_possib', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.literature')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('literature', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.comment')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('comment', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.link')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('link', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.assign_curric')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('assign_curric', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="tab-pane fade show" id="nav-ru" role="tabpanel">
        <fieldset class="form-group">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.label')}} *</label>
                <div class="col-sm-10">
                    {!! Form::text('label_ru', null, ['class' => 'form-control', 'required' => 'required', 'data-error' => trans('validation.required',['attribute' => ''])]) !!}
                    <div class="help-block with-errors text-danger"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.level')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('level_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.duration')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('duration_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.rotation')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('rotation_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.professor')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('professor_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.lecturer')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('lecturer_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.teaching_lang')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('teaching_lang_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.workload')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('workload_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.courses')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('courses_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.selfstudy_time')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('selfstudy_time_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.preliminary_work')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('preliminary_work_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.examination')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('examination_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.mediaform')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('mediaform_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.course_struc')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('course_struc_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.learning_goals')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('learning_goals_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.sp_skills')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('sp_skills_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.spec_req')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('spec_req_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.preliminary_knowledge')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('preliminary_knowledge_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.con_possib')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('con_possib_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.literature')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('literature_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.comment')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('comment_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.link')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('link_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.assign_curric')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('assign_curric_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
<fieldset class="form-group">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.nr')}}</label>
        <div class="col-sm-10">
            {!! Form::text('nr', null, ["class" => "form-control"]) !!}
            <div class="mb-2"></div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.ects')}} *</label>
        <div class="col-sm-10">
            {!! Form::text('ects', null, ['class' => 'form-control', 'required' => 'required', 'data-error' => trans('validation.required',['attribute' => ''])]) !!}
            <div class="help-block with-errors text-danger"></div>
        </div>
    </div>
</fieldset>
<fieldset class="form-group">
    <div class="form-buttons-w">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                {!! Form::submit(trans('t.save'),['class'=>'btn btn-primary', 'id'=>'button']); !!}
                <a href="{{ url()->previous() }}" class="btn btn-secondary">{{trans('t.go_back')}}</a>
            </div>
        </div>
    </div>
</fieldset>
