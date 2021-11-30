<?php

/**
  * Says hello
  *
  * @since 2021-11-30
*/
function say_hello() {
 return "hello";
}

echo say_hello();

// Simple Function + Parameter + Call

/**
  * Says hello
  *
  * @since 2021-11-30
*/
function say_hello($friend) {
  return "Hello " . $friend . "!";
}

echo say_hello('Maxi');

// strtoupper - Makes all Chars BIGGER AND BIGGER!

function makeItBIG($a_lot_of_names) {
  foreach($a_lot_of_names as $the_simpsons) {
    $BIG[] = strtoupper($the_simpsons);
  }
  return $BIG;
}

$a_lot_of_names = ['Homer', 'Marge', 'Bart', 'Maggy', 'Lisa'];
var_dump(makeItBIG($a_lot_of_names));
