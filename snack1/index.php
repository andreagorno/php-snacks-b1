<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 

$giornata1 = [
    0 => [
        "home" => "Olimpia Milano",
        "guest" => "Bennet Cantu",
        "home_points" => "55",
        "guest_points" => "60"
    ],
    1 => [
        "home" => "Segafredo Bologna",
        "guest" => "DeLonghi Treviso",
        "home_points" => "85",
        "guest_points" => "57"
    ],
    2 => [
        "home" => "Dolomiti Energia Trento",
        "guest" => "Fortitudo Bologna",
        "home_points" => "72",
        "guest_points" => "75"
    ],
    3 => [
        "home" => "Enel Brindisi",
        "guest" => "Monstepaschi Siena",
        "home_points" => "59",
        "guest_points" => "93"
    ],
]; 

// var_dump($giornata1);

echo "<ul>";
for ($i = 0; $i < count($giornata1); $i++) {
    echo "<li>";

    echo $giornata1[$i]["home"] . " - " . $giornata1[$i]["guest"] . " / " . $giornata1[$i]["home_points"] . " - " . $giornata1[$i]["guest_points"];

    echo "</li>";
}
 echo "</ul>";
?>
