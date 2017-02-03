<?php
session_start();
if (isset($_SESSION['userSession'])!="")
{
    header("Location: home.php");
}

include_once 'connect.php';

    // If the values are posted, insert them into the database.
  if (isset($_POST['submit'])) {
  $name = $_POST['name']; 
  $username = $_POST['username'];
  $email = $_POST['email'];
  $sql="SELECT * FROM users WHERE email='$email' AND username='$username'";
  $password = $password = hash("SHA512", $_POST['password'] .$kaas . $pizza);
  $result = mysqli_query($mysqli,$sql);
  $num_rows = mysqli_num_rows($result);
 }

if($num_rows >0){
  echo "<script>alert('dit e-mail is al in gebruik');
    window.location='registratie.html'</script>"; 
}

else {
$query =" INSERT INTO users (name, username, password, email)
VALUES ('$name', '$username', '$password', '$email')";
 
    if ($mysqli->query($query)=== TRUE){
        echo "<script>alert('account is geregistreerd!');
    window.location='index.html'</script>";
    }else
    {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
}

?>