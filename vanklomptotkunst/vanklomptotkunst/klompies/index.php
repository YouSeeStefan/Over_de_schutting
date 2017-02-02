<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <title>kaas</title>
</head>

<body>
    <ul class="navbar">
        <li class="left"><a href="">Home</a></li>
        <li class="left"><a href="upload.html">Upload</a></li>
        <li class="right"><a href="logout.php">Logout</a></li>
        <li class="icon">
            <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
        </li>
    </ul>

    <form method="POST">
        <input list="countries" name="countries" class="list" />
        <datalist id="countries">
            <option value="Nieuw"></option>
            <option value="Oud"></option>
            <option value="A-Z"></option>
            <option value="Z-A"></option>
        </datalist>
        <input type="submit" name="submit" />
    </form>
    <form method="POST" action="search.php">
        <input type="text" name="search" placeholder="Search.."/>
    </form>
    <br>


    <?php
    session_start();
    include_once "connect.php";
    
    if(isset($_POST['search'])){
    $zoeken = $_POST['search'];
    $qry = "SELECT * FROM images";
    $rslt = mysqli_query($mysqli,$qry);
        
        
        if ($rslt->num_rows > 0){
            while($rw = $rslt->fetch_assoc()){  
            $mystring = $rw["title"];
            $findme   = $zoeken;
            if(strpos(" ".$mystring, $findme)){
                echo "<div class='" . $rw['id'] . "'>";
      echo "<div class='container'>";
      echo "<img src='".$rw["img"] ."' class='thumbimg'>";  
      echo "</div>";
      echo "</div>";
      echo "<div class='overlay'></div>";
      echo "<img src='".$rw["img"] ."' class='" . $rw['id'].$rw['id'] ." img'> <h1 class=' ". $rw['id'].$rw['id'] ." title'>" . $rw['title'] . "</h1>";
                    }
                
        }
    }
    }
    
    if(isset($_POST['submit'])) {
    $country = $_POST['countries'];
        if($country == "Nieuw"){
            $query = "SELECT * FROM images ORDER BY id";
        }
        else if($country == "Oud"){
             $query = "SELECT * FROM images ORDER BY id DESC ";
        }
        else if($country == "A-Z"){
             $query = "SELECT * FROM images ORDER BY title ASC ";
        }
        
         else if($country == "Z-A"){
             $query = "SELECT * FROM images ORDER BY title DESC ";
        }
        
        else if($country == ""){
             $query = "SELECT * FROM images ORDER BY rand()";
        }
}
        else {
            $query = "SELECT * FROM images ORDER BY rand()";
        }
        
    
    $result = mysqli_query($mysqli,$query);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            
      echo "<div class='" . $row['id'] . "'>";
      echo "<div class='container'>";
      echo "<img src='".$row["img"] ."' class='thumbimg'>";  
      echo "</div>";
      echo "</div>";
      echo "<div class='". $row['id'].$row['id'].$row['id'] ." overlay'></div>";
      echo "<img src='".$row["img"] ."' class='" . $row['id'].$row['id'] ." img'> <h1 class=' ". $row['id'].$row['id'] ." title'>" . $row['title'] . "</h1>";  
        ?>
        <script>
            $(".<?php echo $row['id'] ?>").click(function () {
                $(".<?php echo $row['id'].$row['id'].$row['id']  ?>").fadeIn();
                $(".<?php echo $row['id'].$row['id']  ?>").fadeIn();
                $(".<?php echo $row['title'] ?>").fadeIn();
            });

            $(".<?php echo $row['id'].$row['id'] ?>").click(function () {
                $(".<?php echo $row['id'].$row['id'].$row['id'] ?>").fadeOut();
                $(".<?php echo $row['id'].$row['id'] ?>").fadeOut();
                $(".<?php echo $row['title'] ?>").fadeOut();
            });
        </script>
        <?php
        
        
        
        
        }
                   
        
    }
    
 ?>
            <br>
</body>


<script>
    function myFunction() {
        document.getElementsByClassName("navbar")[0].classList.toggle("responsive");
    }
</script>

</html>