<?php
if (isset($data['item']) && $data['item'] && !isset($data['item']['diary_cd'])){
    foreach ($data['item'] as $item){
        if ($_GET['diary_cd'] == $item['diary_cd']){
    echo <<<HTML
<input type="hidden" name="diary_cd" value="{$_GET['diary_cd']}">
<input type="hidden" name="girl_cd" value="{$item['girl_cd']}">
<textarea class="form-control input-lg" name="diary_text2" style="height: 300px">{$item['diary_text2']}</textarea>
<!-- /.box-body -->
<div class="box-footer clearfix" style="float: right;">
    <label class="btn-material">
        <input type="submit" value="保存する" class="btn btn-lg bg-aqua">
    </label>
</div>
HTML;
        }
    }
}elseif(isset($data['item']['diary_cd'])){
    if ($_GET['diary_cd'] == $data['item']['diary_cd']){
        echo <<<HTML
<input type="hidden" name="diary_cd" value="{$data['item']['diary_cd']}">
<input type="hidden" name="girl_cd" value="{$data['item']['girl_cd']}">
<textarea class="form-control input-lg" name="diary_text2" style="height: 300px">{$data['item']['diary_text2']}</textarea>
<!-- /.box-body -->
<div class="box-footer clearfix" style="float: right;">
    <label class="btn-material">
        <input type="submit" value="保存する" class="btn btn-lg bg-aqua">
    </label>
</div>
HTML;
    }
}