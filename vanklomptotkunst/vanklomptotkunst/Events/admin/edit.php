<?php 

require'../app/start.php';

if(!empty($_POST)){
    $id = $_POST['id'];
    $label = $_POST['label'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $body = $_POST['body'];
    
    $updateevent = $conn->prepare("
      UPDATE events
      SET
      label = :label,
      title = :title,
      slug = :slug,
      body = :body,
      updated = NOW()
    WHERE id = :id

    ");
    
    $updateevent ->execute([
       'id' => $id,
       'label' => $label,
       'body' => $body,
       'title' => $title,
       'slug' => $slug,
    ]);
    
    header('Location: ' . BASE_URL . '/admin/list.php');
}

if(!isset($_GET['id'])){
    header('Location: ' . BASE_URL . '/admin/list.php');
    die();
}

$event = $conn->prepare("
    SELECT id, title, label, body, slug
    FROM events
    WHERE id = :id
");

$event->execute(['id' => $_GET['id']]);

$event = $event->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/edit.php';