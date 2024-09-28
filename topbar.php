<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <?php if(isset($_SESSION['login_id'])): ?>
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <?php endif; ?>
    
    <li class="nav-item">
      <a class="nav-link text-white" href="./" role="button"><b>DocShare</b></a>
    </li>
    
    <!-- Notification Section -->
    <li class="nav-item dropdown notifications-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
		<?php
    include_once('db_connect.php');
    if(isset($_SESSION["login_type"])) {
		$my_type=$_SESSION["login_type"];

		if($my_type == 1){
	
	$sql1="SELECT COUNT(id) FROM notification WHERE _isread='0'";
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_assoc($result1);
	$notfi_count=$row1['COUNT(id)'];
	
?>

        <?php if(isset($notfi_count) && $notfi_count > 0): ?>
        <span class="badge badge-warning"><?php echo $notfi_count; ?></span>
        <?php endif; ?>
      </a>
      <ul class="dropdown-menu">
        <li class="header">You have <?php echo $notfi_count; ?> notifications</li>
        <li>
          <!-- Inner menu: contains the actual data -->
          <ul class="menu">
            <!-- You can add individual notifications here -->
          </ul>
        </li>
        <?php }  }?>
      </ul>
    </li>
  </ul>

  <!-- Sidebar Toggle and Navbar Custom Menu -->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Custom navbar items can go here -->
    </ul>
  </div>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
