<?php

require 'app/start.php';

$events = $conn->query("
        SELECT id, label, slug
        FROM events
") ->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/home.php';