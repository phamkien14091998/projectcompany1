<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 12/10/2018
 * Time: 4:28 CH
 */
?>
@if(session('success'))
    <div class="alert alert-success" id="alert-success">
        {{session('success')}}
    </div>
@endif
@if(session('fail'))
    <div class="alert alert-danger" id="alert-fail">
        {{session('fail')}}
    </div>
@endif
