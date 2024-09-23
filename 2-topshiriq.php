<?php
$number1 = $_POST["numberfirst"];
$number2 = $_POST["numbersecond"];


if (empty($number1) || empty($number2)){
    echo "raqamlar bo'sh";
}else{


echo "$number1 + $number2 = ".($number1+$number2);
}
?>

<form name= "registration" method="post">
     1 - Raqam kiriting: <input type="number" name = "numberfirst" placeholder="Number 1" >
     2 - Raqam kiriting:<input type="number" name = "numbersecond" placeholder="Number 2" >
     <input type="submit" >

</form>