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
        <div class="col-3"></div>
        <div class="col-3">
            <div class="card mt-5 shadow-lg" style="width: 45rem;">
                <h4 class="card-header bg-info text-light text-center">
                    <strong>Report</strong>
                </h4>

                <div class="card-body mt-3">
                    <h3 class="text-muted text-dark">CASE</h3>
                    <form class="text-center" action="../action/act_post.php" method="post">
                        <div class="form-group">
                            <textarea type="text" id="report" name="report" class="form-control" placeholder="Report (required)"></textarea>
                        </div>
                        <div class="form-grouppt-2">
                            <label class="text-right text-muted">Case Type: </label>
                            <select name="case" id="case">
                                <option value="rape">Rape and Molestation</option>
                                <option value="harassment">Sexual Harassment</option>
                                <option value="acid">Acid Attack</option>
                                <option value="hit">Hit and Run</option>
                                <option value="violence">Domestic Violence</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <input type="text" id="location" name="location" class="form-control" placeholder="Location (required)">
                        </div>
                        <div class="form-group">
                            <label for="image" class="text-muted text-right">Picture: </label>
                            <input type="file" id="image" name="image" class="form-control" placeholder="Picture">
                        </div>
                        <hr>


                        <h3 class="text-muted text-dark text-left">Personal Information</h3>
                        <div class="form-group pt-2">
                            <input type="text" id="name1" name="name1" class="form-control" placeholder="Full Name (required)">
                        </div>
                        <div class="form-group">
                            <input type="text" id="name2" name="name2" class="form-control" placeholder="User Name (required)">
                        </div>
                        <div class="form-group">
                            <input type="text" id="address1" name="address1" class="form-control" placeholder="Address 1 (required)">
                        </div>
                        <div class="form-group">
                            <input type="text" id="address2" name="address2" class="form-control" placeholder="Address 2 ">
                        </div>
                        <div class="form-group">
                            <input type="number" id="num1" name="num1" class="form-control" placeholder="Phone number 1 (required)">
                        </div>
                        <div class="form-group">
                            <input type="number" id="num2" name="num2" class="form-control" placeholder="Phone number 2">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        </div>

                        <button class="btn btn-outline-info btn-rounded" type="submit" name="btn_submit" value="Save">Submit</button>


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