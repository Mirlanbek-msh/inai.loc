<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a href="#nav-ru" class="nav-item nav-link active" id="nav-ru-tab" data-toggle="tab" role="tab" aria-controls="nav-ru" aria-selected="true">Русский</a>
        <a href="#nav-en" class="nav-item nav-link" id="nav-en-tab" data-toggle="tab" role="tab" aria-controls="nav-en" aria-selected="false">English</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-ru" role="tabpanel">
        <fieldset class="form-group">
            <legend><span>{{trans('t.main_info')}} ({{trans('t.in_russian')}})</span></legend>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.title')}} *</label>
                <div class="col-sm-10">
                    {!! Form::text('title[ru]', null, ['class' => 'form-control', 'placeholder' => trans('t.title_example'), 'required' => 'required', 'data-error' => trans('validation.required',['attribute' => ''])]) !!}
                    <div class="help-block with-errors text-danger"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.description')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('description[ru]', null, ["class" => "form-control", 'rows' => 5, 'maxlength' => '155', 'placeholder' => trans('t.description_example')]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="tab-pane fade" id="nav-en" role="tabpanel">
        <fieldset class="form-group">
            <legend><span>{{trans('t.main_info')}} ({{trans('t.in_english')}})</span></legend>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.title')}} *</label>
                <div class="col-sm-10">
                    {!! Form::text('title[en]', null, ['class' => 'form-control', 'placeholder' => trans('t.title_example'), 'required' => 'required', 'data-error' => trans('validation.required',['attribute' => ''])]) !!}
                    <div class="help-block with-errors text-danger"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.description')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('description[en]', null, ["class" => "form-control", 'rows' => 5, 'maxlength' => '155', 'placeholder' => trans('t.description_example')]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
<fieldset>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.publish')}}</label>
        <div class="col-sm-10">
            <div class="checkbox">
                <label>
                    {!! Form::hidden('status', 0) !!}
                    {!! Form::checkbox('status', 1, null) !!}
                    <i></i>
                </label>
            </div>
        </div>
    </div>
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