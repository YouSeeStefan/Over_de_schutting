<?php

require '../app/start.php';

if(isset($_GET['id'])){
    $deletePage = $conn->prepare("
    DELETE FROM pages
    WHERE id = :id
    ");
    
    $deletePage->execute(['id' => $_GET['id']]);
}
   header('Location: ' . BASE_URL . 'admin/list.php');