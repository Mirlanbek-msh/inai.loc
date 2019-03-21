<fieldset class="form-group">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.title')}} *</label>
        <div class="col-sm-10">
            {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required', 'data-error' => trans('validation.required',['attribute' => ''])]) !!}
            <div class="help-block with-errors text-danger"></div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.description')}}</label>
        <div class="col-sm-10">
            {!! Form::textarea('description', null, ["class" => "form-control", 'rows' =>10, 'maxlength' => '155']) !!}
            <div class="mb-2"></div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.content')}} *</label>
        <div class="col-sm-10">
            {!! Form::textarea('content', null, ["class" => "form-control editor", 'id' => 'editor', 'rows' => 25]) !!}
            <div class="help-block with-errors text-danger"></div>
            <div class="mb-2"></div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.author')}}</label>
        <div class="col-sm-10">
            {!! Form::text('author', null, ["class" => "form-control"]) !!}
            <div class="mb-2"></div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.tags')}}</label>
        <div class="col-sm-10">
            {!! Form::text('tags', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</fieldset>
<fieldset class="form-group">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Video URL</label>
        <div class="col-sm-10">
            {!! Form::text('video_id', null, ['class' => 'form-control', 'placeholder'=> '#']) !!}
        </div>
    </div>
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
        <label class="col-sm-2 col-form-label">{{trans('t.gallery')}} <span id="photoCounter"></span></label>
        <div class="col-sm-10">
            <div class="dropzone" id="gallery">
                <div class="dz-message">
                    <div>
                        <h6>{{trans('t.select_images')}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">{{trans('t.category')}}</label>
        <div class="col-sm-10">
            <div class="form-group row">
                @hasanyrole('Editor-category')
                @else
                <div class="col-md-6">
                    {{-- <label class="col-form-label">Категория</label> --}}
                    <div class="d-block">
                        {!! Form::select('category_id', $categories, $row->country_id, ['class' => 'form-control select2',
                        'placeholder' => '-- '.trans('t.select').' --'])!!}
                    </div>
                </div>
                @endhasanyrole
            </div>
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
                <div id="loader">
                    <div class="loader"></div>
                    <div class="loader-text">{{trans('t.files_loading')}}...</div>
                </div>
                {!! Form::submit(trans('t.save'),['class'=>'btn btn-primary', 'id'=>'button']); !!}
                <a href="{{ url()->previous() }}" class="btn btn-secondary">{{trans('t.go_back')}}</a>
            </div>
        </div>
    </div>
</fieldset>