$("textarea.editor-cls").wysihtml5();
$("#summernote").summernote({
    placeholder: 'write content here...',
    fontNames: ['Lato', 'Arial', 'Courier New'],
});
$('.note-link-url').on('keyup', function() {
    if($('.note-link-text').val() != '') {
        $('.note-link-btn').attr('disabled', false).removeClass('disabled');
    }
});
$('textarea#split_editor').trumbowyg({
    btnsDef: {
        // Customizables dropdowns
        image: {
            dropdown: ['insertImage', 'upload', 'base64', 'noembed'],
            ico: 'insertImage'
        }
    },
    btns: [
        ['viewHTML'],
        ['undo', 'redo'],
        ['formatting'],
        'btnGrp-design',
        ['link'],
        ['image'],
        'btnGrp-justify',
        'btnGrp-lists',
        ['foreColor', 'backColor'],
        ['preformatted'],
        ['horizontalRule'],
        ['fullscreen']
    ],
    plugins: {
        upload: {
            serverPath: 'https://api.imgur.com/3/image',
            fileFieldName: 'image',
            headers: {
                'Authorization': 'Client-ID 9e57cb1c4791cea'
            },
            urlPropertyName: 'data.link'
        }
    }

});
jQuery.trumbowyg.langs.fr = {
    _dir: "ltr", // This line is optionnal, but usefull to override the `dir` option

    bold: "Gras",
    close: "Fermer"
};
