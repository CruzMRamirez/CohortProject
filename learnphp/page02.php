<!DOCTYPE html>
<html>
<body>

<?php  
// w3school dates
    date_default_timezone_set("America/Los_Angeles");
    echo date("D H:i:s");
    $t = date("H");
// compares int value for t to an actual number instead of a string
    if (intval($t) < 10) 
    {
        echo " Have a good morning!";
    }
    elseif(intval($t) < 20)
    {
        echo " Have a good day!";
    }
    else
    {
        echo " Have a good night";
    }
//comparing letters to numbers it will use the letters as numbers ex h = 104, i = 105, ...
    if("0" < "1"){
        echo " Less";
    }
    else{
        echo " Greater";
    }
// if, else, elseif, or else if exactly how it is typed
    echo "<br>";
    
    
    $favcolor = "red";
    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";










?>  

</body>
</html>