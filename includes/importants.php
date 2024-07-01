<?php

session_start([
    'cookie_path' => '/',
    'cookie_lifetime' => 300,
    'cookie_secure' => true,
    'cookie_httponly' => true,
    'cookie_samesite' => 'lax',
]);