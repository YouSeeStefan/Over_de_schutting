<?php

require'../app/start.php';

$pages = $conn->query("
    SELECT id, label, title, slug
    FROM pages
    ORDER BY created
") ->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/list.php';
