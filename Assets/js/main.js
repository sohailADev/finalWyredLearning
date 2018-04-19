$(document).ready(function () {


    var $summernote = $('#summernote').summernote({
        height: 500,
        minHeight: null,
        maxHeight: null,
        focus: true,

        placeholder: "Enter Content here ",

        callbacks: {
            onImageUpload: function (files) {
                sendFile($summernote, files[0]);
            },
        }
    });


});