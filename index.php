<?php include('includes/header.php') ?>
<?php include('dbconfig.php') ?>


<div class="container">
    <div class="row py-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2>Php Crud
                    </h2>
                    <h2><a href="register.php" class="btn btn-primary">Register/ Add </a></h2>
                </div>
                <div class="card-body">

                    <?php
                    $register = "SELECT * FROM register";
                    $register_run =  mysqli_query($conn, $register);

                    if (mysqli_num_rows($register_run) > 0) {
                        ?>
                     
                            
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">EDIT</th>
                                <th scope="col">DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php    while ($reg_row = mysqli_fetch_array($register_run)) { ?>
                            <tr>
                                <th scope="row"><?php echo $reg_row['id']; ?></th>
                                <td><?php echo $reg_row['fname']; ?></td>
                                <td><?php echo $reg_row['lname']; ?></td>
                                <td><?php echo $reg_row['email']; ?></td>
                                <td><?php echo $reg_row['password']; ?></td>
                                <td><?php echo $reg_row['phone']; ?></td>
                                <td> <a href="register-edit.php?id=<?php echo $reg_row['id']; ?>" class="btn btn-info">Edit </a></td>
                                <td> 

                                <form action="code.php" method="POST">
                                    <input type="hidden" name="delete_id" value="<?php echo $reg_row['id']; ?>">
                                    <button type="submit" name="register_delete_btn"  class="btn btn-danger">Delete</button>
                                </form>   
                               
                            </tr>
                            <?php
                        }   
                    } else {
                        echo "No record Found";
                    }

                    ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/header.php') ?>