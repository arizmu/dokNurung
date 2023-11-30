<style>
    .tox-notifications-container {
        display: none !important;
    }

    #myeditorinstance {
        max-width: 32rem;
        margin: auto;
        height: 250pt;
    }
</style>


<script src="https://cdn.tiny.cloud/1/jvlmkju94fxjho876ntakcowgwnvzz9vq23mc99pxuw398pa/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>


<script>
    var editor_config = {
        path_absolute: "/",
        selector: 'textarea#myeditorinstance',
        relative_urls: false,
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table directionality",
            "emoticons template paste textpattern codesample"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        // height : 
        file_picker_callback: function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                'body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document
                .getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
            if (meta.filetype == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.openUrl({
                url: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no",
                onMessage: (api, message) => {
                    callback(message.content);
                }
            });
        }
    };

    tinymce.init(editor_config);
</script>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/components/head/tinymce.blade.php ENDPATH**/ ?>