<?php

abstract class Auth_Adapter_Abstract {

    protected $user = null;
    protected $password = null;

    public function getUser() {
        return $this->user;
    }

    function is_sha1($str) {
        return (bool) preg_match('/^[0-9a-f]{40}$/i', $str);
    }
    public function setUser($user) {
		$no_chars = array("!", "/'", '"', ".", "-", " ", "&", ";", "%", "|");
		$user=str_replace($no_chars, '', $user);
        $this->user = $user;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($senha) {
		$no_chars = array("!", "/'", '"', ".", "-", " ", "&", ";", "%", "|");
		$senha=str_replace($no_chars, '', $senha);
        if($this->is_sha1($senha))
        $this->password = $senha;
        else
        $this->password = sha1($senha);
    }

    abstract public function autenticate();

}