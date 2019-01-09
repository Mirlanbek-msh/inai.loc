@extends('admin.layouts.app')

@section('title', trans('t.gallery'))

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.gallery.index') }}">
    </div>
    <h6 class="element-header">
       {{trans('t.gallery')}}
    </h6>
    <div class="element-box timeline">
        <nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a href="#nav-ky" class="nav-item nav-link active" id="nav-ky-tab" data-toggle="tab" role="tab" aria-controls="nav-ky" aria-selected="true">Кыргызча</a>
				<a href="#nav-ru" class="nav-item nav-link" id="nav-ru-tab" data-toggle="tab" role="tab" aria-controls="nav-ru" aria-selected="false">Русский</a>
				<a href="#nav-en" class="nav-item nav-link" id="nav-en-tab" data-toggle="tab" role="tab" aria-controls="nav-en" aria-selected="false">English</a>
			</div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-ky" role="tabpanel" aria-labelledby="nav-ky-tab">
				<fieldset>
					<div class="entry">
						<div class="title">
							<h3>Аталышы</h3>
						</div>
						<div class="body">
							<p>{{$row->title['ky']}}</p>
						</div>
					</div>					
					<div class="entry">
						<div class="title">
							<h3>Мазмуну</h3>
						</div>
						<div class="body">
							<p>{!! $row->desc['ky'] !!}</p>
						</div>
					</div>					
				</fieldset>
			</div>
			<div class="tab-pane fade" id="nav-ru" role="tabpanel" aria-labelledby="nav-ru-tab">
				<fieldset>
					<div class="entry">
						<div class="title">
							<h3>Заголовок</h3>
						</div>
						<div class="body">
							<p>{{$row->title['ru']}}</p>
						</div>
					</div>					
					<div class="entry">
						<div class="title">
							<h3>Содержимое</h3>
						</div>
						<div class="body">
							<p>{!! $row->desc['ru'] !!}</p>
						</div>
					</div>
				</fieldset>
			</div>
			<div class="tab-pane fade" id="nav-en" role="tabpanel" aria-labelledby="nav-en-tab">
				<fieldset>
					<div class="entry">
						<div class="title">
							<h3>Title</h3>
						</div>
						<div class="body">
							<p>{{$row->title['en']}}</p>
						</div>
					</div>					
					<div class="entry">
						<div class="title">
							<h3>Desc</h3>
						</div>
						<div class="body">
							<p>{!! $row->desc['en'] !!}</p>
						</div>
					</div>
				</fieldset>
            </div>
            <fieldset>
                <div class="entry">
                    <div class="title">
                        <h3>URL</h3>
                    </div>
                    <div class="body">
                        <p>{{$row->slug}}</p>
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
            </fieldset>
		</div>
		<fieldset>
			<div class="buttons-w">
                <a class="btn btn-success" href="{{route('admin.gallery.index')}}">Все</a>
                {!! Form::open(['method' => 'DELETE','route' => ['admin.gallery.destroy', $row],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
                    <input type="hidden" value="Delete">
                    <button class="btn btn-danger float-right" type="submit"><i class="icon-feather-trash-2"></i>Удалить</button>
                {!! Form::close() !!}
			</div>
		</fieldset>
    </div>

@endsection

@section('scripts')
@endsection