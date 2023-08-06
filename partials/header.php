<?php 

$url = 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Julien Michon</title>
    <link rel="stylesheet" href="__DIR__/../ressources/styles/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300;400;700&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
</head>

<body>
    <header>
        <nav class="flex">
            <div class="img">
                <a href="index.php"><img src="./img/logo.png" alt=""></a>
            </div>
            <ul>
                <li><span>01.</span><a href=<?= strpos($url, 'index') == true ? '#about' : 'index.php';?>>A propos</a></li>
                <li><span>02.</span><a href=<?= strpos($url, 'index') == true ? '#xp' : 'index.php';?>>Experiences</a></li>
                <li><span>03.</span><a href=<?= strpos($url, 'index') == true ? '#jobs' : 'index.php';?>>Créations</a></li>
                <li><span>04.</span><a href=<?= strpos($url, 'index') == true ? '#design' : 'index.php';?>>Designs</a></li>
                <li><span>05.</span><a href=<?= strpos($url, 'index') == true ? '#contact' : 'index.php';?>>Contact</a></li>
                <a class="cv" href="__DIR__/../img/CV_MICHON_Julien.pdf" target="_blank">CV</a>
            </ul>
        </nav>
    </header>
    