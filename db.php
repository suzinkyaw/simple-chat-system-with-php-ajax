<?php 

$host="localhost";
$user="root";
$password="";
$db_name="chat";

$con=new mysqli($host, $user, $password, $db_name);

function formatDate($date){
    return date('g:i a', strtotime($date));
}