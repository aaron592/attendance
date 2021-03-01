<?php 
require_once 'db/conn.php';

if(!isset($_GET['id'])){
    //echo 'error';
    include 'includes/errormessage.php';
    header("location: viewrecord.php");
}else{
    $id = $_GET['id'];

    $result = $crud->deleteAttendee($id);

    if($result) {
header("location: viewrecord.php");
    }else{
        include 'includes/errormessage.php';
    }
}
?>