 <?php
$hostname="localhost";
$username="root";
$password="";
$database="authantication";
$connection = mysqli_connect('localhost','root','','authantication');
if($connection)
{
    echo"connection successfull";
}
else{
    echo "ERROR";
} 


mysqli_select_db($connection,'authantication');
$firstname = $_POST['first_name'];
$lastname = $_POST['first_name'];
$email = $_POST['email'];
$pass = $_POST['password'];
// $c_pass = $_POST['conform_password'];


$data = "INSERT INTO credentials (FNAME,LNAME,EMAIL,PASSWD) VALUES ('$firstname', '$lastname', '$email','$pass')";
// $data = "INSERT INTO credentials (`FNAME`, `LNAME`, `EMAIL`, `PASSWD`,CPASS)  VALUES ('$firstname,'$lastname', '$email', '$pass')";
mysqli_query($connection,$data);
header('location:signupsuccess.php'); 
?>