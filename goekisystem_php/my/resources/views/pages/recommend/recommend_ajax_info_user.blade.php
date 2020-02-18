<?php
//print_r($data);die();
/*foreach ($data['item'] as $item){*/
    if ($r->user_cd == $data['item']['user_cd']){
echo <<<HTML
<span>
<input type="hidden" name="user_cd" value="{$data['item']['user_cd']}">
{$data['item']['name']} - {$data['item']['tel']}
</span>
HTML;
}

