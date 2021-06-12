<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//Index Array

$cars = array("BMW", "BENZ", "AUDI");
echo $cars[1];

echo "<br>";
//Example@2

$my_cars = array("ferarri", 4000, 500.90);

var_dump($my_cars); // var_dump is a function that displays a structure an expression types and values

//Merging two Array using a php builtin Fnctiion of Array_merge
echo "<br>";

$cars = array_merge($cars, $my_cars);
print_r($cars);

echo "<br>";

// Associative Array

$course = array("PHP" => 100.50, "JS" => 120.10, "Python" => 200.08);
foreach ($course as $key => $value) {

    echo "my" . $key . "has" . $value . "milage <br>";
}

echo "<br>";

// Multi-demensional Array

$lusCars = array(
"Expensive" => array("Lanbogini", "Merceded", "Bentley"),
"Inexpensive" => array("camery", "Honda", "Acura")
);

echo $lusCars["Inexpensive"][0];






?>

</body>
</html>