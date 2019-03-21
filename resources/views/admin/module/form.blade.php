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
                <label class="col-sm-2 col-form-label">{{trans('t.professor')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('professor', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.content')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('content', null, ["class" => "form-control"]) !!}
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
                <label class="col-sm-2 col-form-label">{{trans('t.literature')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('literature', null, ["class" => "form-control"]) !!}
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
                <label class="col-sm-2 col-form-label">{{trans('t.exam_duration')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('exam_duration', null, ["class" => "form-control"]) !!}
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
                <label class="col-sm-2 col-form-label">{{trans('t.professor')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('professor_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.content')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('content_ru', null, ["class" => "form-control"]) !!}
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
                <label class="col-sm-2 col-form-label">{{trans('t.literature')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('literature_ru', null, ["class" => "form-control"]) !!}
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
                <label class="col-sm-2 col-form-label">{{trans('t.exam_duration')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('exam_duration_ru', null, ["class" => "form-control"]) !!}
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
        <label class="col-sm-2 col-form-label">{{trans('t.ects')}}</label>
        <div class="col-sm-10">
            {!! Form::number('ects', null, ["class" => "form-control"]) !!}
            <div class="mb-2"></div>
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