@extends('admin.layouts.app')

@section('title', trans('t.create_obligatory-catalogue'))


@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.obligatory-catalogue.index') }}">
            {{trans('t.all_obligatory-catalogues')}}</a>
    </div>
    <h6 class="element-header">
            {{trans('t.create_obligatory-catalogue')}}
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
        {!! Form::model(
            $row,['id' => 'createForm',
            'class' => 'form-validate',
            'route' => 'admin.obligatory-catalogue.store',
            'enctype' => 'multipart/form-data'
            ]) !!}
            @include('admin.obligatory-catalogue.form', $row)
        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')

    <script type="text/javascript">

    </script>
@endsection

