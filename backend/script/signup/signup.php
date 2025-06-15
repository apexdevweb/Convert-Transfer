<?php
require "backend/connection/db_connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["sign"])) {

        if (!empty($_POST["usr_fname"]) && !empty($_POST["usr_lname"]) && !empty($_POST["usr_mail"]) && !empty($_POST["usr_pass"]) && !empty($_POST["usr_confirm_pass"]) && !empty($_POST["usr_tel"]) && !empty($_POST["usr_dtn"]) && !empty($_POST["usr_country"])) {

            $user_first_name = htmlspecialchars(strip_tags($_POST["usr_fname"]));
            $user_last_name = htmlspecialchars(strip_tags($_POST["usr_lname"]));
            $user_email = filter_var($_POST["usr_mail"], FILTER_VALIDATE_EMAIL);
            $user_proto_pass = htmlspecialchars($_POST["usr_pass"]);
            $user_confirm_pass = htmlspecialchars($_POST["usr_confirm_pass"]);
            $user_phone = htmlspecialchars(strip_tags($_POST["usr_tel"]));
            $user_date_naissance = htmlspecialchars(strip_tags($_POST["usr_dtn"]));
            $user_location = htmlspecialchars(strip_tags($_POST["usr_country"]));

            if ($user_proto_pass === $user_confirm_pass) {
                $user_final_pass = password_hash($_POST["usr_pass"], PASSWORD_ARGON2ID);

                try {
                    $account_verif = $bdd->prepare("SELECT user_l_name FROM users WHERE user_l_name = ?");
                    $account_verif->execute([$user_last_name]);
                } catch (PDOException $e) {
                    echo "Erreur de vérification de compte" . $e->getMessage();
                }

                if ($account_verif->rowCount() == 0) {
                    try {
                        $req_sign = $bdd->prepare("INSERT INTO users (user_f_name,user_l_name,user_mail,user_pass,user_tel,user_dtn,user_country) VALUE (?,?,?,?,?,?,?)");
                        $req_sign->execute([$user_first_name, $user_last_name, $user_email, $user_final_pass, $user_phone, $user_date_naissance, $user_location]);

                        $succes_msg = "Inscription complèter avec succès veuiller vous connecter";
                        header("Location: index.php");
                        exit;
                    } catch (PDOException $e) {
                        echo "Erreur d'insertion des données " . $e->getMessage();
                    }
                } else {
                    $error_msg  = "Ce compte existe déjà";
                }
            } else {
                $error_msg  = "Les mots de passe ne correspondent pas";
            }
        } else {
            $error_msg = "Tous les champs doivent être remplis";
        }
    }
}
