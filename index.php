<?php

include 'app/start.php';
$pages = $db-> query("
    SELECT id, label, slug
    FROM pages
")->fetchAll(PDO::FETCH_ASSOC);
echo'';
require VIEW_ROOT.'/home.php';
?>