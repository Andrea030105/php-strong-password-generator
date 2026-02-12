<?php
function randomPass($length)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{};:,.<>?/|\\\'"';
    $password = "";
    while (strlen($password) < $length) {
        $randomChar = $chars[rand(0, strlen($chars) - 1)];
        $password .= $randomChar;
    }
    return $password;
}
