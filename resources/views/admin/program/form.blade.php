<fieldset class="form-group">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">{{trans('t.label')}} *</label>
            <div class="col-sm-10">
                {!! Form::text('label', null, ['class' => 'form-control', 'required' => 'required', 'data-error' => trans('validation.required',['attribute' => ''])]) !!}
                <div class="help-block with-errors text-danger"></div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">{{trans('t.licensed')}}</label>
            <div class="col-sm-3">
                <div class="date-input">
                    {!! Form::text('licensed', null, ['class' => 'form-control daterangetime']) !!}
                </div>
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