<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

var_dump($_GET);

if(empty($_GET["name"]) || empty($_GET["mail"]) || empty($_GET["age"])) {
    echo "Errore! Dati non forniti";
} else if (strlen($_GET["name"]) < 3) {
    echo "Accesso Negato - Lunghezza name inferiore a tre caratteri";
} else if (strpos($_GET["mail"], ".") === false || strpos($_GET["mail"], "@") === false) {
    echo "Accesso negato - mail errata";
} else if (is_numeric($_GET["age"]) === false) {
    echo "Accesso negato - formato età errato";
} else {
    echo "Accesso riuscito";
};

?>
