<?php
session_start();
require_once "backend/connection/db_connection.php";
require "backend/class/utilisateur.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["log"])) {
        if (!empty($_POST["user_log_mail"]) && !empty($_POST["user_log_pass"])) {

            $mail_log_user = filter_var($_POST["user_log_mail"], FILTER_VALIDATE_EMAIL);
            $pass_log_user = htmlspecialchars($_POST["user_log_pass"]);
            // vérifie si l'agence existe
            $data_usr_verif = $bdd->prepare("SELECT * FROM users WHERE user_mail = ?");
            $data_usr_verif->execute([$mail_log_user]);

            if ($data_usr_verif->rowCount() > 0) {

                // on vérifie si les mot de passe rentrer par l'agence correspond avec ceux de la database
                $users_infos = $data_usr_verif->fetch();
                $passdb = $users_infos['user_pass'];
                if (password_verify($pass_log_user, $passdb)) {

                    $my_user = new Utilisateur(
                        $users_infos['user_id'],
                        $users_infos['user_f_name'],
                        $users_infos['user_l_name'],
                        $users_infos['user_mail'],
                        $users_infos['user_tel'],
                        $users_infos['user_dtn'],
                        $users_infos['user_country'],
                        $users_infos['user_solde']
                    );
                    $_SESSION["user_Auth"] = true;
                    $_SESSION['user_data'] = [
                        "usr_id" => $my_user->getUsrId(),
                        "usr_first_name" => $my_user->getUsrFname(),
                        "usr_last_name" => $my_user->getUsrLname(),
                        "usr_mail" => $my_user->getUsrMail(),
                        "usr_tel" => $my_user->getUsrTel(),
                        "usr_dtn" => $my_user->getUsrDtn(),
                        "usr_location" => $my_user->getUsrCountry(),
                        "usr_solde" => $my_user->getFormattedSolde(),
                    ];

                    header("Location: profile.php");
                    exit;
                }
            }
        }
    }
}
