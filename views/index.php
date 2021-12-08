<?php
include 'includes/functions.php';
include './configs/config.php';

if(isset($_GET['f']) && isset($_GET['c']) )
{
    $controller=$_GET['c'];
    $function=$_GET['f'];
    loadcontroller($controller,$function);
}else loadcontroller($defaultcontroller,$defaultfunction);
