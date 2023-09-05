<?php
session_start();
date_default_timezone_set('Asia/Taipei');

function to($url){
        header("location:".$url);
}

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>