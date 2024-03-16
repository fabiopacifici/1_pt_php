<?php


require_once __DIR__ . '/app/Models/User.php';
require_once __DIR__ . '/app/Models/Address.php';
echo User::greetings();








// 👉 Read a Static property from the outside
//var_dump(Address::$country);


$address = new Address('Villa esmeralda', 12, 'AB123', 'Esmeralda', 'Canarie');
var_dump($address->getStaticCountry());

//$address->getFullAddress();




$fist_user = new User('Fabio', 'Pacific', 44, $address);


$second_user = new User('Fabio2', 'Pacific2', 44, new Address('Villa esmeralda', 12, 'AB123', 'Esmeralda', 'Canarie'));



$fist_user->sayHi();

var_dump($fist_user->address->getFullAddress());
