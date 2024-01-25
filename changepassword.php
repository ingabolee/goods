<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

include 'config.php';

$login_id = $_SESSION['id'];
$sql = "SELECT * FROM login WHERE Login_id = '$login_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$current_password = $row['Login_password'];

if(isset($_POST['submit'])){
    $old_password = md5($_POST['old_password']);
    $new_password = md5($_POST['new_password']);
    $cnew_password = md5($_POST['cnew_password']);

    if($old_password == $current_password && $new_password == $cnew_password){
        $sql = "UPDATE login SET Login_password='$new_password' WHERE Login_id='$login_id'";

        $result = mysqli_query($conn, $sql);
        if ($result){
        echo '<script>window.location.replace("dashboard.php")</script>';
        }
    }
    else {
        echo "Password Change NOT succesful.";
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
                        <h6 class="card-title mb-1">Change Password</h6>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Enter Old Password" type="password" name="old_password">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Enter New Password" type="password" name="new_password">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Confirm New Password" type="password" name="cnew_password">
                        </div>
                    </div>
                    
                    <div class="row row-sm mg-t-20">
                        <button name="submit" class="btn btn-primary btn-round">Change Password</button>
                        <a href="dashboard.php" class="btn btn-default btn-round btn-warning">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<?php endblock() ?>
<?php flushblocks(); ?>