<?php
include("DbConnection.php")
if (isset($_POST['btn_submit'])) {
    $post=$_POST['report'];
    $Postimage=$_POST['image'];
    $casetype=$_POST['case'];
    $location=$_POST['location'];
    $FullName=$_POST['name1'];
    $FullNameOPT=$_POST['name2'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $Phone1=$_POST['num1'];
    $Phone2=$_POST['num2'];
    $Email=$_POST['email'];


    if($_SESSION['UserId']==null){
        if($post!=null && $casetype!=null && $location!=null && $FullName!=null&& $address1!=null && $Phone1!=null){
          $userdetail_query="insert into user(FullName,FullNameOPT,Email,Phone1,Phone2, Address1, Address2, IsEmergency)".
            "values('$FullName','$FullNameOPT','$Email','$Phone1','$Phone2','$address1','$address2','1')";
        }
        else{
            header("location:../view/report.php");
        }

        $userdetil_result= mysqli_query($con, $userdetail_query);

        $retriveLastUser = "select UserId from user order by UserId desc Limit 1";
        $retriveLastUserResults= mysqli_query($db,$retriveLastUser);

        if(mysqli_num_row($retriveLastUser) == 1){
            $retriveLastUserData = mysqli_fetch_assoc($retriveLastUserResults);
            $UserId = $retriveLastUserData['UserId'];

            $post_query="insert into post(Post,Postimage,casetype,location)".
            "values('$Post','$Postimage','$casetype','$location')";

        }
    }else{
        if($post!=null && $casetype!=null && $location!=null && $FullName!=null&& $address1!=null && $Phone1!=null){
        $post_query="insert into post(Post,Postimage,casetype,location,)".
            "values('$Post','$Postimage','$casetype','$location')";

        }
        else{
            header("location:../view/report.php");
        }
    }

    //$post_result= mysqli_query($con, $post_query);

     $userdetil_result= mysqli_query($con, $userdetail_query);

     $retriveLastUser

    
}
?>