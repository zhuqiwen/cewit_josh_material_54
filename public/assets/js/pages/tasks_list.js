//escape text so that javascript can not be executed
var entityMap = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#39;',
    '/': '&#x2F;',
    '`': '&#x60;',
    '=': '&#x3D;'
};

function escapeHtml (string) {
    return String(string).replace(/[&<>"'`=\/]/g, function (s) {
        return entityMap[s];
    });
}
/**Created by Jyostna on 26-07-2016.*/
$(document).ready(function () {
    $.material.init();
    var deleteButton = " <a href='' class='tododelete redcolor'><i class='material-icons'>delete</i></a>";
    var striks = "<span id='striks'> |  </span>";
    var editButton = "<a href='' class='todoedit'><i class='material-icons item_edit'>edit</i></a>";
    var checkBox = "<label><input type='checkbox' class='striked ' autocomplete='off' /></label>";
    var twoButtons = "<div class='col-md-4 col-sm-4 col-xs-4  pull-right showbtns todoitembtns'>" + editButton + striks + deleteButton + "</div>";
    var oneButton = "<div class='col-md-4 col-sm-4 col-xs-4  pull-right showbtns todoitembtns'>" + deleteButton + "</div>";
    $("form#main_input_box").submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "../admin/task/create",
            data: $("form#main_input_box").serialize(),
            success: function (id) {
                var count = $('#taskcount').text();
                count = parseInt(count) + 1;
                $(".list_of_items").prepend("<div class='todolist_list showactions list1' id='" + id + "'>  " + "<div class='col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1'> <div class='todoitemcheck checkbox'>" + checkBox + "</div>" + "<div class='todotext todoitemjs'>" + $("#task_description").val() + " </div> <span class='label label-default'>" + $("#task_deadline").val() + "</span></div>" + twoButtons);
                $.material.checkbox();
                $('#taskcount').text(count);
                $("#task_description").val('');
                $("#task_deadline").val('');
                $(".datepicker").data('DateTimePicker').date(moment()).date(null);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.responseText);
            }
        });

    });

    $.ajax({
        type: "GET",
        url: "../admin/task/data",
        success: function (result) {
            $.each(result, function (i, item) {
                $('.list_of_items').append("<div class='todolist_list showactions list1' id='" + item.id + "'>   " +
                    "<div class='col-md-8 col-sm-8 col-xs-8 nopadmar custom_textbox1'> <div class='todoitemcheck checkbox'>" +  "<label><input type='checkbox' class='striked ' autocomplete='off'  " + ((item.finished == 1) ? "checked" : "") + "/></label>" +
                    "</div> <div class='todotext " + ((item.finished == 1) ? "strikethrough" : "") + " todoitemjs'>" + escapeHtml(item.task_description) + "</div> <span class='label label-default'>" +
                    item.task_deadline + "</span> </div>" + ((item.finished == 1) ? oneButton : twoButtons));
                $.material.checkbox();
            });
            $('#taskcount').text(result.length);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.responseText);
        }
    });

});

$(document).on('click', '.tododelete', function (e) {
    e.preventDefault();
    var id = $(this).parent().parent().attr('id');
    var count = $('#taskcount').text();
    count = parseInt(count) - 1;
    $(this).closest('.todolist_list').hide("slow", function () {
        $(this).remove();
    });
    $('#taskcount').text(count);
    $.ajax({
        type: "POST",
        url: "../admin/task/" + id + "/delete",
        data: {_token: $('meta[name="_token"]').attr('content')},
        success: function (id) {

        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.responseText);
        }

    });
});
$(document).on('click', '.striked', function (e) {
    var id = $(this).closest('.todolist_list').attr('id');
    var hasClass = $(this).closest('.todolist_list').find('.todotext').hasClass('strikethrough');
    var hasEdit = $(this).closest('.todolist_list').find('.todoedit').hasClass('todoedit');
    var striks = "<span id='striks'> |  </span>";
    var editButton = "<a href='' class='todoedit'><i class='material-icons item_edit'>edit</i></a>";

    $.ajax({
        type: "POST",
        url: "../admin/task/" + id + "/edit",
        data: {_token: $('meta[name="_token"]').attr('content'), 'finished': ((hasClass) ? 0 : 1)}
    });

    $(this).closest('.todolist_list').find('.todotext').toggleClass('strikethrough');
    if (!hasClass) {
        $(this).closest('.todolist_list').find('.todoedit').hide();
        $(this).closest('.todolist_list').find('#striks').hide();
    } else {
        $(this).closest('.todolist_list').find('.todoedit').show();
        $(this).closest('.todolist_list').find('#striks').show();
    }
    if (!hasEdit) {
        $(this).closest('.todolist_list').find('.tododelete').before(editButton + striks);
    }
});

$(document).on('click', '.todoedit .item_edit', function (e) {
    e.preventDefault();
    var text = '';
    text = $(this).closest('.todolist_list').find('.todotext').text();
    text = "<input type='text' name='text' class='form-control' value='" + text + "' onkeypress='return event.keyCode != 13;' />";
    $(this).closest('.todolist_list').find('.todotext').html(text);
    $(this).removeClass('material-icons edit').text('edit').addClass('material-icons save').text('done');
    $(this).closest('.todolist_list').find('.todoitemcheck').hide();
    $(this).removeClass('item_edit');
});

$(document).on('click', '.todoedit .save', function (e) {
    e.preventDefault();
    var text1 = $(this).closest('.todolist_list').find("input[type='text'][name='text']").val();
    $(this).closest('.todolist_list').find('.todoitemcheck').show();
    if (text1 === '') {
        alert('Come on! you can\'t create a todo without title');
        $(this).closest('.todolist_list').find("input[type='text'][name='text']").focus();
        return;
    }
    var id = $(this).closest('.todolist_list').attr('id');
    $.ajax({
        type: "POST",
        url: "../admin/task/" + id + "/edit",
        data: {_token: $('meta[name="_token"]').attr('content'), 'task_description': text1}
    });
    $(this).closest('.todolist_list').find('.todotext').html(text1);
    $(this).removeClass('material-icons hidden-xs').text('done').addClass('material-icons').text('edit');
    $(this).removeClass('save').addClass('item_edit');
});
$('#task_deadline').keydown(function() {
    return false;
});