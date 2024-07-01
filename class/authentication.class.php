<?php

class Authentication {
    private $user_id;
    private $user_logged = false;

    public function getUserId() {
        return $this->user_id;
    }

    public function getUserLogged() {
        return $this->user_logged;
    }

    public function getStatusUser() {}
    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function setUserLogged($user_logged) {
        $this->user_logged = $user_logged;
    }

    public function save() {
        $cookie_name = 'PHPSESSID';
        $cookie_value = session_id();
        setcookie($cookie_name, $cookie_value, time() + (300 * 24 * 60 * 60));
    }
}