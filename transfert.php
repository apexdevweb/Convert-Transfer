<?php
require "backend/security/sessionSecure.php";
require "include/title.php";
require "backend/script/solde/transfert.php";
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
                <fieldset class="transfert__field">
                    <legend>Transferer des fonds</legend>
                    <form method="POST" id="formfound">
                        <div class="transfert__sub-container">
                            <label for="transfert__contact">Choisir un contact</label>
                            <select name="transfert__contact" required>
                                <option value="..." selected>...</option>
                                <?php
                                foreach ($req_contact as $contacts) {
                                    if (isset($contacts)) {
                                ?>
                                        <option value=""><?= $contacts['user_f_name'] . " " . $contacts['user_l_name'] . " " . $contacts['user_country'] ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="transfert__sub-container">
                            <label for="cash_device">Choix de la devise</label>
                            <select name="cash_device" id="devicetype" required>
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
                        </div>
                        <div class="transfert__sub-container">
                            <input type="number" name="founds_quantity" placeholder="Montant">
                            <hr class="transfert__separate">
                            <input type="submit" value="Transfert" name="foundTransfert">
                        </div>
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