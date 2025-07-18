<?php
include_once 'dbConnection.php';
ob_start();

$name = ucwords(strtolower(stripslashes(addslashes($_POST['name']))));
$gender = stripslashes(addslashes($_POST['gender']));
$email = stripslashes(addslashes($_POST['email']));
$college = stripslashes(addslashes($_POST['college']));
$mob = stripslashes(addslashes($_POST['mob']));
$password = md5(stripslashes(addslashes($_POST['password'])));

// Check if the email already exists in the database
$q2 = mysqli_query($con, "SELECT * FROM user WHERE email = '$email'");
if (mysqli_num_rows($q2) > 0) {
    // Email already registered
    header("location:index.php?q7=Email Already Registered!!!");
} else {
    // Insert the new user into the database
    $q3 = mysqli_query($con, "INSERT INTO user (name, gender, college, email, mob, password) 
                              VALUES ('$name', '$gender', '$college', '$email', '$mob', '$password')");
    if ($q3) {
        // Start session and redirect to account page
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $name;
        header("location:account.php?q=1");
    } else {
        // Handle insertion error
        header("location:index.php?q7=Error in registration. Please try again!");
    }
}

ob_end_flush();
?>
