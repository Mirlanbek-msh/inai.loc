@extends('admin.layouts.app')

@section('title', $row->title)

@section('content')

    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.post.index') }}">
            <i class="os-icon os-icon-user-male-circle"></i>Все посты</a>
    </div>
    <h6 class="element-header">
        {{$row->title}}
    </h6>
    <div class="element-box timeline">
        
        <fieldset>
                <div class="entry">
                    <div class="title">
                        <h3>Аталышы</h3>
                    </div>
                    <div class="body">
                        <p>{{$row->title}}</p>
                    </div>
                </div>
                <div class="entry">
                    <div class="title">
                        <h3>Кыска мазмуну</h3>
                    </div>
                    <div class="body">
                        <p>{!! $row->desccription !!}</p>
                    </div>
                </div>
                <div class="entry">
                    <div class="title">
                        <h3>Мазмуну</h3>
                    </div>
                    <div class="body">
                        <p>{!! $row->content !!}</p>
                    </div>
                </div>
                 <div class="entry">
                    <div class="title">
                        <h3>Тэгдер</h3>
                    </div>
                    <div class="body">
                        @foreach($row->tags()->get() as $tag)
                            @if($tag != '')
                                <button class="mr-2 mb-2 btn btn-outline-primary" type="button"> {{ $tag->title }}</button>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="entry">
                    <div class="title">
                        <h3>Сүрөттүн аталышы</h3>
                    </div>
                    <div class="body">
                        <p>{!! $row->thumbdesc !!}</p>
                    </div>
                </div>
            </fieldset>
    <fieldset>
        <div class="entry">
            <div class="title">
                <h3>Миниатюра</h3>
            </div>
            <div class="body">
                <img class="img-fluid rounded" src="{{asset($row->image)}}" alt="">
            </div>
        </div>
        @isset($row->gallery)
        <div class="entry">
            <div class="title">
                <h3>Галерея ({{count($row->gallery['thumbs'])}})</h3>
            </div>
            <div class="body">
                <div class="row">   
                    @foreach ($row->gallery['thumbs'] as $item)
                        <div class="col-md-2 col-sm-3 mb-3">
                            <img class="img-fluid rounded" src="{{asset($item['file'])}}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>                
        @endisset
        <div class="entry">
            <div class="title">
                <h3>Категория</h3>
            </div>
            <div class="body">
                <p>
                    @isset($row->category)
                        {{ $row->category()->first()->title }}
                    @endisset
                </p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>Көрүүлөр</h3>
            </div>
            <div class="body">
                <p>{{$row->views}}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>Дата</h3>
            </div>
            <div class="body">
                <p>{{$row->created_at}}</p>
            </div>
        </div>
        <div class="entry">
            <div class="title">
                <h3>Статус</h3>
            </div>
            <div class="body">
                <p>
                    {!! $row->getStatus() !!}
                </p>
            </div>
        </div>
    </fieldset>
        <fieldset>
            <div class="buttons-w">
                <a class="btn btn-success" href="{{route('admin.post.index')}}">Все</a>
                <a class="btn btn-primary" href="{{ route('admin.post.edit', $row) }}">Изменить</a>
                {!! Form::open(['method' => 'DELETE','route' => ['admin.post.destroy', $row],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
                <input type="hidden" value="Delete">
                <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>Удалить</button>
                {!! Form::close() !!}
            </div>
        </fieldset>
    </div>

@endsection

@section('scripts')

@endsection