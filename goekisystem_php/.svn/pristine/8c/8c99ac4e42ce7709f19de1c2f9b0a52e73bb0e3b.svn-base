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

    $('.type-girl').on('change',function () {
        $('#form-sort').submit();
    });

    $('.change_client_cd').on('change',function () {
        $('#form-change').submit();
    });

    //upload img
    function readURL(input,id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.img_contain_'+id).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#one").change(function(){ //button
        readURL(this,"one");
        $('.img_contain_one').css('visibility','visible'); // show img
    });

    $("#two").change(function(){ //button
        readURL(this,"two");
        $('.img_contain_two').css('visibility','visible'); // show img
    });

    $("#three").change(function(){ //button
        readURL(this,"three");
        $('.img_contain_three').css('visibility','visible'); // show img
    });

    $("#four").change(function(){ //button
        readURL(this,"four");
        $('.img_contain_four').css('visibility','visible'); // show img
    });

    $("#five").change(function(){ //button
        readURL(this,"five");
        $('.img_contain_five').css('visibility','visible'); // show img
    });
//

    $("#updateImgArea").change(function(){ //button
        readURL(this,"one");
        $('.img_contain_area').css('visibility','visible'); // show img
    });



    $(document).on('click', '.pick-user', function () {
        var diary_cd = $(this).attr('data-user');
        var id = $(this).attr('girl_cd');
        var all_tr = $('tr');
        $.ajax({
            method: 'GET',
            url: '/home/girlContents',
            dataType: 'html',
            data: {diary_cd: diary_cd, id: id},
            success: function (res) {
                if (res) {
                    $('.contents-girl').html(res);
                }
            },
            error: function (res) {
                console.log(res);
            }
        });
        $.ajax({
            method: 'GET',
            url: '/home/girlShowImg',
            dataType: 'html',
            data: {diary_cd: diary_cd, id: id},
            success: function (res) {
                if (res) {
                    $('.img-girl').html(res);
                }
            },
            error: function (res) {
                console.log(res);
            }
        });
        all_tr.removeClass('selected');
        $(this).closest('tr').addClass('selected');
    });

    $(document).on('click', '.pick-girl', function () {
        var id = $(this).attr('id-girl');
        var girl_cd = $(this).attr('girl_cd');
        var all_tr = $('tr');
        $.ajax({
            method: 'GET',
            url: '/home/girlInfo',
            dataType: 'html',
            data: {id: id, girl_cd: girl_cd},
            success: function (res) {
                if (res) {
                    $('.info-girl').html(res);
                }
            },
            error: function (res) {
                console.log(res);
            }
        });
        all_tr.removeClass('selected');
        $(this).closest('tr').addClass('selected');
    });

    $(document).on('click', '.option_detail', function () {
        var id = $(this).attr('data_id');
        $.ajax({
            method: 'POST',
            url: '/option/detail/' + id,
            data: {"_token": laravel_token, id: id},
            success: function (res) {
                if (res) {
                    $('.modal-body').html(res);
                }
            },
            error: function (res) {
                console.log(res);
            }
        });
    });

    $(document).on('click', '.option_name_detail', function () {
        var id = $(this).attr('data-id-name');
        $.ajax({
            method: 'POST',
            url: '/option/detail_name/' + id,
            data: {"_token": laravel_token, id: id},
            success: function (res) {
                if (res) {
                    $('.modal-body').html(res);
                }
            },
            error: function (res) {
                console.log(res);
            }
        });
    });

    $(document).on('click', '.option-add', function () {
        $.ajax({
            method: 'POST',
            url: '/option/addForm',
            data: {"_token": laravel_token},
            success: function (res) {
                if (res) {
                    $('.modal-body').html(res);
                }
            },
            error: function (res) {
                console.log(res);
            }
        });
    });

    $(document).on('click', '.option-add-name', function () {
        $.ajax({
            method: 'POST',
            url: '/option/addFormName',
            data: {"_token": laravel_token},
            success: function (res) {
                if (res) {
                    $('.modal-body').html(res);
                }
            },
            error: function (res) {
                console.log(res);
            }
        });
    });

    $(document).on('click', '#quit_flg_1', function () {
        var d = document.getElementById('hidden_quit');
        if (d.style.display == 'block'){
            d.style.display = 'none';
        }else {
            d.style.display = 'block';
        }
    });

    $(document).on('click', '#status_flg', function () {
        var d = document.getElementById('list_girl_name');
        if (d.style.display == 'none'){
            d.style.display = 'block';
        }else {
            d.style.display = 'none';
        }
    });

    $('.form_img').on('submit',function(e) {
        e.preventDefault();
        var form_data= new FormData(this);
        $.ajax({
            url: '/home/update_img',
            type: "post",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            success: function (res) {
                location.reload();
            },
            error: function (response) {
                alert("画像のサイズが大きすぎです。");
            }
        })
    });

    $('.form_img_area').on('submit',function(e) {
        e.preventDefault();
        var form_data= new FormData(this);
        $.ajax({
            url: '/imgArea/update',
            type: "post",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            success: function (res) {
                // location.reload();
            },
            error: function (response) {
                alert("画像のサイズが大きすぎです。");
            }
        })
    });


    $(document).on('click',  '#syukin_flg1', function () {
        var a = document.getElementById('show_text1');
        if (a.style.display === 'none') {
            a.style.display = 'block';
        } else {
            a.style.display = 'none';
        }
    });
    $(document).on('click',  '#syukin_flg2', function () {
        var b = document.getElementById('show_text2');
        if (b.style.display === 'none') {
            b.style.display = 'block';
        } else {
            b.style.display = 'none';
        }
    });
    $(document).on('click',  '#syukin_flg3', function () {
        var c = document.getElementById('show_text3');
        if (c.style.display === 'none') {
            c.style.display = 'block';
        } else {
            c.style.display = 'none';
        }
    });
    $(document).on('click',  '#syukin_flg4', function () {
        var d = document.getElementById('show_text4');
        if (d.style.display === 'none') {
            d.style.display = 'block';
        } else {
            d.style.display = 'none';
        }
    });
    $(document).on('click',  '#syukin_flg5', function () {
        var e = document.getElementById('show_text5');
        if (e.style.display === 'none') {
            e.style.display = 'block';
        } else {
            e.style.display = 'none';
        }
    });
    $(document).on('click',  '#syukin_flg6', function () {
        var f = document.getElementById('show_text6');
        if (f.style.display === 'none') {
            f.style.display = 'block';
        } else {
            f.style.display = 'none';
        }
    });
    $(document).on('click',  '#syukin_flg7', function () {
        var g = document.getElementById('show_text7');
        if (g.style.display === 'none') {
            g.style.display = 'block';
        } else {
            g.style.display = 'none';
        }
    });

