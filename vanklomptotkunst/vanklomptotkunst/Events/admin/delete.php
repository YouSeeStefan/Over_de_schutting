<?php

require '../app/start.php';

if(isset($_GET['id'])){
    $deleteevent = $conn->prepare("
    DELETE FROM events
    WHERE id = :id
    ");
    
    $deleteevent->execute(['id' => $_GET['id']]);
}
   header('Location: ' . BASE_URL . 'admin/list.php');