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
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.content')}} *</label>
                <div class="col-sm-10">
                    {!! Form::textarea('content[ru]', null, ["class" => "form-control editor", 'rows' => 10]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.tags')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('tags[ru]', null, ["class" => "form-control tags-ru"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend><span>{{trans('t.event_time_place')}} ({{trans('t.in_russian')}})</span></legend>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.event_place')}} *</label>
                <div class="col-sm-10">
                    {!! Form::text('event_place[ru]', null, ["class" => "form-control", 'placeholder' => trans('t.event_place_example'), 'required' => 'required', 'data-error' => trans('validation.required',['attribute' => ''])]) !!}
                    <div class="help-block with-errors text-danger"></div>
                    <div class="mb-2"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.event_entrance')}} *</label>
                <div class="col-sm-10">
                    {!! Form::text('event_entrance[ru]', null, ["class" => "form-control", 'placeholder' => trans('t.event_entrance_example'), 'required' => 'required', 'data-error' => trans('validation.required',['attribute' => ''])]) !!}
                    <div class="help-block with-errors text-danger"></div>
                    <div class="mb-2"></div>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend><span>{{trans('t.event_about_author')}} ({{trans('t.in_russian')}})</span></legend>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.author_name')}} *</label>
                <div class="col-sm-10">
                    {!! Form::text('author_name[ru]', null, ["class" => "form-control", 'placeholder' => trans('t.author_name_example'), 'required' => 'required', 'data-error' => trans('validation.required',['attribute' => ''])]) !!}
                    <div class="help-block with-errors text-danger"></div>
                    <div class="mb-2"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.author_desc')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('author_desc[ru]', null, ["class" => "form-control", 'rows' => 5, 'placeholder' => trans('t.author_desc_example')]) !!}
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
                    {!! Form::text('title[en]', null, ['class' => 'form-control', 'placeholder' => trans('t.title_example')]) !!}
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
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.content')}} *</label>
                <div class="col-sm-10">
                    {!! Form::textarea('content[en]', null, ["class" => "form-control editor", 'rows' => 10]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.tags')}}</label>
                <div class="col-sm-10">
                    {!! Form::text('tags[en]', null, ["class" => "form-control tags-en"]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend><span>{{trans('t.event_time_place')}} ({{trans('t.in_english')}})</span></legend>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.event_place')}} *</label>
                <div class="col-sm-10">
                    {!! Form::text('event_place[en]', null, ["class" => "form-control", 'placeholder' => trans('t.event_place_example')]) !!}
                    <div class="help-block with-errors text-danger"></div>
                    <div class="mb-2"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.event_entrance')}} *</label>
                <div class="col-sm-10">
                    {!! Form::text('event_entrance[en]', null, ["class" => "form-control", 'placeholder' => trans('t.event_entrance_example')]) !!}
                    <div class="help-block with-errors text-danger"></div>
                    <div class="mb-2"></div>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend><span>{{trans('t.event_about_author')}} ({{trans('t.in_english')}})</span></legend>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.author_name')}} *</label>
                <div class="col-sm-10">
                    {!! Form::text('author_name[en]', null, ["class" => "form-control", 'placeholder' => trans('t.author_name_example')]) !!}
                    <div class="help-block with-errors text-danger"></div>
                    <div class="mb-2"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{trans('t.author_desc')}}</label>
                <div class="col-sm-10">
                    {!! Form::textarea('author_desc[en]', null, ["class" => "form-control", 'rows' => 5, 'placeholder' => trans('t.author_desc_example')]) !!}
                    <div class="mb-2"></div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
<fieldset class="form-group">
    <legend><span>{{trans('t.signing_up_form')}}</span></legend>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.has_signing_up_form')}}</label>
        <div class="col-sm-10">
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('has_signing_up_form', 1, null) !!}
                    <i></i>
                </label>
            </div>
        </div>
    </div>
</fieldset>
<fieldset class="form-group signing-up-form">
    <legend><span>{{trans('t.following_data_required_to_sign_up')}}</span></legend>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.need_org_name')}}</label>
        <div class="col-sm-10">
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('need_org_name', 1, null) !!}
                    <i></i>
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.need_full_name')}}</label>
        <div class="col-sm-10">
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('need_full_name', 1, null) !!}
                    <i></i>
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.need_phone')}}</label>
        <div class="col-sm-10">
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('need_phone', 1, null) !!}
                    <i></i>
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.need_email')}}</label>
        <div class="col-sm-10">
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('need_email', 1, null) !!}
                    <i></i>
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.need_file')}}</label>
        <div class="col-sm-10">
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('need_file', 1, null) !!}
                    <i></i>
                </label>
            </div>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend><span>{{trans('t.author_contact_data')}}</span></legend>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.author_phone')}} *</label>
        <div class="col-sm-10">
            {!! Form::tel('author_phone', null, ['class' => 'form-control', 'pattern' => "(0|[+][0-9]{1,3})[ ]?[0-9]{3}[ ]?[0-9]{3}[ ]?[0-9]{3,6}", 'placeholder'=> trans('t.author_phone_example'), 'required' => 'required', 'data-error' => trans('validation.regex',['attribute' => '']).' (+996 555 555 555)']) !!}
            <div class="help-block with-errors text-danger"></div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.author_email')}} *</label>
        <div class="col-sm-10">
            {!! Form::email('author_email', null, ['class' => 'form-control', 'placeholder'=> trans('t.author_email_example'), 'required' => 'required', 'data-error' =>    )]) !!}
            <div class="help-block with-errors text-danger"></div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.author_image')}} *</label>
        <div class="col-sm-10">
            <div class="d-block">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    @if($row->author_img)
                    <div class="fileinput-new thumbnail" style="width: auto; height: 180px;">
                        <img src="{{asset($row->author_img)}}" alt="...">
                    </div>
                    @endif
                    <div class="fileinput-preview fileinput-exists thumbnail" style="width: 320px; height: 180px;"></div>
                    <div>
                        <span class="btn btn-primary btn-file">
                            <span class="fileinput-new">{{trans('t.select')}}</span>
                            <span class="fileinput-exists">{{trans('t.change')}}</span>
                            {!! Form::file('author_img', ['accept' => 'image/*']) !!}
                        </span>
                        <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">{{trans('t.remove')}}</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</fieldset>
<fieldset>
    <legend><span>{{trans('t.event_date')}}</span></legend>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.has_end_date')}}</label>
        <div class="col-sm-10">
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('has_end_date', 1) !!}
                    <i></i>
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.event_date_time')}} *</label>
        <div class="col-sm-4 event-date-multi">
            <div class="date-input">
                {!! Form::text('event_date_multi', null, ['class' => 'form-control multi-daterange']) !!}
            </div>
        </div>
        <div class="col-sm-3 event-date">
            <div class="date-input">
                {!! Form::text('event_date', null, ['class' => 'form-control daterangetime']) !!}
            </div>
        </div>
    </div>
</fieldset>
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
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Video URL</label>
        <div class="col-sm-10">
            {!! Form::text('video_id', null, ['class' => 'form-control', 'placeholder'=> '#']) !!}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.date_time')}}</label>
        <div class="col-sm-3">
            <div class="date-input">
                {!! Form::text('created_at', null, ['class' => 'form-control daterangetime']) !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.to_banner')}}</label>
        <div class="col-sm-10">
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('to_banner', 1, null) !!}
                    <i></i>
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.publish_on')}} FaceBook</label>
        <div class="col-sm-10">
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('to_facebook', 1, null) !!}
                    <i></i>
                </label>
            </div>
        </div>
    </div>
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