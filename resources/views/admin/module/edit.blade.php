@extends('admin.layouts.app')

@section('title', $row->label )

@section('content')

    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.module.index') }}">
            {{ trans('t.all_modules') }}
        </a>
    </div>
    <h6 class="element-header">
        {{$row->label }}
    </h6>
    <div class="element-box">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>{{trans('t.oops_error')}}</strong> {{trans('t.form_error')}}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::model($row,
            [	'id' => 'editForm',
                'class' => 'form-validate',
                'route' => ['admin.module.update', $row],
                'method' => 'PUT',
                'enctype' => 'multipart/form-data'
            ]) !!}
        @include('admin.module.form', $row)
        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

    </script>

@endsection

