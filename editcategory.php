<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

$Category_id = $_GET["id"];
$sql = "SELECT * FROM categories WHERE Category_id = '$Category_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $Category_name = $_POST['Category_name'];
    $Category_desc = $_POST['Category_desc'];

    $sql = "UPDATE categories SET Category_name='$Category_name', Category_desc='$Category_desc' WHERE Category_id='$Category_id'";

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
                        <h6 class="card-title mb-1">Edit Category</h6>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Category Name" type="text" name="Category_name" value="<?php echo $row['Category_name'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Description" type="text" name="Category_desc" value="<?php echo $row['Category_desc'];?>">
                        </div>
                    </div>
                    
                    
                    <div class="row row-sm mg-t-20">
                        <button name="submit" class="btn btn-warning btn-round">Edit Category</button>
                        <a href="category.php" class="btn btn-default btn-round btn-primary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<?php endblock() ?>
<?php flushblocks(); ?>