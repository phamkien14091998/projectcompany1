<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 19/10/2018
 * Time: 5:37 CH
 */

?>
<script type="text/javascript">
    $(function(){
        setTimeout(function () {
            $(".alert ").fadeOut('slow');
        }, 5000);
    });
    $(function() {
        // checkbox(iCheck.css,iCheck.読み込み必須)
        $('input').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue',
        });
        // ツールチップ
        $('[data-toggle="tooltip"]').tooltip();

        // セレクト2
        $('.select2').select2({
            language: {
                "noResults": function() {
                    return "見つかりません。";
                }
            },
            escapeMarkup: function(markup) {
                return markup;
            }
        });
    });

    $(document).on('keyup', '#inputTel', function () {
        var tel = $(this).val();
        tel = tel.replace(/-/gi, '');
        tel = tel.replace(/ /gi, '');
        $('#tel_submit').val(tel.trim());
    });
    $(function () {
        console.log(2);
        $('#inputTel').trigger('keyup');
    });

    //franchise
    $(function() {
        // checkbox(iCheck.css,iCheck.読み込み必須)
        $('input').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue'
        });
    });

    //notify
    $(function() {
        // checkbox(iCheck.css,iCheck.読み込み必須)
        $('input').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue',
        });
        // ツールチップ
        $('[data-toggle="tooltip"]').tooltip();

        // セレクト2
        $('.select2').select2({
            language: {
                "noResults": function() {
                    return "見つかりません。";
                }
            },
            escapeMarkup: function(markup) {
                return markup;
            }
        });
    });

    $(document).on('click', '.msg-report', function (e) {
        e.preventDefault();
        $('#modal-report-content #content').html('');
        var content = $(this).parents('.text-center').find('a').attr('content');
        if (content.trim()) {
            $('#modal-report-content #content').html(content);
            $('#modal-report-content').fadeIn('slow');
        }
    });

    $(document).on('click', '#modal_close', function (e) {
        e.preventDefault();
        $('#modal-report-content').fadeOut();
    });

    $(document).on('click', '.update_ng', function(e) {
        e.preventDefault();
        var id = $(this).attr('data-id'),
            keywork = $(this).parents('.row-item').find('input').val(),
            _token = '{{csrf_token()}}';

        if(keywork) {
            $.ajax({
                method: 'post',
                url: '/home/update_ngwork/' + id,
                data: {keywork: keywork, _token: _token},
                success:function(responve) {
                    alert(responve.msg);
                    location.reload();
                }
            });
        }
    });
</script>

@if(Request::is('home') || Request::is('/'))
    <script type="text/javascript">
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('timmer').innerHTML =
                h + ":" + m;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
        startTime();
    </script>
@endif
@if(Request::is('franchise') || Request::is('franchise/*'))
    <script type="text/javascript">
        $(document).ready(function () {
           $('#select-area').select2();
        });

        $(document).on('click', '.del-img', function () {
           var id = $(this).attr('data-id');
           $('#'+id).val('');
           alert('画像が削除されました');
        });
    </script>
@endif
