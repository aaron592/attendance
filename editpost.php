<?php 

require_once 'db/conn.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $occupation = $_POST['job'];
    $email = $_POST['email'];
    $contact = $_POST['number'];

$result = $crud->editAttendee($id,$fname,$lname,$dob,$occupation,$email,$contact);

if($result){
    header("location : viewreord.php");
}else{
    echo 'error';
}

}
else{
    echo 'error';

}

?>