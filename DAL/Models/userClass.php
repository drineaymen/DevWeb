<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 26/11/2017
 * Time: 14:36
 */

class userClass
{
    public $id;
    public $login;
    public $Mdp;
    public $mdpSalt;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }
    
    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->Mdp;
    }

    /**
     * @param mixed $Mdp
     */
    public function setMdp($Mdp)
    {
        $this->Mdp = $Mdp;
    }

    /**
     * @return mixed
     */
    public function getMdpSalt()
    {
        return $this->mdpSalt;
    }

    /**
     * @param mixed $mdpSalt
     */
    public function setMdpSalt($mdpSalt)
    {
        $this->mdpSalt = $mdpSalt;
    }
}