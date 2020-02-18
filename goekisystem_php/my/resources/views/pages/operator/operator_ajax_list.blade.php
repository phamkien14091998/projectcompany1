<?php
if (isset($data['item']) && $data['item']){
foreach ($data['item'] as $item){
    echo <<<HTML
<tr style="cursor: pointer">
    <td class="text-left">{$item['name']}</td>
    <td class="text-left">{$item['tel']}</td>
    <td class="text-left">{$item['registdate']}</td>
</tr>
HTML;
}
}else{
    echo <<<HTML
<tr style="cursor: pointer; background: white;height: 40px;">
    <td class="text-left"></td>
    <td class="text-left"></td>
    <td class="text-left"></td>
</tr>
HTML;
}
