<?php

require'../app/start.php';

$events = $conn->query("
    SELECT id, label, title, slug
    FROM events
    ORDER BY created
") ->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/list.php';
