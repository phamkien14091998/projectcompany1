<?php
//print_r($data);die();
if (isset($data['item']) && $data['item']){
    foreach ($data['item'] as $item){
        if ($_GET['id'] == $item['id']){
            if (!empty($item['email'])){
                $mail = $item['email'];
            }else{
                $mail = ' ';
            }
            if (!empty($item['editemail'])){
                $edit_mail = $item['editemail'];
            }else{
                $edit_mail = ' ';
            }
            if (!empty($item['subject'])){
                $subject = $item['subject'];
            }else{
                $subject = ' ';
            }
            if (!empty($item['memo'])){
                $memo = $item['memo'];
            }else{
                $memo = ' ';
            }
    echo <<<HTML
<div class="box-body ">
    <input type="hidden" name="siteid" value="{$_GET['id']}">
    <input type="hidden" name="girl_cd" value="{$_GET['girl_cd']}">

    <div class="form-group col-xs-12">
        <label class="control-label">媒体名:  {$item['name']}</label>
    </div>
    <div class="form-group col-xs-12">
        <label for="inputName" class="control-label">宛先(To):</label>
        <input type="text" class="form-control input-lg" name="email" value={$mail}>
    </div>
    <div class="form-group col-xs-12">
        <label for="inputName" class="control-label">件名(Title)</label>
        <input type="text" class="form-control input-lg" name="subject" value={$subject}>
    </div>
    <div class="form-group col-xs-12">
        <label for="inputMsg" class="control-label">備考欄</label>
        <textarea class="form-control input-lg" name="noname" style="height: 300px" disabled>{$memo}</textarea>
    </div>
</div>
<!-- /.box-body -->
<div class="box-footer clearfix" style="float: right;">
    <label class="btn-material">
        <input type="submit" value="保存する" class="btn btn-lg bg-aqua">
    </label>
</div>
HTML;
        }
    }
}