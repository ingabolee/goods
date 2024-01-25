<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

include 'config.php';

if(isset($_POST['submit'])){
    $Category_name = $_POST['Category_name'];
    $Category_desc = $_POST['Category_desc'];

    $sql = "INSERT INTO categories (Category_name, Category_desc) 
                VALUES ('$Category_name', '$Category_desc')";

    $result = mysqli_query($conn, $sql);
    if ($result){
        echo '<script>window.location.replace("category.php")</script>';
    }
}

?>


<?php startblock('student') ?>
   

<form method="POST" action="">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="card-title mb-1">Add Goods Category</h6>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Category Name" type="text" name="Category_name">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Description" type="text" name="Category_desc">
                        </div>
                    </div>
                    
                    
                    <div class="row row-sm mg-t-20">
                        <button name="submit" class="btn btn-primary btn-round">Add Category</button>
                        <a href="category.php" class="btn btn-default btn-round btn-warning">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<?php endblock() ?>
<?php flushblocks(); ?>