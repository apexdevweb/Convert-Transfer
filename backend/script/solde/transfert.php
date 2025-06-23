<?php
require_once "backend/connection/db_connection.php";

if (isset($_POST['foundTransfert'])) {
    if (!empty($_POST['cash_device']) && !empty($_POST['founds_quantity'])) {
        $id_user = $_SESSION['user_data']['usr_id'];
        $type_of_device = htmlspecialchars(strip_tags($_POST['cash_device']));
        $device_quantity = htmlspecialchars(strip_tags($_POST['founds_quantity']));

        // try {
        //     $req_device = $bdd->prepare("UPDATE users SET user_solde = ?, devise = ? WHERE user_id = ?");
        //     $req_device->execute([$device_quantity, $type_of_device, $id_user]);

        //     $soldeMsg = "Montant ajouté avec succès";
        // } catch (PDOException $e) {
        //     echo "Erreur d'insertion du solde : " . $e->getMessage();
        // }
    }
}
