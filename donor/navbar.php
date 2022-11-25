<nav class="navbar navbar-default bar navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="donor.php"><img src="images/678.png" width="50"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding: 10px; font-size: 22px;">
      <ul class="nav navbar-nav">
           <li><a href="donor.php" class="scroll">Home</a></li>
		   <li><a href="#about" class="scroll">About Us</a></li>
		   <li><a href="#services" class="scroll">Services</a></li>
			<li><a href="#mail" class="scroll">Contact Us</a></li>
      <li><a href="#pre-donation" class="scroll">Pre Donation</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i><?php echo $_SESSION["donor_name"]; ?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!-- <li><a href="#">Profile</a></li>
            <li role="separator" class="divider"></li> -->
            <li><a href="logout.php">Lougout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>