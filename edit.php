<?php 
  $title = 'Edit';
 require_once 'includes/header.php' ;
 require_once 'includes/auth_check.php';
 require_once 'db/conn.php';

$results = $crud->getStatus();

if(!isset($_GET['id'])){
  //echo 'error';
  include 'includes/errormessage.php';
  header("location: viewrecord.php");
}
else{
  $id = $_GET['id'];
  $attendee = $crud->getAttendeeDetails($id);



 ?>
<div class="container" >
    <h1 class="text-center">Edit Record</h1>

    <form method="post" action="success.php">
    <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
    <div class="form-group">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname"  name="firstname">
    </div>
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname"  name="lastname">
    </div>
    <div class="form-group">
      <label for="dob">Date of birth:</label>
      <input type="" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob">
    </div>
    <div class="form-group">
      <label for="job">Status:</label>
      <select class="form-control" id="job" name="job">
      <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
<option value="<?php echo $r['status_id']?>" <?php if($r['status_id'] == $attendee['status_id']) echo 'selected' ?>>
<?php echo $r['name'] ?> 
</option>
      <?php } ?>
    </select>
      
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?>" id="email"  name="email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="number">Contact Number:</label>
      <input type="phone" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="number"  name="number">
      <small id="emailHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <a href="viewrecord.php" class="btn btn-default" >Back to list </a>
    <button type="submit" name="submit" class="btn btn-success ">Save Changes</button>
  </form>
<?php } ?>

<br>
<br>
<br>
<br>
   <?php require_once 'includes/footer.php' ?>
   