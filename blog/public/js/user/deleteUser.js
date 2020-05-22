$(document).ready(function () {
    $("#addUser").submit(function (e) {
        e.preventDefault();

        var url = $(this).attr('data-url');

        $.ajax({
            type : 'post',
            url: url,
            data: {
                name: $("#name").val(),
                email: $("#email").val(),
                password: $("#password").val(),
                course: $("#course").val(),
            },
            success: function(response) {
                toastr.success('Add Successfully')
                $("#add").modal("hide");
                setTimeout(function () {
                    window.location.reload();
                },2000);
            },
            error: function(jqXHR, textStatus, errorThrown) {

            },
        });
    });

    $(".btn-delete").click(function () {
        var url = $(this).attr('data-url');
        if (confirm('Ban co muon xoa khong')) {
            $.ajax({
                type: 'delete',
                url: url,
                success: function(response) {
                    toastr.success('Delete successfully')
                    setTimeout(function () {
                        window.location.reload();
                    },1000);
                },
                error: function(jqXHR, textStatus, errorThrown) {

                },
            });
        }
    });

    $(".btn-show").click(function () {
        var url = $(this).attr('data-url');
        $.ajax({
            type: 'get',
            url: url,
            success: function(response) {
                console.log(response)
                $("h1#name").text(response.user.name)
                $("p#email").text(response.user.email)
                $("p#course").text(response.user.course)
            },
            error: function(jqXHR, textStatus, errorThrown) {

            },
        });
    });

    $(".btn-edit").click(function () {
        let id = $(this).data('id');

        $.ajax({
            url : 'users/'+id+'/edit',
            type: 'get',

            success: function($users) {
                console.log($users)
                $("h1#name1").text($users.name);
                $(".email1").val($users.email);
                $(".course1").val($users.course);
            },
        });
    });
});
