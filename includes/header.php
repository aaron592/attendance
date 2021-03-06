
<?php
include_once 'includes/session.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  
    <title>Attendance - <?php echo $title ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-md-auto gap-2">
        <li class="nav-item rounded">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-fill me-2"></i>Home</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="#"><i class="bi bi-people-fill me-2"></i>About</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="viewrecord.php"><i class="bi bi-telephone-fill me-2"></i>View Attendees</a>
        </li>
        

        <?php 
      if(!isset($_SESSION['userid'])){
      ?>
        <li class="nav-item rounded">
          <a class="nav-link" href="login.php" id="" role="button" data-bs-toggle="" aria-expanded="false"><i class="bi bi-person-fill me-2"></i>Login</a>
        </li>
         <?php } else { ?>
        <li class="nav-item dropdown rounded">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill me-2"></i>Hello <?php echo $_SESSION['username'] ?></a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Account</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="logout.php">Logout</a>
            </li>
            <?php } ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br/>