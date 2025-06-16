<?php
require "backend/security/sessionSecure.php";
require "include/title.php";
?>
<!DOCTYPE html>
<html lang="fr">

<?php
require "include/head.php";
?>

<body>
    <header>
        <?php
        include "include/navProfil.php";
        ?>
    </header>
    <main>
        <div class="vid__container">
            <video src="assets/video/vidOne.mp4" autoplay loop muted class="main__info--vid"></video>
        </div>
        <hr class="main__hr--A" />
        <hr class="main__hr--B" />
        <hr class="main__hr--C" />
        <section class="user__interface--container">

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