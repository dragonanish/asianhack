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
            
            <div class="pt-4 pl-3">
                <!-- Card  -->
                <div class="card shadow-sm">
                    <!-- Card content -->
                    <div class="card-body">
                        <h4 class="card-title">Emergency HelpLine numbers!!!</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text"><h3></h3><br></p>
                       
                        <!-- Link -->
                       

                    </div>
                </div>
            </div>
          
        </div>


    </div>
</div>

<?php include '../includes/footer.php'; ?>
