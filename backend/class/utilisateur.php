<?php

class Utilisateur
{

    private string $user_f_name;
    private string $user_l_name;
    private string $user_mail;
    private string $user_tel;
    private string $user_dtn;
    private string $user_country;
    private float $user_solde;



    public function __construct(
        string $userFname,
        string $userLname,
        string $userMail,
        string $userTel,
        string $userDtn,
        string $userCountry,
        float $userSolde,
    ) {

        $this->user_f_name = $userFname;
        $this->user_l_name = $userLname;
        $this->user_mail = $userMail;
        $this->user_tel = $userTel;
        $this->user_dtn = $userDtn;
        $this->user_country = $userCountry;
        $this->user_solde = $userSolde;
    }
    //getters
    public function getUsrFname(): string
    {
        return $this->user_f_name;
    }
    public function getUsrLname(): string
    {
        return $this->user_l_name;
    }
    public function getUsrMail(): string
    {
        return $this->user_mail;
    }
    public function getUsrTel(): string
    {
        return $this->user_tel;
    }
    public function getUsrDtn(): string
    {
        return $this->user_dtn;
    }
    public function getUsrCountry(): string
    {
        return $this->user_country;
    }
    public function getUsrSolde(): float
    {
        return $this->user_solde;
    }
    public function getFormattedSolde(): string
    {
        return number_format($this->user_solde, 2, ',', '') . ' €';
    }
}
