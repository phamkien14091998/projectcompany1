<?php
foreach($data_name['item'] as $value){
    echo <<<HTML
<option id="girl-name" name="girl_name" value="{$value['girl_cd']}">{$value['girl_name']}</option>
HTML;
}

