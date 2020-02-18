<?php
/**
 * Created by PhpStorm.
 * User: GaCold
 * Date: 15/10/2018
 * Time: 10:58 SA
 */
?>
@if (count($errors) > 0)
    <div class="alert alert-danger" id="alert-fail">
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif
