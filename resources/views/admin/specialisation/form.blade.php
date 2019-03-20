<fieldset class="form-group">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">{{trans('t.label')}} *</label>
            <div class="col-sm-10">
                {!! Form::text('label', null, ['class' => 'form-control', 'required' => 'required', 'data-error' => trans('validation.required',['attribute' => ''])]) !!}
                <div class="help-block with-errors text-danger"></div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">{{trans('t.program')}}</label>
            <div class="col-sm-10">
                <div class="form-group row">
                    <div class="col-md-6">
                        {{-- <label class="col-form-label">Категория</label> --}}
                        <div class="d-block">
                            {!! Form::select('program_id', $programs, $row->program_id, ['class' => 'form-control directs',
                            'placeholder' => '-- '.trans('t.select').' --'])!!}
                        </div>
                    </div>
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