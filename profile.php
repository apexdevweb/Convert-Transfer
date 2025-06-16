<?php
require "backend/security/sessionSecure.php";
require "backend/script/solde/solde.php";
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
            <div class="interface__container--primary">
                <?php
                if (isset($soldeMsg)) {
                ?>
                    <h5 class="success__msg"><?= $soldeMsg ?></h5>
                <?php
                }
                ?>
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
                    <ul class="transac__options">
                        <li>
                            <a href="transfert.php" class="transac__options--items">Transfert <i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                        <li>
                            <a href="contacts.php" class="transac__options--items">Bénéficiaires <i class="fa-solid fa-users"></i></a>
                        </li>
                        <li>
                            <a href="stats.php" class="transac__options--items">Statistiques <i class="fa-solid fa-chart-line"></i></a>
                        </li>
                    </ul>
                    <h2>Historique des transactions</h2>
                    <div class="transaction__listing" id="listing">
                    </div>
                </article>
                <fieldset class="founds__field">
                    <legend>Ajouter des fonds</legend>
                    <form method="POST" id="formfound">
                        <label for="cash_device">Choix de la devise</label>
                        <select name="cash_device" id="devicetype">
                            <option value="USD">USD - United States Dollar</option>
                            <option value="EUR">EUR - Euro</option>
                            <option value="JPY">JPY - Japanese Yen</option>
                            <option value="GBP">GBP - British Pound Sterling</option>
                            <option value="AUD">AUD - Australian Dollar</option>
                            <option value="CAD">CAD - Canadian Dollar</option>
                            <option value="CHF">CHF - Swiss Franc</option>
                            <option value="CNY">CNY - Chinese Yuan</option>
                            <option value="SEK">SEK - Swedish Krona</option>
                            <option value="NZD">NZD - New Zealand Dollar</option>
                            <option value="MXN">MXN - Mexican Peso</option>
                            <option value="SGD">SGD - Singapore Dollar</option>
                            <option value="HKD">HKD - Hong Kong Dollar</option>
                            <option value="NOK">NOK - Norwegian Krone</option>
                            <option value="KRW">KRW - South Korean Won</option>
                            <option value="TRY">TRY - Turkish Lira</option>
                            <option value="INR">INR - Indian Rupee</option>
                            <option value="RUB">RUB - Russian Ruble</option>
                            <option value="BRL">BRL - Brazilian Real</option>
                            <option value="ZAR">ZAR - South African Rand</option>
                            <option value="DKK">DKK - Danish Krone</option>
                            <option value="PLN">PLN - Polish Zloty</option>
                            <option value="TWD">TWD - New Taiwan Dollar</option>
                            <option value="THB">THB - Thai Baht</option>
                            <option value="MYR">MYR - Malaysian Ringgit</option>
                            <option value="IDR">IDR - Indonesian Rupiah</option>
                            <option value="CZK">CZK - Czech Koruna</option>
                            <option value="HUF">HUF - Hungarian Forint</option>
                            <option value="ILS">ILS - Israeli New Shekel</option>
                            <option value="CLP">CLP - Chilean Peso</option>
                            <option value="PHP">PHP - Philippine Peso</option>
                            <option value="AED">AED - United Arab Emirates Dirham</option>
                            <option value="COP">COP - Colombian Peso</option>
                            <option value="SAR">SAR - Saudi Riyal</option>
                            <option value="RON">RON - Romanian Leu</option>
                            <option value="PKR">PKR - Pakistani Rupee</option>
                        </select>
                        <input type="number" name="solde_quantity" placeholder="Montant">
                        <input type="submit" value="+" name="addsold">
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
</body>

</html>