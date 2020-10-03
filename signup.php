<?php  
$showAlert = false;
$showError = false;
include 'dbconnection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // include 'partials/_dbconnect.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phno = $_POST["phno"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$salt = "emailphp";
$password_encrypted = sha1($password.$salt);
$cpassword_encrypted = sha1($cpassword.$salt);
$token=bin2hex(random_bytes(15));
if($password===$cpassword)
{
$sql = "INSERT INTO registration (name, email,phno, password,cpassword,token) 
VALUES ('$name', '$email','$phno', '$password_encrypted','$cpassword_encrypted','$token')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    else{
        // $showError = "Email Exist!";
            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Email Exist!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
    }
}
else{
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Password is not matching.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div> ';
}
}
if($showAlert){
$subject="Email Activation!";
$body="Hi, $name. Click here to activate your account!
http://localhost/SLF_INDIA/activate.php?token=$token";
$headers="From:shubhamagarwalguru@gmail.com";
if(mail( $email, $subject, $body, $headers)){
    include 'ac.php';
include 'index.php';
// header ("location:index.php");
}
else{
    echo "Email send Failed";
}
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
	}
?>
<?php
//  require 'index.php' 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel = "icon" href =  
"https://th.bing.com/th/id/OIP.ifmMp7QUSqnyp1wW6LATYwHaHa?w=165&h=180&c=7&o=5&pid=1.7" 
        type = "image/x-icon"> 
</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
