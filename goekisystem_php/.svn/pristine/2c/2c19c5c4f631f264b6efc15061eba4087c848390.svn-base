$(document).ready(function(){
    $('#question1').change(function(){
        var val = $(this).children('option:selected').val();
        if(val == 4 || val == 5 || val == 6){
            $('#box_cmt_1').show();
        }
        else{
            $("#box_cmt_1").hide();
        }
    })
    $('#question2').change(function(){
        var val = $(this).children('option:selected').val();
        if(val == 1){
            $('#box_cmt_2').hide();
        }
        else{
            $('#box_cmt_2').show();
        }
    })
    $('#question3').change(function(){
        var val = $(this).children('option:selected').val();
        if(val == 3){
            $('#box_cmt_3').show();
        }
        else{
            $("#box_cmt_3").hide();
        }
    })
    $('#question4').change(function(){
        var val = $(this).children('option:selected').val();
        if(val == 1 || val == 2){
            $('#box_cmt_4').hide();
        }
        else{
            $('#box_cmt_4').show();
        }
    })
    $('#update').click(function(e){
        e.preventDefault();
        if(confirm('データを更新してよろしいでしょうか？')){
            var report_id = $("#report_id").val();
            var answer_1 = $("#question1").val();
            var answer_2 = $("#question2").val();
            var answer_3 = $("#question3").val();
            var answer_4 = $("#question4").val();
            var cmt_1 = '';
            var cmt_2 = '';
            var cmt_3 = '';
            var cmt_4 = '';
            var _token = $("#token").val();
            if(answer_1 == 4 || answer_1 == 5 || answer_1 == 6){
                cmt_1 = $("#cmt_question1").val();
                cmt_1 = cmt_1.trim();
            }
            if(answer_2 == 2 || answer_2 == 3){
                cmt_2 = $("#cmt_question2").val();
                cmt_2 = cmt_2.trim();
            }
            if(answer_3 == 3){
                cmt_3 = $("#cmt_question3").val();
                cmt_3 = cmt_3.trim();
            }
            if(answer_4 == 3 || answer_4 == 4){
                cmt_4 = $("#cmt_question4").val();
                cmt_4 = cmt_4.trim();
            }
            $.ajax({
                url: "../handling-edit/" + report_id,
                type: "post",
                data:{
                    problems_old: answer_1,
                    keep_contact_old: answer_2,
                    unpleasant : answer_3,
                    easy_understand: answer_4,
                    cmt_problems_old: cmt_1,
                    cmt_keep_contact_old: cmt_2,
                    cmt_questions_use_old: cmt_3,
                    cmt_trouble_customer_old: cmt_4,
                    _token:_token
                },
                success: function(result){
                    if(result.hasOwnProperty('status') && result['status'] == 'success'){
                        alert("データの更新が成功しました。");
                        location.reload();
                    }
                    else{
                        alert("データの更新が失敗しました。")
                    }
                }
            })
        }
    })
})
