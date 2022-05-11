<?php
// error_reporting(0); it is use to hide warning
$servername="localhost";
$username="root";
$password="";
$dbname="form";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['register']))
{
    if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['phone']) && !empty($_POST['password']) && !empty($_POST['cpassword']) && !empty($_POST['gender']) && !empty($_POST['email']) && !empty($_POST['address'])){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    // $query="insert into form(name,email,phone,password,gender,education) values('$name','$email','$phone','$password','$gender','$education')";
    $query="insert into responsive(`fname`,`lname`,`phone`,`password`,`cpassword`,`gender`,`email`,`address`) VALUES ('$firstname','$lastname','$phone','$password','$cpassword','$gender','$email','$address')";
    $run=mysqli_query($conn,$query) or die(mysqli_error());
    if($run){
        echo "form submitted successfully";
    }
    else{
        echo "form is not submitted";
        // echo "form is not submitted".mysqli_connect_error() it is found to what error in your code;
    }
}
else{
    echo "all fields required";
}
}
?>