<?php

session_start();

$con = mysqli_connect('localhost', 'root' , '');

mysqli_select_db($con, 'login');

// if($conn == false)
// {
//     dir('Error: Cannot connect');
// }

function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

$name = validate($_POST['fname']);
$user = validate($_POST['mobile_number']);
$password = validate($_POST['password']);
$password_again = validate($_POST['password_again']);

echo"$name ->";
echo"$user ->";
echo"$password ->";
echo"$password_again ->";

$check = "select * from signup where Username = '$user'";

$result2 = mysqli_query($con, $check);


$num = mysqli_num_rows($result2);

if($num == 1)
{
    echo" Mobile Number is already Taken";
}
else 
{
 if($password != $password_again)
    {
        echo "Password Should be Same";
    }
    else
    {
    $reg = "insert into signup(Name, Mobile, Password) values ('$name', '$user', '$password')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
    }

}

?> 
