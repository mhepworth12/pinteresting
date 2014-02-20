<?php
include '../ASEngine/AS.php';

//user is not logged in, redirect to login page
if(!$login->isLoggedIn() && $page != 'index')
    header("Location: index.php");

if( $login->isLoggedIn() && $page == 'index')
    header("Location: home.php");


//get user details from db
$email = ASSession::get("user_email");
$user  = new ASUser($email,$dynamoDB_client);
$role  = $user->getRole();

//check if user is a model
if($role != "model")
    header('Location: ../index.php');

//get model details
$model = new ASModel($email,$dynamoDB_client);
$userDetails = $model->getDetails();

$result   = $user->getInfo(); 
$userInfo = $result[0];


$name         = $userDetails["first_name"]." ".$userDetails["last_name"];
$thumbnails_p = $userInfo["folder_path"]."/Thumbnails";
$photos_p     = $userInfo["folder_path"]."/Photos";
$videos_p	  = $userInfo['folder_path']."/Videos";
 
 /*
$s3_client  = new ASAmazonS3($userInfo["bucket"],$amazonS3_client);
$thumbnails = $s3_client->getFolderContents($thumbnails_p);
$photos     = $s3_client->getFolderContents($photos_p);

$videos     = $s3_client->getFolderContents($videos_p);*/

$thumbnails = array();
$photos     = array();

$videos     = array();

//getting number of items
$count = count($thumbnails);  

if($count > 0) {        
    $photo=$thumbnails_p."/".$userDetails["profile_photo"];
    //$profile_pic = "https://s3.amazonaws.com/eclecticmodels_users/Models/1386431431831/Thumbnails/Milos_Atmosphere_Models_Nis_profilePhoto.jpg";                
    $profile_pic="http://d3uz3pao5fd9h4.cloudfront.net/".$photo;
}

