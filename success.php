<?php 
  $title = 'Success';
 require_once 'includes/header.php';
 require_once 'db/conn.php';
 

 if(isset($_POST['submit'])){
   $fname = $_POST['firstname'];
   $lname = $_POST['lastname'];
   $dob = $_POST['dob'];
   $occupation = $_POST['job'];
   $email = $_POST['email'];
   $contact = $_POST['number'];

   $orig_file = $_FILES["avatar"]["tmp_name"];
   $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
   $target_dir = 'uploads/';
   $destination = "$target_dir$contact.$ext";
   move_uploaded_file($orig_file,$destination);

   $isSuccess = $crud->insertAttendees($fname,$lname,$dob,$occupation,$email,$contact,$destination);
   if($isSuccess){
    include 'includes/successmessage.php';
   }else{
    include 'includes/errormessage.php';
   }
 }
 ?>


<!--<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php //echo $_GET['firstname']. " ". $_GET['lastname'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php //echo $_GET['job']?></h6>
    <p class="card-text">Date of birth: <?php //echo $_GET['dob']?></p>
    <p class="card-text">Email: <?php //echo $_GET['email']?></p>
    <p class="card-text">Contact no: <?php //echo $_GET['number']?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
-->


<img src="<?php echo $destination; ?>" class="rounded-circle" style="width: 20%; height: 20%" />
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstname']. " ". $_POST['lastname']?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['job']?></h6>
    <p class="card-text">Date of birth: <?php echo $_POST['dob']?></p>
    <p class="card-text">Email: <?php echo $_POST['email']?></p>
    <p class="card-text">Contact no: <?php echo $_POST['number']?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>





 <br>
 <br>
 <br>
 <br>
 <br>
<?php require_once 'includes/footer.php' ?>