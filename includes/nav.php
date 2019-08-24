<div class="container-fluid" style="background-color: #11748B">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-1"></div>
        <div class="col-8">
            <!--Navbar -->
            <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto" style="font-size: 20px; ">
                        <li class="nav-item">
                            <a class="nav-link pr-3 pl-3 font-weight-bold" style="font-size: 20px;" href="../view/home.php" name="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-3 pl-3 font-weight-bold" style="font-size: 20px; " href="data" name="data">Preventions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-3 font-weight-bold"  style="font-size: 20px; " href="about" name="about">Get Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-3 font-weight-bold"  style="font-size: 20px; " href="about" name="about">Share Stories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-3 font-weight-bold"  style="font-size: 20px; " href="about" name="about">About</a>
                        </li>
                        <li class="nav-item pt-1">
                            <a type="button" class="btn btn-danger btn-md text-light justify-content-center" href="login" name="login">DONATE</a>
                        </li>
                        <?php if(isset($_SESSION['UserId'])){ ?>
                            <li class="nav-item pl-2 pt-1">
                            <a type="button" class="btn btn-outline-dark btn-md text-light justify-content-center" href="../action/act_logout.php" name="login">LOGOUt</a>
                        </li>
                        
                        <?php }else{
                     ?>
                     <li class="nav-item pl-2 pt-1">
                            <a type="button" class="btn btn-outline-dark btn-md text-light justify-content-center" href="login" name="login">LOGIN</a>
                        </li>
                        <li class="nav-item pl-2 pt-1">
                            <a type="button" class="btn btn-outline-dark btn-md text-light" href="register">REGISTER</a>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </nav>
            <!--/.Navbar -->
        </div>
    </div>
</div>
