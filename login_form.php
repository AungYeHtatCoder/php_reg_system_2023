<?php 
include('user_layouts/head.php');
?>

<body>
 <!-- Responsive navbar-->
 <?php
include('user_layouts/navbar.php');
?>
 <!-- Page header with logo and tagline-->
 <?php
 include('user_layouts/header.php');
 ?>
 <!-- Page content-->
 <div class="container">
  <div class="row">
   <!-- Blog entries-->
   <div class="col-lg-8">
    <div class="card">
     <div class="card-body">
      <?php 
      include('session_alert.php');
      ?>
     </div>
    </div>
    <div class="card">
     <div class="card-header">
      <h3 class="text-center">Login Form</h3>
     </div>
     <div class="card-body">
      <form action="action/login.php" method="post">
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>
       <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
       </div>

       <button type="submit" name="login" class="btn btn-primary">Submit</button>
      </form>
     </div>
    </div>
   </div>
   <!-- Side widgets-->
   <div class="col-lg-4">

   </div>
  </div>
 </div>
 <!-- Footer-->
 <?php 
 include('user_layouts/footer.php');
 ?>