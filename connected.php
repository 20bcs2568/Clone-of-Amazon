<?php
session_start();

$con = mysqli_connect('localhost', 'root' , '');

mysqli_select_db($con, 'amazon');

$name = $_POST['fname'];
$mobile = $_POST['mobile_number'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$s = " select * from signup where Mobile = '$mobile'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows(result);

if($num == 1)
{
    echo" Mobile Number is already Taken";
}
else 
{
    if($password != $password2)
    {
        echo "Password Should be Same";
    }
    else
    {
    $reg = "insert into signup(Name, Mobile, Password) values ('$name', '$mobile', '$password')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
    }
}

?>