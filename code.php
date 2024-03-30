<?php include('dbconfig.php') ?>

<?php

if (isset($_POST['register_btn'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO register (fname,lname,phone,email,password) VALUES (' $fname','$lname','$phone','$email',' $password')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        // echo "Registerd Successfully!";  
        header('location: index.php');
    } else {
        // echo "Something Went Wrong!";
        header('location: register.php');
    }
}

if (isset($_POST['register_update_btn'])){

    $update_id = $_POST['edit_id'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query_update = "UPDATE register SET fname ='$fname', lname='$lname', phone='$phone', email='$email', password='$password' WHERE id='$update_id' ";
    $query_update_run = mysqli_query($conn, $query_update);

    if($query_update_run){
        // echo "Data Updated";
        header('location: index.php');
    }else{
        // echo "Data Not Updated";
        header('location: index.php');
    }

}

if(isset($_POST['register_delete_btn'])){
        
    $delete_id = $_POST['delete_id'];

    $reg_query = "DELETE FROM register WHERE id='$delete_id' ";
    $reg_query_run = mysqli_query($conn, $reg_query);

    if($reg_query_run){
        // echo "Data Deleted"; 
        header('location: index.php');
    }else{
        // echo "Data Not Deleted";
        header('location: index.php');
    }
}