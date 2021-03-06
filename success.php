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


<aside class="profile-card">
  <header>
    <!-- here’s the avatar -->
    <a target="_blank" href="#">
      <img src="<?php echo $destination; ?>" class="hoverZoomLink" style="width: 100%; height: auto" />
      
    </a>

    <!-- the username -->
    <h1>
           <?php echo $_POST['firstname']. " ". $_POST['lastname']?>
          </h1>

    <!-- and role or location -->
    <h2>
            <?php echo $_POST['job']?>
          </h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio">

    <p>
     Date of birth: <?php echo $_POST['dob']?>
    </p>
    <p>
      Email: <?php echo $_POST['email']?>
    </p>
    
    <p>
      Contact no: <?php echo $_POST['number']?>
    </p>

  </div>

  <!-- some social links to show off -->
  <ul class="profile-social-links">
    <li>
      <a target="_blank" href="https://www.facebook.com/creativedonut">
        <i class="fa fa-facebook"></i>
      </a>
    </li>
    <li>
      <a target="_blank" href="https://twitter.com/dropyourbass">
        <i class="fa fa-twitter"></i>
      </a>
    </li>
    <li>
      <a target="_blank" href="https://github.com/vipulsaxena">
        <i class="fa fa-github"></i>
      </a>
    </li>
    <li>
      <a target="_blank" href="https://www.behance.net/vipulsaxena">
       
        <i class="fa fa-behance"></i>
      </a>
    </li>
  </ul>
</aside>




 <br>
 <br>
 <br>
 <br>
 <br>
<?php require_once 'includes/footer.php' ?>
