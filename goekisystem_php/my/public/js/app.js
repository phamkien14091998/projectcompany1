$(document).ready(function () {
    $(function () {
        $('#datepicker').datepicker({
            format: "yyyy年mm月dd日",
            language: 'ja',
            autoclose: true,
        }).datepicker("setDate", "-1d");
    });

    $(function () {
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
        });
    });
// 月別
    $(function () {
        $('.app-datepicker').datepicker({
            format: "yyyy-mm-dd",
            language: 'ja',
            minViewMode: 1,
            setDate: new Date(),
        });
    });

    $(document).on('change', '.area-girl', function () {
        var client_cd = $('.area-girl :selected').val();
        $.ajax({
            method: 'POST',
            url: '/recommend/getListGirl',
            data: {"_token": laravel_token, client_cd: client_cd},
            success: function (res) {
                if (res) {
                    $('.list-girl').html(res);
                }
            },
            error: function (res) {
                console.log(res);
            }
        });
    });

    $(document).on('click', '.pick-user', function () {
        var user_cd = $(this).attr('data-user');
        var tel_user = $(this).attr('tel-user');
        var all_tr = $('tr');
        $.ajax({
            method: 'POST',
            url: '/recommend/info_user',
            data: {"_token": laravel_token, user_cd: user_cd, tel_user: tel_user},
            success: function (res) {
                if (res) {
                    $('.data-user').html(res);
                }
            },
            error: function (res) {
                console.log(res);
            }
        });
        all_tr.removeClass('selected');
        $(this).closest('tr').addClass('selected');
    });

    $(document).on('click', '.pick-staff', function () {
        var operator_id = $(this).attr('operator_id');
        var all_tr = $('tr');
        $.ajax({
            method: 'POST',
            url: '/operator/list_staff',
            data: {"_token": laravel_token, operator_id: operator_id},
            success: function (res) {
                if (res) {
                    $('#user-list').html(res);
                }
            },
            error: function (res) {
                console.log(res);
            }
        });
        all_tr.removeClass('selected');
        $(this).closest('tr').addClass('selected');
    });


//home

    $(function () {
        setTimeout(function () {
            $(".alert ").fadeOut('slow');
        }, 5000);
    });
});