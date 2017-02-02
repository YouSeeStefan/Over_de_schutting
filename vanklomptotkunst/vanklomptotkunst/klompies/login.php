<?php
session_start();
include_once 'connect.php';
$email = $_POST['email'];
$password = hash("SHA512", $_POST['password'] .$kaas . $pizza);
$query ="SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($mysqli,$query);
$num_rows = mysqli_num_rows($result);
if($num_rows >0){
  if($row = mysqli_fetch_assoc($result)){
      header('location:../index.php');
      $_SESSION["username"] = $row['username'];
      $_SESSION["email"] = $row['email'];
     
      
  }
}

    
    else{
    echo "<script>alert('email of wachtwoord klopt niet!');
    window.location='index.html'</script>";
    
  }

mysqli_free_result($result);
mysqli_close($mysqli);

?>



