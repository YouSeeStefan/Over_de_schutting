<?php

require '../app/start.php';

if(!empty($_POST)){
    $label = $_POST['label'];
    $title = $_POST['title'];
    $slug  = $_POST['slug'];
    $body  = $_POST['body'];
        
    $insertevent = $conn->prepare("
       INSERT INTO events(label, title, slug, body, created)
       VALUES (:label, :title, :slug, :body, NOW())
    ");
    
    $insertevent->execute([
        'label' => $label,
        'title' => $title,
        'slug'  => $slug,
        'body'  => $body,
    ]);
        
    header('Location: ' . BASE_URL . '/admin/list.php');
}

require VIEW_ROOT . '/admin/add.php';