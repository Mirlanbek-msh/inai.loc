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
                <label class="col-sm-2 col-form-label">{{trans('t.degree')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('degree', null, ["class" => "form-control"]) !!}
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
                <label class="col-sm-2 col-form-label">{{trans('t.degree')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('degree_ru', null, ["class" => "form-control"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
<fieldset class="form-group">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.licensed')}}</label>
        <div class="col-sm-3">
            <div class="date-input">
                {!! Form::text('licensed', null, ['class' => 'form-control daterangetime']) !!}
            </div>
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