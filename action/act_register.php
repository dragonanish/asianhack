<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "sahayogihaat");


if (isset($_POST['btn_register'])) {
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $num1=$_POST['number1'];
    $num2=$_POST['number2'];
    $pass=md5($_POST['password']);
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $gender=$_POST['gender'];


    if($name!=null && $username!=null && $email!=null && $pass!=null && $num1!=null&& $address1!=null){
        $query="insert into user(FullName,FullNameOPT,Email,Phone1,Phone2, Address1, Address2,Password, Gender)".
            "values('$name','$username','$email','$num1','$num2','$address1','$address2','pass', 'gender')";
    }
    else{
        header("location:../view/register.php");
    }

    $result= mysqli_query($con, $query);

    if ($result){
        $_SESSION['user']="Register Successful.";
        header("location:../view/login.php");
    }
    else{
        $_SESSION['user']="Register Failed.";
        header("location:../view/register.php");
    }
}
?>