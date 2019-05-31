<?php
    $l = '';
    if(isset($_GET['lang']) && $_GET['lang'] != 'en'){
        $l = '&lang='.$_GET['lang'];
    }
?>
<header>
    <h1>Website</h1>
    <nav>
        <a href="?<?=$l?>">Home</a>
        <a href="?page=about<?=$l?>">About</a>
        <a href="?page=contact<?=$l?>">Contact</a>
    </nav>
</header>