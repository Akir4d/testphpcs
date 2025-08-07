<?php
$utente = "Carlo";
// Ho cerco di carlo l'hash md5 nel database e ho questo risultato
$hashdb = "6e6bc4e49dd477ebc98ef4046c067b5f";
$password = $_GET['password'];
echo "<h1>";
if (md5($password) == $hashdb || $password == $hashdb) {
    echo "Sei loggato";
} else {
    echo "Non sei loggato";
}
echo "</h1>";