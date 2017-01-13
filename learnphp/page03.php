<?php 
$x = 0; 

while($x <= 42) 
{
    if($x % 5 !=0 || $x == 0){
    echo "The number is: $x <br>";
    }
    $x +=2;
} 

while(false){
    echo "Cruz";
}
do{
    echo"Ramirez";
} while(false);

// $fruit = array("Cherry","Apple","Peach", "Plum", "Watermelon");
// echo "<ol>";
//     foreach($fruit as $value)
//     {
//         echo "<li>$value</li>";
//     }
// echo "</ol>";
//arrays
$fruits = array("Cherry","Apple","Peach","Plum");
$count = count($fruits);
    for($i = 1; $i <= $count; $i++)
    {
        echo "$i) " . $fruits[$i-1] . "<br>";
    }
?>