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
        <legend><span>{{trans('t.other_info')}}</span></legend>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">{{trans('t.image')}} *</label>
            <div class="col-sm-10">
                <div class="d-block">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        @if($row->thumb)
                        <div class="fileinput-new thumbnail" style="width: auto; height: 180px;">
                            <img src="{{asset($row->image)}}" alt="...">
                        </div>
                        @endif
                        <div class="fileinput-preview fileinput-exists thumbnail" style="width: 320px; height: 180px;"></div>
                        <div>
                            <span class="btn btn-primary btn-file">
                                <span class="fileinput-new">{{trans('t.select')}}</span>
                                <span class="fileinput-exists">{{trans('t.change')}}</span>
                                {!! Form::file('image', ['accept' => 'image/*']) !!}
                            </span>
                            <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">{{trans('t.remove')}}</a>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="form-group row">
            <label class="col-sm-2 col-form-label">{{trans('t.publish_on')}} FaceBook</label>
            <div class="col-sm-10">
                <div class="checkbox">
                    <label>
                        {!! Form::checkbox('to_facebook', 1, null) !!}
                        <i></i>
                    </label>
                </div>
            </div>
        </div> --}}
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