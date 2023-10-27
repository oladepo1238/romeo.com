<?php


if(isset($_POST["submit"])){

$name=       $_POST["name"];
$email=      $_POST["email"];


$question=   $_POST["question"];
$message=   $_POST["message"];
 $no_wa=   $_POST["noWa"];
 
header("location:https://api.whatsapp.com/send?phone=$no_wa&text=(1)=Name:$name (2)=Email:$email  (3)=Adress:$question (4)=Message:$message");

}{
    echo "<script> window.location=history.go(-1);</script>";


}








?>

