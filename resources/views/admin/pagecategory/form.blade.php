<fieldset class="form-group">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Заголовок</label>
        <div class="col-sm-10">
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder'=> 'Заголовок']) !!}
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Короткое описание</label>
        <div class="col-sm-10">
            {!! Form::textarea('description', null, ["class" => "form-control", 'rows' => 5]) !!}
            <div class="mb-2"></div>
        </div>
    </div>
</fieldset>
<fieldset class="form-group">
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
                {!! Form::submit('Сохранить',['class'=>'btn btn-primary', 'id'=>'button']); !!}
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Назад</a>
            </div>
        </div>
    </div>
</fieldset>