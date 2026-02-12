<?php
function randomPass($length)
{
    $pass = random_bytes($length);
    return bin2hex($pass);
}
