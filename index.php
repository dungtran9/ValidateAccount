<?php

function validateAccount($str)
{
    $regexp = '/^[_a-z0-9]{6,}$/';
    if (preg_match($regexp, $str)) {
        echo ("Account hop le");
    } else {
        echo ("Account khong hop le ");
    }
}
validateAccount("12345");