<?php
require "backend/security/sessionSecure.php";
require "include/title.php";
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="fr">

<?php
require "include/head.php";
?>

<body>
    <header>
        <h1 class="header__title"><?= $main_title ?></h1>
        <nav class="header__nav">
            <ul class="nav__ul">
                <li class="nav__li">
                    <a class="nav__li--link" href="index.php">Home</a>
                </li>
                <li class="nav__li">
                    <a class="nav__li--link" href="backend/security/logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="vid__container">
            <video src="assets/video/vidOne.mp4" autoplay loop muted class="main__info--vid"></video>
        </div>
        <hr class="main__hr--A" />
        <hr class="main__hr--B" />
        <hr class="main__hr--C" />
        <section class="user__interface--container">
            <div class="interface__container--primary">
                <article class="identitie__infos">
                    <hgroup class="identitie_name--group">
                        <h2><?= $_SESSION["user_data"]["usr_first_name"] ?></h2>
                        <h2><?= $_SESSION["user_data"]["usr_last_name"] ?></h2>
                    </hgroup>
                    <p><i class="fa-solid fa-envelope"></i> <?= $_SESSION["user_data"]["usr_mail"] ?></p>
                    <p><i class="fa-solid fa-phone"></i> <?= $_SESSION["user_data"]["usr_tel"] ?></p>
                    <p><i class="fa-solid fa-cake-candles"></i> <?= $_SESSION["user_data"]["usr_dtn"] ?></p>
                    <p><i class="fa-solid fa-location-dot"></i> <?= $_SESSION["user_data"]["usr_location"] ?></p>
                </article>
                <div class="solde__utilisateur">
                    <h4>Votre solde</h4>
                    <p><?= $_SESSION["user_data"]["usr_solde"] ?></p>
                </div>
                <article class="transaction__infos">
                    <h2>Historique des transactions</h2>
                    <div class="transaction__listing">

                    </div>
                </article>
            </div>
        </section>
        <hr class="main__hr--C" />
        <hr class="main__hr--B" />
        <hr class="main__hr--A" />
    </main>
    <footer>
        <div class="foot__container">
            <strong class="copyright">© by Script'Enjoyer</strong>
            <aside class="foot__container--sub">
                <img src="assets/image/securite-internet.png" alt="pageprotect">
                <caption class="foot__caption">Protected page</caption>
                <img src="assets/image/qualite.png" alt="certified">
                <caption class="foot__caption">Certified</caption>
            </aside>
        </div>
    </footer>
</body>

</html>