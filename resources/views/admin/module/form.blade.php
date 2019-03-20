<fieldset class="form-group">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.label')}} *</label>
        <div class="col-sm-10">
            {!! Form::text('label', null, ['class' => 'form-control', 'required' => 'required', 'data-error' => trans('validation.required',['attribute' => ''])]) !!}
            <div class="help-block with-errors text-danger"></div>
        </div>
    </div>
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