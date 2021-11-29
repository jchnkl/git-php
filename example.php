<?php

function say_hello() {
  return "achraf's Änderung";
}

echo say_hello();

// Simple Function + Parameter + Call

function say_hello($friend) {
  return "Hello " . $friend . "!";
}

echo say_hello('Tommy');

// strtoupper - Makes all Chars BIGGER AND BIGGER!

function makeItBIG($a_lot_of_names) {
  foreach($a_lot_of_names as $the_simpsons) {
    $BIG[] = strtoupper($the_simpsons);
  }
  return $BIG;
}

$a_lot_of_names = ['Homer', 'Marge', 'Bart', 'Maggy', 'Lisa'];
var_dump(makeItBIG($a_lot_of_names));
