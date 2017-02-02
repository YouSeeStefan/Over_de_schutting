<?php

require'app/start.php';

if(empty($_GET['event'])){
    $event = false;
} else{
    $slug = $_GET['event'];
    
    $event = $conn->prepare(" 
        SELECT *
        FROM events 
        WHERE slug = :slug
        LIMIT 1
    ");
    
    $event->execute(['slug' => $slug]);
    
    $event = $event->fetch(PDO::FETCH_ASSOC);  
    
    if($event){
        $event['created'] = new DateTime($event['created']);
        
        if($event['updated']){
            $event['updated'] = new DateTime($event['updated']);
        }
    }
}

require VIEW_ROOT . '/event/show.php';
?>