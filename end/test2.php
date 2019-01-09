<?php
header("Access-Control-Allow-Origin:http://192.168.2.106:63341");
header("Access-Control-Allow-Credentials:true");
header('Access-Control-Allow-Headers:content-type');
session_start();
$_SESSION["userName"]=null;
$message = array("message"=>"success");
if($_SESSION["userName"]){

}else{
    echo json_encode($message);
}
