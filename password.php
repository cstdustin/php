<?php
    $hashPassword = password_hash("0000", PASSWORD_BCRYPT);

    echo $hashPassword;

    if (password_verify("0000", $hashPassword))
    {
    echo '<br>Password Match';
    }
    else
    {
    echo '<br>Password Not Match';
    }
?>