<?php
session_start();
include '../action/DbConnection.php';
include '../includes/header.php';
include '../includes/nav.php';
?>

    <div class="container-fluid pb-5">
        <div class="row pt-4">
            <div class="col-2"></div>
            <div class="col-8">
                <h2 class="text-muted">My Details</h2>
                <hr>

                <table>
                    <?php 
                        $userid = $_SESSION["UserId"];
                        $sql = mysqli_query($db,"select * from user where userid='".$userid."'");
                        $row = mysqli_fetch_assoc($sql);
                     ?>
                    <tr>
                        <th class="text-muted">Your Full Name :</th>
                        <td><?php echo $row["FullName"]; ?></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Anonymous Name :</th>
                        <td><?php echo $row["FullNameOPT"]; ?></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Email :</th>
                        <td><?php echo $row["Email"]; ?></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Gender :</th>
                        <td><?php echo $row["Gender"]; ?></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Phone No.1 :</th>
                        <td><?php echo $row["Phone1"]; ?></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Phone No.2 :</th>
                        <td><?php echo $row["Phone2"]; ?></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Address 1 :</th>
                        <td><?php echo $row["Address1"]; ?></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Address 2 :</th>
                        <td><?php echo $row["Address2"]; ?></td>
                    </tr>
                </table>
            <?php  ?>
            <hr>
                <h3 class="pt-2">My Post</h3>
                <?php
                    $sqlPost = mysqli_query($db,"Select * from post where UserId='".$userid."'");
                    while($rowPost = mysqli_fetch_assoc($sqlPost)){
                 ?>
                <hr>
                <div class="pt-2">
                <?php echo $rowPost["Post"]; ?>
                </div>
                <?php } ?>
                



            </div>
            <div class="col-2"></div>
        </div>
    </div>

<?php include '../includes/footer.php'; ?>