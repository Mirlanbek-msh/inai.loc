@extends('admin.layouts.app')

@section('title', trans('t.create_page'))

@section('content')

    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.page.index') }}">
            <i class="os-icon os-icon-user-male-circle"></i> {{trans('t.all_pages')}}
        </a>
    </div>
    <h6 class="element-header">
        {{trans('t.create_page')}}
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
            [	'id' => 'createForm',
                'class' => 'form-validate',
                'route' => 'admin.page.store',
                'enctype' => 'multipart/form-data'
            ]) !!}
        @include('admin.page.form', $row)
        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')
    @include('admin.page.form_scripts')
    <script>
        $(document).ready(function() {
            $('.directs').select2();
            
        });
    </script>
    @include('admin.partials._texteditor')


    <script type="text/javascript">

    </script>

@endsection

