<script src='{{ asset("/assets/admin/tinymce/tinymce.min.js") }}'></script>


<script>

    $(function() {
        tinymce.init({
            language: '{{ app()->getLocale() }}',
            selector: '.editor',
            plugins: 'advlist responsivefilemanager link image imagetools colorpicker textcolor lists preview autolink fullscreen table hr media autolink paste',
            toolbar: 'undo redo | formatselect bold italic underline strikethrough subscript superscript | hr blockquote bullist numlist outdent indent | alignleft aligncenter alignright alignjustify | link image media responsivefilemanager table | removeformat preview fullscreen',
            menubar: false,
            block_formats: 'Paragraph=p;Header 3=h3;Header 4=h4;',
            images_upload_url: '/tinymce/postAcceptor.php',
            images_upload_base_path: '/',
            plugin_preview_width: 800,
            image_caption: true,
            image_description: false,
            // content_css : "/admin/tinymce/skins/lightgray/content.min.css,/admin/tinymce/custom_content.css",
            extended_valid_elements: [
                'table[class=table table-bordered|width=100%]',
                'p',
                // 'span[style]',
            ],
            valid_classes: {
                '*': 'table table-bordered w-100', // Global classes
                table: 'table table-bordered w-100' // Link specific classes
            },
            // valid_elements: "p,span",
            // invalid_elements: "span",
            paste_strip_class_attributes: true,
            external_filemanager_path:"/filemanager/",
            filemanager_title:"Responsive Filemanager" ,
            paste_as_text: true,
            // external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
            // image_dimensions: false
        });

        // tinymce.activeEditor.uploadImages(function(success) {
        //     $.post('ajax/post.php', tinymce.activeEditor.getContent()).done(function() {
        //         console.log("Uploaded images and posted content as an ajax request.");
        //     });
        // });

        // $('iframe[allowfullscreen]').parent().addClass('iframe-wrapper');
    });

</script>