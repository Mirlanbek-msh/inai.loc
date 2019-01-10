@extends('admin.layouts.app')

@section('title', $row->title )

@section('content')

    <div class="element-actions">
        <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.post.index') }}">
            <i class="os-icon os-icon-user-male-circle"></i> Все посты
        </a>
    </div>
    <h6 class="element-header">
        {{$row->title }}
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
                'route' => ['admin.post.update', $row],
                'method' => 'PUT',
                'enctype' => 'multipart/form-data'
            ]) !!}
        @include('admin.post.form', $row)
        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.directs').select2();
            
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
            url: '{{route("admin.post.update", $row)}}', 
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

                $.get('/admin/post/gallery/{{$row->id}}', function(data) {
                    $.each(data.images, function (key, value) {
                        var file = {name: value.original, size: value.size, key: value.key};
                        imageUpload.options.addedfile.call(imageUpload, file);
                        imageUpload.options.thumbnail.call(imageUpload, file, '/' + value.server);
                        imageUpload.emit("complete", file);
                        photo_counter++;
                        $("#photoCounter").text( "(" + photo_counter + ")");
                    });
                });

                this.on('sending', function(file, xhr, formData) {
                    var data = $('#editForm').serializeArray();
                    
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

                this.on("removedfile", function(file) {
                    if(!file.key) return;
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'POST',
                        url: '/{{$lang}}/admin/post/gallery/{{$row->id}}/delete/'+file.key,
                        data: {
                            key: file.key
                        },
                        dataType: 'html',
                        success: function(data){
                            if(data == 'success')
                            {
                                photo_counter--;
                                $("#photoCounter").text( "(" + photo_counter + ")");
                            }
                        }
                    });
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

