<?php
$con=mysqli_connect("localhost","root","","Details_database");
if(mysqli_connect_errno()){
    printf("Connection failed:%s",mysqli_connect_errno());
    exit();
}
else
{
    $name=trim($_POST['name']);
    $gender=$_POST['gender'];
    $phno=trim($_POST['phno']);
    $email=$_POST['mail'];
    $pd=sha1($_POST['pd']);
    $query="INSERT INTO Data VALUES('$name','$gender','$phno','$email','$pd')";
    mysqli_query($con,$query);

    if(mysqli_error($con))
    {
        print(mysqli_error($con));
    }
    else
    {
        echo '<script>alert("SignUp is successful");</script>';
        echo '<script>window.location.href = "login.html";</script>';        
        exit();
}
}
?>