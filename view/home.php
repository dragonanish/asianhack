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
            </div>
            <div class="v2 pt-5"> </div>
            <div class="pt-3">
                <h4 class="text-muted text-primary">Top donations this week</h4>
                <div class="text-info pt-3" style="font-size: 18px">
                    Alka Shilpakar : Rs. 100000/- <br>
                    Alka Shilpakar : Rs. 100000/- <br>
                    Alka Shilpakar : Rs. 100000/- <br>
                </div>
            </div>
            <div class="v2 pt-5"> </div>
            <div>
                <!-- ADS -->
                ADS
            </div>
        </div>
        <div class="vl"></div>

        <div class="col-8 pt-2">
            <div class="pl-3">
            <a type="button" class="btn btn-danger btn-lg text-light" href="post.php" name="report">CASE REPORT</a>
            </div>
            <div class="pt-4 pl-3">
                <!-- Card  -->
                <div class="card shadow-sm">
                    <!-- Card content -->
                    <div class="card-body">
                        <h4 class="card-title">My harassment Story</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dignissimos
                            exercitationem facere harum ipsam iust nisi rem reprehenderit. Atque culpa cupiditate ea laborum officia qu
                            isquam repellat repudiandae sit. Nemo!</p>
                        <!-- Link -->
                        <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fas fa-angle-double-right"></i></h5></a>

                    </div>
                </div>
            </div>
            <div class="pt-4 pl-3">
                <!-- Card  -->
                <div class="card shadow-sm">
                    <!-- Card content -->
                    <div class="card-body">
                        <h4 class="card-title">My harassment Story</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dignissimos
                            exercitationem facere harum ipsam iust nisi rem reprehenderit. Atque culpa cupiditate ea laborum officia qu
                            isquam repellat repudiandae sit. Nemo!</p>
                        <!-- Link -->
                        <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i class="fas fa-angle-double-right"></i></h5></a>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<?php include '../includes/footer.php'; ?>
