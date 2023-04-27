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
     <div class="card-header">
      <h3 class="text-center">Register Form</h3>
     </div>
     <div class="card-body">
      <form action="action/user_create.php" method="post">
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">UserName</label>
        <input type="text" name="user_name" class="form-control">
       </div>

       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>

       <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
       </div>

       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control">

       </div>

       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Address</label>
        <input type="text" name="address" class="form-control">

       </div>

       <div class="mb-3 mt-3">
        <button type="submit" name="user_create" class="btn btn-primary">New User Create</button>
       </div>

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