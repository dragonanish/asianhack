<?php
session_start();
include '../action/DbConnection.php';
include '../includes/header.php';
include '../includes/nav.php';
?>

<style>
    .vl {
        border-left: 4px solid lightgray;
        height: 800px;
    }

    .v2 {
       border-bottom: 3px solid lightgray;
        width: auto;
    }
</style>

<div class="container-fluid pt-2">
    <div class="row">

        <div class="col-3 pt-2">
            <div>
                <h3 class="text-muted ">CASES</h3><hr>
                <a href="" type="button"><h5>Rape and molestation</h5></a><hr>
                <a href="" type="button"><h5>Sexual harassment</h5></a><hr>
                <a href="" type="button"><h5>Domestic Violence</h5></a><hr>
                <a href="" type="button"><h5>Hit and run</h5></a>
                <hr>
                <a href="" type="button"><h5>Acid Attack cases</h5></a>
            </div>
            <div class="v2 pt-5"> </div>
            <div class="pt-3">
                <h4 class="text-muted text-primary">Top donations this week</h4>
                <div class="text-info pt-3" style="font-size: 18px">
                    Alka Shilpakar : Rs. 100000/- <br>
                    Anish Shrestha : Rs. 1100000/- <br>
                    Dibas Paudel : Rs. 100/- <br>
                    Sujana Sakya: Rs. 100/- <br>
                </div>
            </div>
            <div class="v2 pt-5"> </div>
            <div style="width: 300px; height: 100px; background-color: #6a6c6e;">
                <h1 style="padding-top: 30px; padding-left: 50px;">Ad's Here</h1>
            </div>
        </div>
        <div class="vl"></div>

        <div class="col-8 pt-2">
            <div class="pl-3">
            <a type="button" class="btn btn-danger btn-lg text-light" href="post.php" name="report">CASE REPORT</a>
            </div>
            <div class="pt-4 pl-3">
                <!-- Card  -->
                <?php 
                    $sql = "SELECT u.FullNameOPT, p.Post,p.PostId,p.EnteredDate FROM post p LEFT JOIN user u on u.UserId = p.UserId order by p.EnteredDate Desc";
                    $postResult = mysqli_query($db,$sql);

                    while ($data = mysqli_fetch_assoc($postResult)) {
                       
                 ?>


                <div class="card shadow-sm">
                    <!-- Card content -->
                    <div class="card-body">
                        <div>
                            <h4 class="card-title"><?php echo $data['FullNameOPT']; ?></h4>
                            <i style="float: right;font-size: 12px;">[<?php echo $data['EnteredDate']; ?>]</i>
                        </div>
                        <hr>
                        <!-- Text -->
                        <p class="card-text"><?php echo $data['Post']; ?></p>
                        <!-- Link -->
                        <a href="post_view.php?id=<?php echo $data['PostId']; ?>" class="black-text d-flex justify-content-end"><h5>Read more <i class="fas fa-angle-double-right"></i></h5></a>

                    </div>
                </div><div style="height: 5px;"></div>
                <?php 
                    }
                 ?>
            </div>

        </div>


    </div>
</div>

<?php include '../includes/footer.php'; ?>
