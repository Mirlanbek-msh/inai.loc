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
                <label class="col-sm-2 col-form-label">{{trans('t.comment')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
                    <div class="help-block with-errors text-danger"></div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="tab-pane fade show" id="nav-ru" role="tabpanel">
        <fieldset class="form-group">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.comment')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('comment_ru', null, ['class' => 'form-control']) !!}
                    <div class="help-block with-errors text-danger"></div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
<fieldset class="form-group">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.placeholder_module')}}</label>
        <div class="col-sm-10">
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="d-block">
                        {!! Form::select('placeholder_module_id', $modules, $row->placeholder_module_id, ['class' => 'form-control select2',
                        'placeholder' => '-- '.trans('t.select').' --'])!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.obligatory_module')}}</label>
        <div class="col-sm-10">
            <div class="form-group row">
                <div class="col-md-6">
                    {{-- <label class="col-form-label">Категория</label> --}}
                    <div class="d-block">
                        {!! Form::select('obligatory_module_id', $modules, $row->obligatory_module_id, ['class' => 'form-control select2',
                        'placeholder' => '-- '.trans('t.select').' --'])!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<fieldset class="form-group">
    {{-- <div class="form-group row">
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
    </div> --}}
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