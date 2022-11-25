<?php include 'others/header.php'; ?>
<?php include '../dbcon.php'; ?>
  <?php include 'others/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
                  $sql = "SELECT count(id) as totalorders FROM donor";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  echo $row['totalorders'];
                  ?>
                </h3>

                <p>Total Donors</p>
              </div>
              <div class="icon">
                <i class="fa fa-heart"></i>
              </div>
              <a href="donors.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
             <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  <?php 
                  $sql1 = "SELECT count(id) as totalacceptor FROM acceptor";
                  $result1 = $conn->query($sql1);
                  $row1 = $result1->fetch_assoc();
                  echo $row1['totalacceptor'];
                  ?>
                </h3>

                <p>Total Acceptors</p>
              </div>
              <div class="icon">
                <i class="fa fa-handshake"></i>
              </div>
              <a href="acceptors.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
        </div>
        <!-- /.row -->
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include 'others/footer.php'; ?>