//home

    $(function () {
        setTimeout(function () {
            $(".alert ").fadeOut('slow');
        }, 5000);
    });
    $(document).ready(function () {
        var match=$('#shift_sort').attr('name');
        if(match != "0"){
            $("#shift_sort li:nth-child("+ match +")").css("background-color","aquamarine");
        }

        //your code here
        $('#update-bt').on("click",function () {
            var data_update = new Array();
            var error=[];
            for(var count=2;count<=8;count++) {
                var today = new Date();
                var day = new Date(today.getTime() + (24 * 60 * 60 * 1000) * (count - 2));
                var dd = day.getDate();
                var mm = day.getMonth() + 1;
                var yyyy = day.getFullYear();
                if (dd < 10) {
                    dd = '0' + dd;
                }
                if (mm < 10) {
                    mm = '0' + mm;
                }
                var day_compare = yyyy + '-' + mm + '-' + dd;
                data_update[count * 10] = day_compare;
                //data_update[day_compare] = new Array();
                if ($(".hidden-content:nth-child(" + count + ") .contain-option").css('display') == "none") {
                    $(".hidden-content:nth-child(" + count + ") #start-hour").val("00:00");
                    $(".hidden-content:nth-child(" + count + ") #end-hour").val("00:00");
                    $(".hidden-content:nth-child(" + count + ") #start-hour2 ").val("00:00");
                    $(".hidden-content:nth-child(" + count + ") #end-hour2 ").val("00:00");
                }
                if ($(".hidden-content:nth-child(" + count + ") .overnight-bt-one").is(':checked')) {
                    data_update[count * 10 + 5] = 1;
                } else {
                    data_update[count * 10 + 5] = 0;
                }
                if ($(".hidden-content:nth-child(" + count + ") .overnight-bt-two").is(':checked')) {
                    data_update[count * 10 + 6] = 1;
                } else {
                    data_update[count * 10 + 6] = 0;
                }
                data_update[count * 10 + 1] = $(".hidden-content:nth-child(" + count + ") #start-hour").val();
                data_update[count * 10 + 2] = $(".hidden-content:nth-child(" + count + ") #end-hour").val();
                data_update[count * 10 + 3] = $(".hidden-content:nth-child(" + count + ") #start-hour2 ").val();
                data_update[count * 10 + 4] = $(".hidden-content:nth-child(" + count + ") #end-hour2 ").val();
                var yesterday = count-1 ;
                var previous_start = $(".hidden-content:nth-child(" + yesterday + ") #start-hour").val();
                var previous_end = $(".hidden-content:nth-child(" + yesterday + ") #end-hour").val();
                var previous_start2 = $(".hidden-content:nth-child(" + yesterday + ") #start-hour2 ").val();
                var previous_end2 = $(".hidden-content:nth-child(" + yesterday + ") #end-hour2 ").val();

                var tomorrow = count +1;
                var next_start = $(".hidden-content:nth-child(" + tomorrow + ") #start-hour").val();
                var next_end = $(".hidden-content:nth-child(" + tomorrow + ") #end-hour").val();
                var next_start2 = $(".hidden-content:nth-child(" + tomorrow + ") #start-hour2 ").val();
                var next_end2 = $(".hidden-content:nth-child(" + tomorrow + ") #end-hour2 ").val();


                data_update[count * 10 + 1] = $(".hidden-content:nth-child(" + count + ") #start-hour").val();
                data_update[count * 10 + 2] = $(".hidden-content:nth-child(" + count + ") #end-hour").val();
                data_update[count * 10 + 3] = $(".hidden-content:nth-child(" + count + ") #start-hour2 ").val();
                data_update[count * 10 + 4] = $(".hidden-content:nth-child(" + count + ") #end-hour2 ").val();

                //check 2 ca lien tiep
                var check_error=1;
                if((previous_end)&&(data_update[count * 10 + 1]=="00:00") && (previous_end=="24:00")){
                    if(parseTime(previous_end)-parseTime(previous_start) + parseTime(data_update[count * 10 + 2])>=2){
                        check_error=0;
                    }
                    else{
                        check_error=1;
                    }
                }

                var check_error2=1;
                if((previous_end2)&&(data_update[count * 10 + 3]=="00:00") && (previous_end2=="24:00")){
                    if(parseTime(previous_end2)-parseTime(previous_start2) + parseTime(data_update[count * 10 + 4])>=2){
                        check_error=0;
                    }
                    else{
                        check_error=1;
                    }
                }

                if((next_start)&&(data_update[count * 10 + 2]=="24:00") && (next_start=="00:00")){
                    if(parseTime(data_update[count * 10 + 2])-parseTime(data_update[count * 10 + 1]) + parseTime(next_end)>=2){
                        check_error=0;
                    }
                    else{
                        check_error=1;
                    }
                }

                if((next_end2)&&(data_update[count * 10 + 4]=="24:00") && (next_start2=="00:00")){
                    if(parseTime(data_update[count * 10 + 4])-parseTime(data_update[count * 10 + 3]) + parseTime(next_end2)>=2){
                        check_error=0;
                    }
                    else{
                        check_error=1;
                    }
                }

                // alert(check_error);
                // alert(check_error2);
                //
                error[count] = checkSchedule(data_update[count * 10 + 1], data_update[count * 10 + 2], data_update[count * 10 + 3], data_update[count * 10 + 4],check_error,check_error2);
                if($(".hidden-content:nth-child(" + count + ") #start-hour").val()=="00:00" && $(".hidden-content:nth-child(" + count + ") #end-hour").val()=="00:00" && $(".hidden-content:nth-child(" + count + ") #start-hour2").val()=="00:00" && $(".hidden-content:nth-child(" + count + ") #end-hour2").val()=="00:00"){
                    if($(".hidden-content:nth-child(" + count + ") .bt-flg").is(':checked')){
                        error[count]=1;
                    }
                }
                if($(".hidden-content:nth-child(" + count + ") #start-hour2").val()=="00:00" && $(".hidden-content:nth-child(" + count + ") #end-hour2").val()=="00:00"){
                    if($(".hidden-content:nth-child(" + count + ") .overnight-bt-two").is(':checked')){
                        error[count]=1;
                    }
                }

            }
            if(error[2]==0 && error[3]==0 &&error[4]==0 &&error[5]==0 &&error[6]==0 &&error[7]==0 &&error[8]==0) {
                $.ajax({
                    method: 'get',
                    url: '/shift/updateInfo',
                    data: {'girl_cd': girl_cd, "data_update": data_update, "client_cd": client_cd},
                    success: function (res) {
                        location.href="{{url('shift')}}";
                    }
                });
            }
            else{
                if(error[2]==3 || error[3]==3 ||error[4]==3 ||error[5]==3 ||error[6]==3 ||error[7]==3 ||error[8]==3){
                    alert("2時間以上の登録をお願いします。");
                }
                else {
                    alert("時間帯が重複しています。別の時間帯を選択してください。");
                }
                for(var i=2; i<=8;i++){
                    if(error[i]==1 || error[i]==3){
                        $(".hidden-content:nth-child(" + i + ") .day").css("color","red");
                    }
                    if(error[i]==0){
                        $(".hidden-content:nth-child(" + i + ") .day").css("color","black");
                    }
                }
            }
        })
    });
    function checkSchedule(time1,time2,time3,time4,check1,check2) {
        var error;
        if((time2<=time1 && (time2 !="00:00" || time1 !="00:00")) || (time4 <= time3 && (time4 !="00:00" || time3 !="00:00"))){
            error=1;
            return error;
        }
        if(((time1 <= time3 && time3 <= time2)||(time1 <= time4 && time4 <= time2)||(time3 <= time1 && time1 <= time4)||(time3 <= time2 && time2 <= time4)) && ((time3 !="00:00") || (time4 != "00:00")) && ((time1 !="00:00") || (time2 != "00:00"))){
            error=1;
            return error;
        }
        if(((parseTime(time2) -parseTime(time1) <2) && (time2 !="00:00" || time1 !="00:00") && check1==1) || ((parseTime(time4) -parseTime(time3) <2)) && (time4 !="00:00" || time3 !="00:00") && check2==1) {
            if((parseTime(time2) -parseTime(time1)==0 && parseTime(time2)!= 0 )||(parseTime(time4) -parseTime(time3)==0 && parseTime(time4) !=0)){
                error = 1;
                return error;
            }
            error=3;
            return error;
        }

        error=0;
        return error;
    }


    function parseTime(s) {

        var hh = s.slice(0,2);
        var mm = s.slice(3,5);
        var result = (+hh) + (mm/60);
        return result;
    }
});