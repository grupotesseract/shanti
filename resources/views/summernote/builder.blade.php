
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="/summernote/summernote-custom.js"></script>
<script src="/summernote/summernote-pt-BR.min.js"></script>

<style>
    .note-editable p {
        font-family: "Merriweather", serif;
        font-size: 16px;
        color: #606060;
    }
    .note-editable h5 {
        font-family: "Merriweather", serif;
        color: #74283C;
        font-size: 20px;
    }

</style>
<script>
    $(document).ready(function() {
      $(".{{ $textAreaClass }}").summernote({
         minHeight: 200,
         lang: 'pt-BR',
         fontSizes: ['12', '14', '18', '20', '22', '24', '28', '36', '48'],
         toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['format', ['style']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'paragraph']],
            ['height', ['height']],
            ['misc', ['fullscreen', 'undo', 'redo']]
          ]
      });
    });

</script>



