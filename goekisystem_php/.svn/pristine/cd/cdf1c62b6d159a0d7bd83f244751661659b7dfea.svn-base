<?php
//print_r($data);die();
?>
<!- Modal Header -->
<div class="modal-header" style="padding: 5px;">
    <button type="button" class="close" data-dismiss="modal" style="color: black">×</button>
</div>

<form action="{{url('option/add')}}" method="post" id="update-admin">
    <div class="col-md-10 col-md-offset-1">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="option_cd" value="3">

        <div class="row" style="margin-bottom: 30px;">
            <label for="" class="col-md-4 text-right">項目:</label>
            <input class="text-left col-md-8" type="text" name="option_name" value="">
        </div>
        <div class="row" style="margin-bottom: 30px;">
            <input type="submit" class="btn btn-secondary" value="更新">
        </div>
    </div>
</form>
