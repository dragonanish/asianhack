<?php
session_start();
include '../action/DbConnection.php';
?>
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
                    <strong>Login</strong>
                </h4>
                <span style="color: red;">
                                       <?php
                                       if (isset($_SESSION['user'])) {
                                           echo $_SESSION['user'];
                                           unset($_SESSION['user']);
                                       }
                                       ?> </span>
                <div class="card-body mt-3">
                    <form class="text-center" action="../action/act_login.php" method="post">
                        <div class="form-group">
                            <input type="email" id="Email" name="Email" class="form-control" placeholder="Email (required)" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" id="Password" name="Password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <button class="btn btn-outline-info btn-rounded" type="submit" name="btn_login" value="Save">Login</button>

                        <div class="form-group mt-3">
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