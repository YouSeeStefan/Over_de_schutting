<?php
session_start();
session_destroy();
header("Location: ../vanklomptotkunst/vanklomptotkunst/index.html");


echo "<script>alert('dit e-mail is al in gebruik');
   </script>";
?>