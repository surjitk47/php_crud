<?php include('includes/header.php') ?>
<?php include('dbconfig.php') ?>

<?php
$id = $_GET['id'];
$register_query = "SELECT * FROM register WHERE id='$id'";
$register_query_run = mysqli_query($conn, $register_query);

if(mysqli_num_rows($register_query_run) > 0)
{
    while($row = mysqli_fetch_array($register_query_run)){
        ?>
       
  

<div class="container">
    <div class="row my-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2>Register - Edit Page</h2>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                    <input type="hidden" class="form-control" name="edit_id" value="<?php  echo $row['id']; ?>">
                        <div class="mb-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name" value="<?php  echo $row['fname']; ?>">
                        </div>

                        <div class="mb-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="<?php  echo $row['lname']; ?>">
                        </div>

                        <div class="mb-3">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" value="<?php  echo $row['phone']; ?>">
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?php  echo $row['email']; ?>">
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="<?php  echo $row['password']; ?>">
                        </div>

                        <button type="submit" name="register_update_btn" class="btn btn-info">Update Data</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}

?>

<?php include('includes/header.php') ?>