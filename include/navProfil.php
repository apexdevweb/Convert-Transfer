<h1 class="header__title"><?= $main_title ?></h1>
<nav class="header__nav">
    <ul class="nav__ul">
        <li class="nav__li">
            <p class="nav__li--link">Bonjour: <?= $_SESSION['user_data']['usr_last_name'] ?></p>
        </li>
        <li class="nav__li">
            <a class="nav__li--link" href="backend/security/logout.php">Logout</a>
        </li>
    </ul>
</nav>