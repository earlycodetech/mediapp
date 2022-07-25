<?php

$db_connect = mysqli_connect('localhost','root','','mediapp');

if(!$db_connect){
    die('Error connecting to database'.mysqli_connect_error());
}