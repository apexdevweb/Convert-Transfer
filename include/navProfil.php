<h1 class="header__title"><?= $main_title ?></h1>
<?php
if (isset($_SESSION['user_data']['usr_last_name'])) {
?>
    <nav class="header__nav">
        <ul class="nav__ul">
            <li class="nav__li">
                <p class="nav__li--link-name">Bonjour: <?= $_SESSION['user_data']['usr_last_name'] ?></p>
            </li>
            <li class="nav__li">
                <a class="nav__li--link" href="transfert.php">Transfert <i class="fa-solid fa-arrow-right"></i></a>
            </li>
            <li class="nav__li">
                <a class="nav__li--link" href="contacts.php">Bénéficiaires <i class="fa-solid fa-users"></i></a>
            </li>
            <li class="nav__li">
                <a class="nav__li--link" href="stats.php">Statistiques <i class="fa-solid fa-chart-line"></i></a>
            </li>
            <li class="nav__li">
                <a class="nav__li--link" href="profile.php">Profil <i class="fa-solid fa-user"></i></a>
            </li>
            <li class="nav__li">
                <a class="nav__li--link" href="backend/security/logout.php">Logout</a>
            </li>
        </ul>
    </nav>
<?php
}
?>