<?php
require_once 'controller/config.php';
global $db;
$db = @mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);

function getAllUsers()
{

    $request = ('SELECT * FROM utilisateur');
    $query = mysqli_query($db, $request) or die("Erreur n° " . mysqli_errno($db) . " Description : " . mysqli_error($db));
    $resultQuery = mysqli_fetch_assoc($query);
    return $resultQuery;

}

function getUsers($id){

    $db = @mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    $request = ('SELECT * FROM utilisateur WHERE id ="$id"');
    $query = mysqli_query($db, $request) or die("Erreur n° " . mysqli_errno($db) . " Description : " . mysqli_error($db));
    $resultQuery = mysqli_fetch_assoc($query);
    return $resultQuery;

}
//TODO creer table
function createUsers($user,$password){
    $db = @mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);

    $resultQuery = mysqli_fetch_assoc($query);


}
function deleteUsers(){

}