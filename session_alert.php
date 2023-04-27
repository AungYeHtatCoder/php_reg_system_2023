<?php
// session alert 
if (isset($_GET['success'])) {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Success!</strong> <?php echo $_GET['success']; ?>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
    unset($_GET['success']);
}
if (isset($_GET['error'])) {
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Error!</strong> <?php echo $_GET['error']; ?>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
    unset($_GET['error']);
}
?>