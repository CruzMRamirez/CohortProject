<!DOCTYPE html>
<html>
<body>

<h1>My PHP page 01</h1>
<!-- comment in html -->

<?php
// comment in php echo displays text
// you can also add html tags in there to add things to your text ex h1, h2, h3, br, ...
echo "Hello World!<br><br>";
$intro = "this is cruz ";
// use the $ symbol to then your word to create your variable name ex $pies you can also use double or single quotes "" ''
$intro2 = "and i like pizza.";
// you do not need to tell it what type of variable it is
$pizzaSlices = 2;
// . is like a + in js here is an example on how it looks like
// it should read
// this is cruz and i like pizza. I usually eat 2 slices.
echo $intro . $intro2 . " I usually eat " . $pizzaSlices . " slices." ;
//entered a number
$extraSlice = 2;
// made 2 + 2 for total slices
// the varaibles for math can be used with + - / * % and exponents which are ** refer to w3schools for more as well as othere operaters for comparing and more.
$totalSlices = $pizzaSlices + $extraSlice;
//Echo doesn't matter it can be written anyway ex Echo echo ecHo will be using echo usually
//this allows me to also update the numbers and i can always change it and it will update the things as well
// you dont need to always need to exclude the varaible and re-add it with a . ex bellow
// also varaible myMoney does not exist and will simply not show up no errors and will take it as an empty varaible
Echo "<h2>" . "Sometimes, I eat $totalSlices slices, because friends told me to eat " . $extraSlice . " more slices $myMoney.";
//varaibles can always be changed but constants are not to creat one you can do the following define(name, value, case-insensitive) here is how to use it also the last part means is it case sensitive yes or no true lets you use it with no case sensetivity and false doesn't'
define("PI", 3.1415926535897932384626433, true);
//this is how to add it to your code
//changing the numbers in PI will generate an error
//PI = 1.61803398875
echo "<h3>" . pi . "</h3>";
// echo has no return value but print has a return value of 1 but echo is faster. learn more at w3school. example
print "<p>hey</p>";
// this will only show 10 to find out more search up hexadecimal we learned in class why too much to remember so look it up
// js says its 12 but because of hex it sets it as 10 and so on
// also changing it to 018 doesn't work
echo 012;
// str len is the strings length
// echo strlen("Hello");
// this is called snake case str_word_count
// camel is strWordCount() reason for this is to shorten things and takes up less time
// echo str_word_count("Hello");
// check these out ^ strrev strpos php String



?>

</body>
</html>