@extends('admin.layouts.app')

@section('title', trans('t.create_post'))


@section('content')
    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.post.index') }}">
            <i class="os-icon os-icon-user-male-circle"></i> {{trans('t.all_posts')}}</a>
    </div>
    <h6 class="element-header">
            {{trans('t.create_post')}}
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
            'route' => 'admin.post.store',
            'enctype' => 'multipart/form-data'
            ]) !!}
            @include('admin.post.form', $row)
        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            var tagsInput = document.querySelector('input[name=tags]'),
                tags = new Tagify(tagsInput, {
                    whitelist : {!! $tagsStr !!}
                });
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
        var photo_counter = 0;
        var imageUpload = new Dropzone("#gallery", { 
            url: '{{route("admin.post.store")}}', 
            paramName: "files",
            autoProcessQueue:false,
            uploadMultiple: true,
            parallelUploads: 40,
            maxFilesize:16,
            maxFiles: 40,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            dictCancelUpload: '{{ trans("t.cancel") }}',
            dictCancelUploadConfirmation: '{{ trans("t.remove_confirm") }}',
            dictRemoveFile : '{{ trans("t.remove") }}',
            dictDefaultMessage: '{{ trans("t.select_images") }}',
            dictFileTooBig: '{{ trans("t.file_size_bigger_than") }} 16',
            init: function(){

                var imageUpload = this;

                $('#loader').hide();
                $("#button").click(function (e) {
                    if(imageUpload.files.length != 0){
                        $('#loader').show();
                        e.preventDefault();
                        imageUpload.processQueue();
                    }
                });

                this.on('sending', function(file, xhr, formData) {
                    var data = $('#createForm').serializeArray();
                    
                    $.each(data, function(key, el) {
                        var value = el.value;
                        if(el.name == 'content'){
                            value = tinyMCE.get('editor').getContent();
                        }
                        formData.append(el.name, value);
                    });
                    formData.append("image", $("input[name=image]")[0].files[0]);
                });

                this.on("success", function(file, responseText) {
                    if (responseText == 'success') {
                        window.location.href = '{{route("admin.post.index")}}';
                    }
                });

            },
            error: function(file, response) {
                if($.type(response) === "string")
                    var message = response; //dropzone sends it's own error messages in string
                else
                    var message = response.message;
                file.previewElement.classList.add("dz-error");
                _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
                _results = [];
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i];
                    _results.push(node.textContent = message);
                }
                return _results;
            },
            success: function(file,done) {
                photo_counter++;
                $("#photoCounter").text( "(" + photo_counter + ")");
            }
        });

    </script>
@endsection

