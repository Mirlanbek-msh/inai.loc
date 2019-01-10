@extends('admin.layouts.app')

@section('title', $row->title_lang )

@section('content')

    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.event.index') }}">
            <i class="os-icon os-icon-user-male-circle"></i> Все посты
        </a>
    </div>
    <h6 class="element-header">
        {{$row->title_lang }}
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
                'route' => ['admin.event.update', $row],
                'method' => 'PUT',
                'enctype' => 'multipart/form-data'
            ]) !!}
        @include('admin.event.form', $row)
        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')

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
        @if($row->has_end_date)
        $('input.multi-daterange').daterangepicker({
            timePicker: true,
            timePicker24Hour: true,
            timePickerIncrement: 5,
            autoUpdateInput: true,
            autoApply: true,
            startDate: moment('{{$row->event_start_date->format('Y-m-d H:i:s')}}', 'YYYY-MM-DD HH:mm:ss'),
            endDate: moment('{{$row->event_end_date->format('Y-m-d H:i:s')}}', 'YYYY-MM-DD HH:mm:ss'),
            locale: {
                format: 'HH:mm DD.MM.YYYY'
            }
        });
        @endif
    </script>

@endsection

