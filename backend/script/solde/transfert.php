<?php
require_once "backend/connection/db_connection.php";

$current_usr = $_SESSION['user_data']['usr_id'];

try {
    $req_contact = $bdd->prepare("SELECT user_f_name,user_l_name,user_country FROM users WHERE user_id != :current_usr ORDER BY user_id DESC");

    $req_contact->bindParam(':current_usr', $current_usr, PDO::PARAM_INT);

    $req_contact->execute();
} catch (PDOException $e) {
    echo "Erreur de selection des contacts" . $e->getMessage();
}


if (isset($_POST['foundTransfert'])) {
    if (!empty($_POST['cash_device']) && !empty($_POST['founds_quantity']) && !empty($_POST['transfert__contact'])) {

        $contact_transfert = htmlspecialchars(strip_tags($_POST['transfert__contact']));
        $type_of_device = htmlspecialchars(strip_tags($_POST['cash_device']));
        $device_quantity = htmlspecialchars(strip_tags(floatval($_POST['founds_quantity'])));

        $current_expeditor = $_SESSION['user_data']['usr_id'];

        try {

            $start_transac =  $bdd->beginTransaction();

            $req_transfert_expeditor = $bdd->prepare("SELECT user_solde FROM users WHERE users_id = ?");
            $req_transfert_expeditor->execute([$current_expeditor]);

            $expeditor_solde = $req_transfert_expeditor->fetchColumn();

            if ($expeditor_solde === false) {
                throw new Exception("Expediteur introuvable");
            }

            if ($expeditor_solde < $device_quantity) {
                throw new Exception("Solde insuffisant");
            }


            $debitor = $bdd->prepare("UPDATE users SET user_solde = user_solde - ? WHERE user_id = ?");
            $debitor->execute([$device_quantity, $current_expeditor]);


            $creditor = $bdd->prepare("UPDATE users SET user_solde = user_solde + ?, devise = ? WHERE user_id = ?");
            $creditor->execute([$device_quantity, $type_of_device,  $contact_transfert]);

            $validate_transac = $bdd->commit();

            $soldeMsg = "Transfert executer avec succès";
        } catch (PDOException $e) {

            $cancel_transac = $bdd->rollBack();

            echo "Erreur de transaction : " . $e->getMessage();
        }
    }
}
