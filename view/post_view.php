<?php
session_start();
include '../action/DbConnection.php';
include '../includes/header.php';
include '../includes/nav.php';
?>

<div class="container-fluid">
    <div class="row pt-5">
        <div class="col-2"></div>
        <div class="col-8">
          <div class="card">
            <?php 
                if(isset($_GET["id"])){

                    $PostId = $_GET["id"];
                    $_SESSION["PostId"] = $PostId;
                    $sql = mysqli_query($db,"SELECT u.FullNameOPT, p.Post,p.PostId,p.EnteredDate FROM post p LEFT JOIN user u on u.UserId = p.UserId WHERE p.PostId = '".$PostId."'");

                    $data = mysqli_fetch_assoc($sql);
             ?>
                <div class="card-header">
                    <div>
                        <h2><?php echo $data['FullNameOPT']; ?></h2>
                        <i style="float: right;font-size: 12px;">[<?php echo $data['EnteredDate']; ?>]</i>
                    </div>
                </div>
                <div class="card-body">
                    <p> <?php echo $data['Post']; ?> </p>

                </div>
            <?php } ?>
            </div>
            <?php 
                if(isset($_SESSION['UserId'])){
             ?>
            <div class="pt-4">
                <form action="../action/act_change.php" method="post">
                    <textarea type="text" id="comment" name="comment" class="form-control" placeholder="Add a public comment"></textarea>
                    <div class="pt-2 text-right"><button class="btn btn-outline-info btn-rounded pt-2" type="submit" name="btn_comment" value="Save">Comment</button>
                    </div>
                </form>
            </div>
        <?php } ?>
            <hr>
            <h5 class="text-muted">Comments</h5>
            <?php 
                if(isset($_GET["id"])){
                    $PostId = $_GET["id"];
                    $_SESSION["PostId"] = $PostId;

                    $sql = "SELECT u.FullName, c.comment, c.EnteredDate, c.CommentId, c.UserId from comments c left join user u on u.UserId = c.UserId left join post p on p.PostId = c.PostId WHERE c.IsDeleted=0 and c.PostId='".$PostId."' order by c.EnteredDate desc";
                    $sqlResult = mysqli_query($db,$sql);

                    while($row = mysqli_fetch_assoc($sqlResult)) {

             ?>
            <div class="pt-2">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h5 class="text-danger"><?php echo $row['FullName']; ?></h5>
                        <i style="float: right;font-size: 12px;">[<?php echo $row['EnteredDate']; ?>]</i>
                    </div>
                    <p><?php echo $row['comment']; ?></p>
                    <?php if($_SESSION["UserId"] == $row["UserId"]){ ?>
                    <a class="btn btn-danger btn-sm" style="float: right;" href="../action/act_deleteComment.php?id=<?php echo $row['CommentId'] ?>">DELETE</a>
                <?php } ?>
                </div>
            </div>
            </div>
        <?php }
    } ?>

        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
