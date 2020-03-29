<?php
session_start();
if ($_SESSION['connect']=$resultUser){
    echo "Bienvenue";
}else{
    header("location: connect.php");
}