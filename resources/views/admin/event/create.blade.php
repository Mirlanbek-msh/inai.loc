@extends('admin.layouts.app')

@section('title', trans('t.create_event'))

@section('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('admin/css/library.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/jasny-bootstrap.min.css')}}">

@endsection

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.event.index') }}">
            <i class="os-icon os-icon-user-male-circle"></i> {{trans('t.all_events')}}</a>
    </div>
    <h6 class="element-header">
            {{trans('t.create_event')}}
    </h6>
    <div class="element-box">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::model(
            $row,['id' => 'createForm',
            'route' => 'admin.event.store',
            'class' => 'form-validate',
            'enctype' => 'multipart/form-data']) !!}
            @include('admin.event.form', $row)
        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')

    <script src="https://use.fontawesome.com/691852923e.js"></script>
    <script src="{{ asset('admin/js/library.js') }}"></script>
    <script src="{{ asset('admin/js/fileinput.js') }}"></script>
    <script src="{{ asset('admin/js/tagify.js')}}"></script>
    <script>
        $(document).ready(function() {

            var tagsRuInput = document.querySelector('input.tags-ru');
            var tagsRu = new Tagify(tagsRuInput, {
                whitelist : {!! $tagsRuStr !!}
            });

            var tagsEnInput = document.querySelector('input.tags-en');
            var tagsEn = new Tagify(tagsEnInput, {
                whitelist : {!! $tagsEnStr !!}
            });

            var hasEndDateCheckbox = document.querySelector('input[name=has_end_date]');
            var eventDateInput = $('.event-date');
            var eventDateMultiInput = $('.event-date-multi');
           
            function eventDatesCheck(){
                if($(hasEndDateCheckbox).is(':checked')){
                    eventDateInput.hide();
                    eventDateMultiInput.show();
                }else{
                    eventDateMultiInput.hide();
                    eventDateInput.show();
                }
            }

            eventDatesCheck();
            $(hasEndDateCheckbox).click(function(){
                eventDatesCheck();
            });


            var hasSigingUpCheckbox = document.querySelector('input[name=has_signing_up_form]');
            var signingUpForm = $('.signing-up-form');

            function signingUpFormCheck(){
                if($(hasSigingUpCheckbox).is(':checked')){
                    signingUpForm.show();
                }else{
                    signingUpForm.hide();
                }
            }
            signingUpFormCheck();
            $(hasSigingUpCheckbox).click(function(){
                signingUpFormCheck();
            });

        });
    </script>
    @include('admin.partials._texteditor')

    <script type="text/javascript">

    </script>
@endsection

