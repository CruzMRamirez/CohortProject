<?php
$array = array(
    1    => "a",
    "2"  => "b",
    "1.5"  => "c",
    "true" => "d",
);
var_dump($array);
//uses last largest number if no number was used it will use 0
$array = array(
     "a",
    100   =>"b",
    120   =>"c",
     "d",
);
var_dump($array);

$array = array(
    //foo sends back bar to be displayed
    "foo" => "bar",
    //42 sends back 24
    42    => 24,
    //multi sends dimensional
    "multi" => array(
        //dimensional sends blue
         "dimensional" => array(
             "array" => "blue"
         )
    )
);
//asking for foo result which is bar which has 3 characters
var_dump($array["foo"]);
//asking for 42 result which is 24
var_dump($array[42]);
//asking multi to send dimensional's array which is blue and has 4 characters and is displayed on screen
var_dump($array["multi"]["dimensional"]["array"]);

$array["secret"] = "password";
$array[]= "new Value";

var_dump($array);
?>