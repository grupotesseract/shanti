var canvas = $("#canvas"),
  context = canvas.get(0).getContext("2d"),
  $result = $('#result');

$('#fileInput').on('change', function () {
  if (this.files && this.files[0]) {
    if (this.files[0].type.match(/^image\//)) {
      var reader = new FileReader();

      reader.onload = function (evt) {
        var img = new Image();

        img.onload = function () {
          context.canvas.height = img.height;
          context.canvas.width = img.width;
          context.drawImage(img, 0, 0);

          var cropper = canvas.cropper({
            aspectRatio: 16 / 9
          });

          $('#btnCrop').click(function () {
            // Get a string base 64 data url
            // var croppedImageDataURL = canvas.cropper('getCroppedCanvas').toDataURL("image/png");
            // $result.append($('<img>').attr('src', croppedImageDataURL));

            patchUrl = document.getElementById("patchUrl");

            console.log(patchUrl.textContent);

            var croppedImageDataURL = canvas.cropper('getCroppedCanvas').toBlob(function (blob) {
              console.log('im here');

              var formData = new FormData();

              formData.append('croppedImage', blob);

              $.ajax(patchUrl, {
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function () {
                  console.log('Upload success');
                },
                error: function () {
                  console.log('Upload error');
                }
              });
            });
          });

          $('#btnRestore').click(function () {
            canvas.cropper('reset');
            $result.empty();
          });
        };

        img.src = evt.target.result;
      };

      reader.readAsDataURL(this.files[0]);
    }

    else {
      alert("Tipo invalido! Por favor, selecione um arquivo do tipo imagem.");
    }
  }
  
  else {
    alert('Nenhum arquivo selecionado.');
  }
});