<?php
if(!isset($_GET["a"])){
    $a=0;
}
else{
    $a = $_GET["a"];
}
if(!isset($_GET["b"])){
    $b=1;
}
else{
    $b= $_GET["b"];
}
    echo ($b/$a);
    echo ' ส่วน';
?>