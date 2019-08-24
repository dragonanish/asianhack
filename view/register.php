<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "gallery");?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/all.css">
    <script type="text/javascript" src="../asset/js/script.js"></script>
</head>
<body>
<div class="container-fluid bgimage">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card mt-5 pt-10 shadow-lg" style="width: 30rem;">
                <h4 class="card-header bg-info text-light text-center">
                    <strong>Register</strong>
                </h4>
                <div class="card-body mt-3">
                    <form class="text-center" action="../action/act_register.php" method="post">
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Full Name (required)">
                        </div>
                        <div class="form-group">
                            <input type="text" id="username" name="username" class="form-control" placeholder="User Name (required)">
                        </div>
                        <div class="form-group">
                            <input type="email" id="Email" name="email" class="form-control" placeholder="Email (required)">
                        </div>
                        <div class="form-group">
                            <input type="number" id="number1" name="number1" class="form-control" placeholder="Phone Number 1 (required)">
                        </div>
                        <div class="form-group">
                            <input type="number" id="number2" name="number2" class="form-control" placeholder="Phone Number 2">
                        </div>
                        <div class="form-group">
                            <input type="text" id="address1" name="address1" class="form-control" placeholder="Address 1 (required)">
                        </div>
                        <div class="form-group">
                            <input type="text" id="address2" name="address2" class="form-control" placeholder="Address 2">
                        </div>
                        <div class="form-group">
                            <input type="password" id="Password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="pl-5 form-group d-flex">
                            <label class="text-muted pr-2">Gender: </label>
                            <div class="pr-2"> <input type="radio"  name="gender" value="male"> Male </div>
                            <div class="pr-2"> <input type="radio"  name="gender" value="female"> Female </div>
                        </div>
                        <button class="btn btn-outline-info btn-rounded" type="submit" name="btn_register" value="Save">Register</button>

                        <div class="form-group mt-3">
                            <span style="color: red;">
                                       <?php
                                       if (isset($_SESSION['user'])) {
                                           echo $_SESSION['user'];
                                           unset($_SESSION['user']);
                                       }
                                       ?> </span>
                            <p>Not a member?
                                <a href="register.php">Register</a>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="../asset/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="../asset/js/popper.min.js"></script>
<script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
</body>
</html>