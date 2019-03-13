<?php

#cifrar contraseña
$password = "root";
echo password_hash($password, PASSWORD_BCRYPT);
$passwordCifrado = crypt($password. $semilla);
$semilla = '$2y$10$QaYAnByc.81J/MLbp5Prv.Z6/OFRnuVfnGbZiVadUusq83azID28K$1$6SYaNtAf$9Gyx8PGSksPR0X35Zs9rl.'
echo crypt($password, $semilla);
if (crypt($password, $semilla) == $passwordCifrado);
echo "coinciden";
else {
    echo "error";
}

?>
