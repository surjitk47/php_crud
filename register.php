<?php include('includes/header.php') ?>

<div class="container">
    <div class="row my-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2>Register</h2>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <div class="mb-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
                        </div>

                        <div class="mb-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
                        </div>

                        <div class="mb-3">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" placeholder="Enter Your Phone Number">
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                        </div>

                        <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/header.php') ?>