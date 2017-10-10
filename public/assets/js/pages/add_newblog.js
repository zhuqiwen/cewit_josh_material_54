$(document).ready(function() {
    $.material.init();
    $('.textarea').summernote({
        placeholder: 'write content here...',
        fontNames: ['Lato', 'Arial', 'Courier New'],

    });
    $('.note-link-url').on('keyup', function() {
        if($('.note-link-text').val() != '') {
            $('.note-link-btn').attr('disabled', false).removeClass('disabled');
        }
    });
$("#category").select2({
    theme: "bootstrap"
});
    $("#selecttag").select2({
        tags: true,
        tokenSeparators: [',', ' '],
        theme: "bootstrap",
        width:"100%",
        placeholder:"tags"
    });
    $(".fileupload").fileinput();
});