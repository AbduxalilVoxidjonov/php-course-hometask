
<?php
$number1 = $_POST["numberfirst"];
$number2 = $_POST["numbersecond"];
$radio = $_POST["amallar"];


if (empty($number1) || empty($number2)){
    echo "raqamlar bo'sh";
}else{
    switch($radio){
        case "add": echo "$number1 + $number2 = ".($number1+$number2); break;
        case "minus": echo "$number1 - $number2 = ".($number1-$number2); break;
        case "kopay": echo "$number1 * $number2 = ".($number1*$number2); break;
        case "bolish": 
            if($number2 == 0){
                echo "No'lga bo'lish mumkun emas";
            }else{
                echo "$number1 / $number2 = ".($number1/$number2);
            } break;
}
}
?>


<form name= "registration" method="post">
    1 - Raqamni kiriting <input type="number" name = "numberfirst" placeholder="1" > <br>
     
    2 - Raqamni kiriting <input type="number" name = "numbersecond" placeholder="2" > <br>
<input type="radio" id="add" name="amallar" value="add">
<label for="add"> + </label><br>
<input type="radio" id="minus" name="amallar" value="minus">
<label for="minus"> - </label><br>
<input type="radio" id="kopay" name="amallar" value="kopay">
<label for="kopay"> * </label><br>
<input type="radio" id="bolish" name="amallar" value="bolish">
<label for="bolish"> / </label><br>
<input type="submit">

</form>