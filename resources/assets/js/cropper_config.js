window.bindCropperJS = function () {

    var aspectRatio = $('#aspectRatio').val();
    var formID = $('#formID').val();
    var previewID = $('#previewID').val();

    $('#btnStartCrop').on('click', function() {
        initCropper(previewID, aspectRatio);
    });

    $('#btnCancelCrop').on('click', function() {
        destroyCropper(previewID);
    });

    $('#btnConfirmCrop').on('click', function() {
        swal({
            title: 'Carregando...',
            html: '<br><i class="fa fa-spin fa-spinner fa-3x"></i><br><br><br>',
            showConfirmButton: false
        });

        let croppedImage = $(previewID).cropper('getCroppedCanvas').toDataURL('image/jpeg');
        $(formID).find('input[type=file]').remove();
        $(formID).append("<input name='file' type='hidden'/>");
        $(formID).find('input[name=file]').val(croppedImage);
        $(formID).submit();
    });
}

function initCropper(previewID, aspectRatio) {
    $(previewID).cropper({
        aspectRatio: aspectRatio
    });
    $('input[type=file]').hide();
    $('#btnStartCrop').hide();
    $('#btnConfirmCrop').show();
    $('#btnCancelCrop').show();
}

function destroyCropper(previewID) {
    $(previewID).cropper('destroy');
    $('input[type=file]').show();
    $('#btnStartCrop').show();
    $('#btnConfirmCrop').hide();
    $('#btnCancelCrop').hide();
}


$(function () {
    bindCropperJS();
});
