<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 7/24/2017
 * Time: 9:38 PM
 */
$conn = mysqli_connect("localhost","root","","project15db");

if(!$conn){
    die("Connection failed : ".mysqli_connect_error());
}

?>