<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 


$randomArray = [];


$i = 0;
while (count($randomArray) < 15) {
    $randomNumber = rand(1, 20);

    if (in_array($randomNumber, $randomArray) == false) {
        $randomArray[] = $randomNumber;
    }

    $i++;
}

 var_dump($randomArray);

?>
