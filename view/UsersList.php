<?php
session_start();
include '../action/DbConnection.php';
include '../includes/header.php';
include '../includes/nav.php';
?>

<div class="container-fluid">
    <div class="row pt-4">
        <div class="col-1"></div>
        <div class="col-9">
            <div class="card shadow-sm">
                    <!-- Card content -->
                    <div  class="card-body">
                        <div>
                            <h4 class="card-title">User List</h4>
                        </div>
                        <hr>
                        <span class="pt-4">


            <table class="table table-bordered tab">

                <thead class="grey black-text font-weight-bold" >
                <tr style="height: 10px;">
                    <th><p class="card-title">SN</p></th>
                    <th><p class="card-title">Full Name</p></th>
                    <th><p class="card-title">Anonymous Name</p></th>
                      <th><p class="card-title">Email</p></th>
                       <th><p class="card-title">Address1</p></th>
                        <th><p class="card-title">Address2</p></th>
                        <th><p class="card-title">Phone1</p></th>
                        <th><p class="card-title">Phone2</p></th>


                </tr>
                </thead>
                <tbody>
                 <?php 
                    $i = 1;
                    $sql = mysqli_query($db,"select * from user where IsDeleted=0");
                    while ($row = mysqli_fetch_assoc($sql)) {
                  ?>   
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["FullName"]; ?></td>
                    <td><?php echo $row["FullNameOPT"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td><?php echo $row["Address1"]; ?></td>
                    <td><?php echo $row["Address2"]; ?></td>
                    <td><?php echo $row["Phone1"]; ?></td>
                    <td><?php echo $row["Phone2"]; ?></td>
                </tr>
                <?php 
                    $i++;
            } ?>
                </tbody>
            </table>
            </span>
                        
                    </div>
                </div><div style="height: 5px;"></div>
                
           

        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
