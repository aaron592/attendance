<?php 
  $title = 'View Record';
 require_once 'includes/header.php' ;
 require_once 'db/conn.php';
 


 if(!isset($_GET['id'])){
   
  echo "<h1 class='text-danger'> Please check the details and try again</h1>";
   
 }else{

  $id = $_GET['id'];

  $result = $crud->getAttendeeDetails($id);
 

 ?>



<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
    <?php echo $result['firstname'] . " ". $result['lastname']; ?>
    </h6>
    <h6 class="card-subtitle mb-2 text-muted">
    <?php echo $result['name']?>
    </h6>
    <p class="card-text">
    Date of birth: <?php echo $result['dateofbirth']?>
    </p>
    <p class="card-text">
    Email: <?php echo $result['emailaddress']?>
    </p>
    <p class="card-text">
    Contact no: <?php echo $result['contactnumber']?>
    </p>
    <a href="viewrecord.php" class="btn btn-primary">Back to list</a>
      <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
      <a onclick="return confirm('Are you sure to delete this record?')" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
  </div>
</div>


<?php } ?>














<br>
<br>
<br>
<br>
   <?php require_once 'includes/footer.php' ?>