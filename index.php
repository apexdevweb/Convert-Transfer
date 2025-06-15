<?php
require_once "backend/script/signup/signup.php";
require_once "backend/script/login/login.php";
require "include/title.php";
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
          <a class="nav__li--link" href="#home">Home</a>
        </li>
        <li class="nav__li">
          <a class="nav__li--link" href="#about">Signup</a>
        </li>
        <li class="nav__li">
          <a class="nav__li--link" href="#contact">Login</a>
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
    <section id="home" class="main_content">
      <div class="home__container">
        <h2 class="main__subtitle">Home</h2>
        <article class="main__article--container">
          <p class='main__info--txt'><span>B</span>ienvenue sur <strong>Convert & Transfer</strong> qui a été développé
            en <strong>HTML5</strong>,<strong>SASS</strong>,<strong>JAVASCRIPT</strong>, <strong>PHP</strong> et
            <strong>MYSQL</strong> afin de
            faciliter les conversions et
            transferts en
            seulement
            quelques clics, et
            géré vos
            conversions et transferts à partir de votre profil, <strong>veuillez vous connecter</strong> pour pouvoir en
            faire
            usage.
          </p>
        </article>
      </div>
    </section>
    <section id="about" class="main_content">
      <div class="signup__container">
        <h2 class="main__subtitle">Signup</h2>
        <?php
        if (isset($error_msg)) {
        ?>
          <p><?= $error_msg ?></p>
        <?php
        }
        ?>
        <fieldset class="sign__field">
          <legend>Inscription</legend>
          <form method="POST">
            <input type="text" placeholder="Nom" name="usr_fname">
            <input type="text" placeholder="Prenom" name="usr_lname">
            <input type="email" placeholder="E-mail" name="usr_mail">
            <input type="password" placeholder="Password" minlength="8" maxlength="16" name="usr_pass">
            <input type="password" placeholder="confirm-password" name="usr_confirm_pass">
            <input type="tel" placeholder="tel" name="usr_tel">
            <label for="dtnsce">Votre date de naissance</label>
            <input type="date" placeholder="date de naissance" name="usr_dtn">
            <label for="usr_country">Pays de résidence</label>
            <select name="usr_country" id="">
              <option value="..." selected>...</option>
              <option value="France">France</option>
              <option value="Belgique">Belgique</option>
              <option value="Allemagne">Allemagne</option>
              <option value="Hollande">Hollande</option>
              <option value="Luxembourg">Luxembourg</option>
              <option value="Angleterre">Angleterre</option>
            </select>
            <input type="submit" value="Signup" name="sign">
          </form>
        </fieldset>
      </div>
    </section>
    <section id="contact" class="main_content">
      <div class="login__container">
        <h2 class="main__subtitle">Login</h2>
        <fieldset class="sign__field">
          <legend>Connexion</legend>
          <form method="POST">
            <input type="email" placeholder="E-mail" name="user_log_mail">
            <input type="password" placeholder="Password" name="user_log_pass">
            <input type="submit" value="Connexion" name="log">
          </form>
        </fieldset>
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
  <script src="assets/js/swapContent.js" defer></script>
</body>

</html>