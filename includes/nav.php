<div class="container-fluid" style="background-color: #11748B">
    <div class="row">
        <div class="col-3">
            <h2 class="pt-3 pl-4" style="color: whitesmoke; font-family: Bahnschrift;">SAHAYOGI HAAT</h2>
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
                        <?php 
                            if(isset($_SESSION['UserType'])){
                            if($_SESSION["UserType"]=="admin"){
                         ?>
                         <li class="nav-item">
                            <a class="nav-link pr-3 pl-3 font-weight-bold" style="font-size: 20px; " href="../view/UsersList.php" name="data">Users List</a>
                        </li>
                    <?php }else{ ?>
                        <li class="nav-item">
                            <a class="nav-link pr-3 pl-3 font-weight-bold" style="font-size: 20px; " href="../view/myDetail.php" name="data">My Detail</a>
                        </li>
                    <?php }} ?>
                        <li class="nav-item">
                            <a class="nav-link pr-3 pl-3 font-weight-bold" style="font-size: 20px; " href="../view/preventions.php" name="data">Preventions</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-3 pl-3 dropdown-toggle font-weight-bold" style="font-size: 20px; " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Muluki Ain
                            </a>
                            <div class="dropdown-menu font-weight-bold" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../muluki/rape.php">Rape and harassment</a>
                                <a class="dropdown-item" href="../muluki/violence.php">Domestic Violence</a>
                                <a class="dropdown-item" href="../muluki/hit.php">Hit and Run</a>
                                <a class="dropdown-item" href="../muluki/cyber.php">Cyber Crimes</a>
                                <a class="dropdown-item" href="../muluki">Acid Attack</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-3 font-weight-bold"  style="font-size: 20px; " href="../view/stories.php" name="about">Share Stories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-3 font-weight-bold"  style="font-size: 20px; " href="../view/about.php" name="about">About</a>
                        </li>
                        <li class="nav-item pt-1">
                            <a type="button" class="btn btn-danger btn-md text-light justify-content-center" href="../view/donate.php" name="donate">DONATE</a>
                        </li>
                        <?php if(isset($_SESSION['UserId'])){ ?>
                            <li class="nav-item pl-2 pt-1">
                            <a type="button" class="btn btn-outline-dark btn-md text-light justify-content-center" href="../action/act_logout.php" name="login">LOGOUT</a>
                        </li>
                        
                        <?php }else{
                     ?>
                        <li class="nav-item pl-2 pt-1">
                            <a type="button" class="btn btn-outline-dark btn-md text-light justify-content-center" href="../view/login.php" name="login">LOGIN</a>
                        </li>
                        <li class="nav-item pl-2 pt-1">
                            <a type="button" class="btn btn-outline-dark btn-md text-light" href="../view/register.php">REGISTER</a>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </nav>
            <!--/.Navbar -->
        </div>
    </div>
</div>
