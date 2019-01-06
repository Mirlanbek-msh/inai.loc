<fieldset class="form-group">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Заголовок</label>
        <div class="col-sm-10">
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder'=> 'Русский']) !!}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Короткое описание</label>
        <div class="col-sm-10">
            {!! Form::textarea('description', null, ["class" => "form-control", 'rows' =>10]) !!}
            <div class="mb-2"></div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Содержание</label>
        <div class="col-sm-10">
            {!! Form::textarea('content', null, ["class" => "form-control", 'id' => 'editor', 'rows' => 25]) !!}
            <div class="mb-2"></div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Источник</label>
        <div class="col-sm-10">
            {!! Form::text('source', null, ["class" => "form-control"]) !!}
            <div class="mb-2"></div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Автор</label>
        <div class="col-sm-10">
            {!! Form::text('author', null, ["class" => "form-control"]) !!}
            <div class="mb-2"></div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Тэги</label>
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
        <label class="col-sm-2 col-form-label">Изображение поста</label>
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
                            <span class="fileinput-new">Выбрать</span>
                            <span class="fileinput-exists">Изменить</span>
                            {!! Form::file('image', null) !!}
                        </span>
                        <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Удалить</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Галерея <span id="photoCounter"></span></label>
        <div class="col-sm-10">
            <div class="dropzone" id="gallery">
                <div class="dz-message">
                    <div>
                        <h6>Выберите картинки</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Категория</label>
        <div class="col-sm-10">
            <div class="form-group row">
                @hasanyrole('Editor-category')
                @else
                <div class="col-md-6">
                    {{-- <label class="col-form-label">Категория</label> --}}
                    <div class="d-block">
                        {!! Form::select('category_id', $categories, $row->country_id, ['class' => 'form-control directs',
                        'placeholder' => '-- Выберите --'])!!}
                    </div>
                </div>
                @endhasanyrole
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Страна</label>
        <div class="col-sm-10">
            <div class="form-group row">
                @hasanyrole('Editor-category')
                @else
                <div class="col-md-6">
                    {{-- <label class="col-form-label">Категория</label> --}}
                    <div class="d-block">
                        {!! Form::select('country_id', $countries, $row->country_id, ['class' => 'form-control directs',
                        'placeholder' => '-- Выберите --'])!!}
                    </div>
                </div>
                @endhasanyrole
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Дата</label>
        <div class="col-sm-3">
            <div class="date-input">
                {!! Form::text('created_at', date('Y-m-d H:i:s'), ['class' => 'form-control daterangetime']) !!}
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Опубликовать на FaceBook</label>
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
        <label class="col-sm-2 col-form-label">Опубликовать</label>
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
                    <div class="loader-text">Загружаются файлы...</div>
                </div>
                {!! Form::submit('Сохранить',['class'=>'btn btn-primary', 'id'=>'button']); !!}
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Назад</a>
            </div>
        </div>
    </div>
</fieldset>