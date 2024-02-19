<?php 
$fruits = ["Mango", "Banana", "Melon", "Orange"];

echo $fruits[1];
echo "<br>";
echo "Jumlah buah = " . count($fruits);

echo "<ol>";
foreach ($fruits as $fruit) {
     echo "<li>Buah " . $fruit . "</li>";
}
echo "</ol>";

$fruits[] = "Avocado";
$fruit[2]  = "Straberry";

echo "<ol>";
foreach ($fruits as $i => $v) {
    echo "<li>Buah index ke-" . $i ." = " . $v . "</li>;
}
echo "</ol>";


?>