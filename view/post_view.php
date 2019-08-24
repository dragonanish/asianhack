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
                <div class="card-header">
                    <h2>My accident story</h2>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dignissimos eum laboriosam nobis
                        numquam perspiciatis quis quo quos rerum sapiente. Ab consectetur eius exercitationem
                        id ipsum magni nemo? Consequatur, dolorum
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nostrum obcaecati quo repellendus voluptate. A adipisci atque aut
                        fugiat incidunt inventore minima nihil perferendis quae, quibusdam saepe sunt voluptatibus voluptatum..</p>

                </div>
            </div>

            <div class="pt-4">
                <form action="../action/act_change.php" method="post">
                    <textarea type="text" id="report" name="report" class="form-control" placeholder="Add a public comment"></textarea>
                    <div class="pt-2 text-right"><button class="btn btn-outline-info btn-rounded pt-2" type="submit" name="btn_comment" value="Save">Comment</button>
                    </div>
                </form>
            </div>
            <hr>
            <h5 class="text-muted">Comments</h5>
            <div class="pt-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-danger">Alka Shilpakar</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, dolorem eaque facilis fugiat hic molestias odit perferendis quidem repellat rerum saepe, tempore vero. Asperiores dolorem libero molestiae quibusdam recusandae!</p>
                </div>
            </div>
            </div>
            <div class="pt-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-danger">Alka Shilpakar</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium, dolorem eaque facilis fugiat hic molestias odit perferendis quidem repellat rerum saepe, tempore vero. Asperiores dolorem libero molestiae quibusdam recusandae!</p>
                </div>
            </div>
            </div>

        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
