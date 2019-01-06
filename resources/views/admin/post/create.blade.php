@extends('admin.layouts.app')

@section('title', 'Новый пост')

@section('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('admin/css/library.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/jasny-bootstrap.min.css')}}">

@endsection

@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.post.index') }}">
            <i class="os-icon os-icon-user-male-circle"></i> Все посты</a>
    </div>
    <h6 class="element-header">
        Новый пост
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
            'route' => 'admin.post.store',
            'enctype' => 'multipart/form-data']) !!}
            @include('admin.post.form', $row)
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

            var tagsInput = document.querySelector('input[name=tags]'),
                tags = new Tagify(tagsInput, {
                    whitelist : []
                })
            tags.on('remove', onRemoveTag);

            function onRemoveTag(e){
                console.log(e, e.detail);
            }

            function onAddTag(e){
                console.log(e, e.detail);
            }

        });
    </script>
    @include('admin.partials._texteditor')

    <script type="text/javascript">

        Dropzone.autoDiscover = false;       

        var imageUpload = new Dropzone("#gallery", { 
            url: '{{route("admin.post.store")}}', 
            paramName: "files",
            autoProcessQueue:false,
            uploadMultiple: true,
            parallelUploads: 20,
            maxFilesize: 16,
            maxFiles: 40,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            autoProcessQueue: false,
            dictCancelUpload: 'Отменить',
            dictCancelUploadConfirmation: 'Удалить',
            dictRemoveFile : 'Удалить файл',
            dictDefaultMessage: 'Выберите картинки',
            dictFileTooBig: 'Размер файла больше чем 16 мб',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            init: function(){

                var imageUpload = this;
                $('#loader').hide();                
                $("#button").click(function (e) {

                    if ($('.dz-started')[0]) {
                        $('#loader').show();
                        e.preventDefault();
                        imageUpload.processQueue();
                    }
                });

                this.on('sending', function(file, xhr, formData) {
                    var data = $('#createForm').serializeArray();
                    
                    $.each(data, function(key, el) {
                        formData.append(el.name, el.value);
                    });
                    formData.append("image", $("input[name=image]")[0].files[0]);
                });

                this.on("success", function(file, responseText) {
                    if (responseText == 'success') {
                        window.location.href = '{{route("admin.post.index")}}';
                    }
                });

                this.on("removedfile", function (file) {
                    // $.post({
                    //     url: '/images-delete',
                    //     data: {id: file.customName, _token: $('[name="_token"]').val()},
                    //     dataType: 'json',
                    //     success: function (data) {
                    //         total_photos_counter--;
                    //         $("#counter").text("# " + total_photos_counter);
                    //     }
                    // });
                });
            }
        });

    </script>
@endsection

