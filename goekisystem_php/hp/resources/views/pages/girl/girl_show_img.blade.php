<?php
if (isset($data['item']) && $data['item'] && !isset($data['item']['diary_cd'])){
    foreach ($data['item'] as $item){
        if ($_GET['diary_cd'] == $item['diary_cd']){
            echo <<<HTML
<div class="girls-head" style="height: 300px">
    <div class="girls-img">
        <img class="img img_contain_one" style="height: 300px;" src="http://img.eki-go.com/img_diary/{$item['girl_cd']}/{$item['diary_img_url']}">
    </div>
</div>
HTML;
        }
    }
}elseif (isset($data['item']['diary_cd'])){
    if ($_GET['diary_cd'] == $data['item']['diary_cd']){
        echo <<<HTML
<div class="girls-head" style="height: 300px">
    <div class="girls-img">
        <img class="img img_contain_one" style="height: 300px;" src="http://img.eki-go.com/img_diary/{$data['item']['girl_cd']}/{$data['item']['diary_img_url']}">
    </div>
</div>
HTML;
    }
}