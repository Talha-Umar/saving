<?php
include '../dbcon.php';
if (isset($_POST['status'])) {
 $orderid=$_POST['orderid'];
 $status=$_POST['status'];
$date=date('d-m-Y');
 $sql = "UPDATE donations SET status='$status',update_date='$date' WHERE id='$orderid'";
if ($conn->query($sql) === TRUE) {
echo "<script> alert('Record Updated!');</script>";
echo "<script> window.location.href = 'donations.php';</script>";
} else {
echo "Error updating record: " . $conn->error;
 }

}
 ?>
<?php include 'others/header.php'; 
$fid=$_SESSION["user_id"];
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/teachers.js"></script>
  <!-- Main Sidebar Container -->
<?php include 'others/sidebar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Donations Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Information</a></li>
              <li class="breadcrumb-item active">Donations</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
       

            <div class="card">
              <div class="card-header">
                <div class="row" style="padding: 10px 20px;">
                    <div class="col-md-6 col-sm-6 col-6">
                      <h3 class="card-title">Donations Information</h3> 
                    </div>
                    <!-- <div class="col-md-6 col-md-6 col-sm-6 col-6" style="text-align: right;">
                      <button type="button" class="btn btn-success " data-toggle="modal" data-target="#add"><i class="fa fa-plus-circle"> Add Package</i>
                      </button>
                  </div> -->
                </div>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr#</th>
                    <th>Donor</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $k=0;
                   $sql1 = "SELECT * FROM donations";
                    $result1 = $conn->query($sql1);
                   if ($result1->num_rows > 0) {
                       // output data of each row
                     while($row = $result1->fetch_assoc()) {
                    ?>
                  <tr id="<?php echo $row['id'];?>">
                    <td><?php echo ++$k; ?></td>
                    <td><?php
                    $uid= $row['donor_id']; 
                   $sql2 = "SELECT * FROM donor WHERE id='$uid'";
                    $result2 = $conn->query($sql2);
                    $row2 = $result2->fetch_assoc();
                    echo $row2['name'];
                  ?></td>
                   <td><?php echo $row['title'];?></td>
                   <td><?php echo $row['description'];?></td>
                   <td><img width="50" src="<?php echo $row['image'];?>"></td>
                    
                    <td> <?php
                    if ($row['status']=='0') { ?>
                    <form method="post">
                        <input type="hidden" value="<?php echo $row['id'];?>" name="orderid">
                       <select class="form-control" name="status" onchange="this.form.submit()">
                           <option value="0">In Progrss</option>
                            <option value="1">Complete</option>
                             <option value="2">Cancel</option>
                       </select>
                 </form>
                   <?php  } elseif ($row['status']=='1') {
                       echo '<span class="badge badge-success">Completed</span>';
                     }
                     else{
                       echo '<span class="badge badge-danger">Cancled</span>';
                     }


                     ?></td>
                    <td><?php echo $row['update_date']; ?></td>
                    
                  </tr>
                   <?php } } else { ?>
                    <tr>
                      <th colspan="7">No Record Exists!!!!</th>
                    </tr>
                     <?php } ?>
                  </tbody>
                 
                </table>
                <br>
 <center>
    <button id="export" class="btn btn-success">Export as CSV</button>
</center>
                     
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="js/table2csv.js"></script>
    <script>
document.querySelector("#export").addEventListener("click", function () {
    var html = document.querySelector("table").outerHTML;
  export_table_to_csv(html, "donations.csv");
});
    </script>
  <?php include 'others/footer.php'; ?>