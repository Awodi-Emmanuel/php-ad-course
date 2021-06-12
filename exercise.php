<?php

//create two variable of 8, 7 assign it to a new variable of an output of 5

$x = 8;
$y  = 7;

$z = ($x + $y) * 5;

echo "we've the total sum of" . $z;
echo "<br>";

// exercise two
$price = 100;
$vat = 0.2;

$totalPrice = ($price * $vat) + $price;

echo "price : " . $price;
echo "<br>";
echo "vat : " . $vat;
echo "<br>";
echo "total price :" . $totalPrice;

echo "<br>";


//Creating a multi-dimesnsional arrays and looping through them using  foreach with  a key and value

$countries = array("Lagos" => "Ikeja", "Rivers" => "Port-High-Cut", "Anambra" => "Oka", "Kogi" => "Lokoja", "Benue" => "Makudi");

foreach ($countries as $key => $value) {
    echo  "This are some list of Nigeria states  " . $key . " and Capital " .$value;
    echo "<br>";
}

//converting a cm to inch

$cm = 200;

$cmToInch = $cm * 0.39;

echo "The conversion Of " .$cm ."cm to " .$cmToInch." inches";

echo '<br>';


//biggest spending calculation of the mounth
//Exe three

$expenses = array(40000, 15000, 4000, 5000, 10000);

$totalAmout = 0;
$totalAmoutOfExp = 0;

foreach ($expenses as $expense) {
    $totalAmout = $expense + $totalAmout;
    $totalAmoutOfExp = $totalAmoutOfExp + 1;

}

echo "my ".$totalAmoutOfExp. " biggest expenses were ".$totalAmout;

echo "<br>";

// 


?>