<?php
session_start();
include("DbConnection.php");
$msg = "";
if(isset($_POST['btn_submit'])) {

    $post=$_POST['report'];
    $casetype=$_POST['case'];
    $location=$_POST['location'];

    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $ext = pathinfo($image,PATHINFO_EXTENSION);
    $image = md5($image);
    $image = $image . "." . $ext;
    $target = "../image/".$image;

    // echo $_SESSION["UserId"];
    // die();
    // if($_SESSION['UserId']==null){
    //     if($post!=null && $casetype!=null && $location!=null && $FullName!=null&& $address1!=null && $Phone1!=null){
    //       $userdetail_query="insert into user(FullName,FullNameOPT,Email,Phone1,Phone2, Address1, Address2, IsEmergency)".
    //         "values('$FullName','$FullNameOPT','$Email','$Phone1','$Phone2','$address1','$address2','1')";
    //     }
    //     else{
    //         header("location:../view/report.php");
    //     }

    //     $userdetil_result= mysqli_query($con, $userdetail_query);

    //     $retriveLastUser = "select UserId from user order by UserId desc Limit 1";
    //     $retriveLastUserResults= mysqli_query($db,$retriveLastUser);

    //     if(mysqli_num_row($retriveLastUser) == 1){
    //         $retriveLastUserData = mysqli_fetch_assoc($retriveLastUserResults);
    //         $UserId = $retriveLastUserData['UserId'];

    //         $post_query="insert into post(Post,Postimage,casetype,location,UserId)".
    //         "values('$Post','$image','$casetype','$location','$UserId')";

    //         $userdetil_result= mysqli_query($con, $userdetail_query);
    //         header("location:../view/home.php");
    //     }
    // }else{
    //     if($post!=null && $casetype!=null && $location!=null && $FullName!=null&& $address1!=null && $Phone1!=null){
    //         $UserId = $_SESSION['UserId'];
    //         $post_query="insert into post(Post,Postimage,casetype,location,UserId)".
    //         "values('$Post','$Postimage','$casetype','$location','$UserId')";

    //         $userdetil_result = mysqli_query($db,$post_query);
    //     }
    //     else{
    //         header("location:../view/report.php");
    //     }
    // }

    if($_SESSION["UserId"] != null){
        if($post!=null && $casetype!=null && $location!=null){
            $UserId = $_SESSION['UserId'];
            $post_query="insert into post(Post,Postimage,casetype,location,UserId)".
            "values('$post','$image','$casetype','$location','$UserId')";

            $userdetil_result = mysqli_query($db,$post_query);

            if(move_uploaded_file($image_temp,$target))
            {
                $msg ="Image uploaded successfully";
            }
            else
            {
                $msg = "There was a problem uploading image";
            }
            header("location:../view/home.php");
        }
        else{
            header("location:../view/post.php");
        }
    }
    
}
?>