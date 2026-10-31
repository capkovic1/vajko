<?php

$currentController = $_GET['c'] ?? 'home';
$currentAction = $_GET['a'] ?? 'index';

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Tricking Workshop</title>
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a href="<?= $link->url('home.index') ?>" class="logo">TRICKING<span>WORKSHOP</span></a>

        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="hamburger">&#9776;</label>

        <nav class="main-nav">
            <ul>
                <!-- Ak je controller 'eshop', pridaj triedu 'active', inak nič -->
                <li>
                    <a href="<?= $link->url('home.eshop') ?>" class="<?= ($currentAction === 'eshop') ? 'active' : '' ?>">
                        E-shop
                    </a>
                </li>
                <li><!-- Informácie sú aktívne, ak sme na domovskej stránke a akcia NIE JE e-shop (alebo je 'index') -->
                    <a href="<?= $link->url('home.info')?>" class="<?= ( $currentAction === 'info') ? 'active' : '' ?>">
                        Informácie
                    </a>
                </li>
            </ul>
            <a href="#registracia" class="btn btn-primary nav-btn">Prihlásiť sa</a>
        </nav>
    </div>
</header>

<main>
    <!-- Tu sa vložia dáta/obsah z HomeControlleru -->
    <?= $contentHTML ?? '' ?>
</main>

<footer class="site-footer">
    <div class="container footer-content">
        <div class="footer-info">
            <h3>Tricking Workshop</h3>
            <p>kontakt@trickingworkshop.sk</p>
            <p>+421 900 123 456</p>
        </div>
        <div class="footer-copy">
            <p>&copy; 2024 Tricking Workshop. Všetky práva vyhradené.</p>
        </div>
    </div>
</footer>
</body>
</html>