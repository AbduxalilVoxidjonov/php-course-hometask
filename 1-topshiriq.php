<?php
$number = $_POST["number"];

if(strlen($number)==12){

if(!empty($number) && str_starts_with($number,"998" )){
  $raqam = substr($number,3,2);
  switch($raqam){
    case "90":
        echo "$number raqami Beeline operatoriga tegishli";
        break;
    case "91":
        echo "$number raqami Beeline operatoriga tegishli";
        break;
    case "88":
        echo "$number raqami Mobi uz operatoriga tegishli";
        break;
    case "93":
        echo "$number raqami Ucel operatoriga tegishli";
        break;
    case "94":
        echo "$number raqami Ucel operatoriga tegishli";
        break;
    case "97":
        echo "$number raqami Uzmobile operatoriga tegishli";
        break;
    case "50":
        echo "$number raqami Ucel operatoriga tegishli";
        break;
    case "33":
        echo "$number raqami Humans operatoriga tegishli";
        break;
    case "20":
        echo "$number raqami OQ operatoriga tegishli";
        break;
    default:  
        echo "Bunday operatorlar hozircha mavjud emas";
        break;
  }
}
}else{
  echo "$number Telefon raqam emas";
}

?>

<form name= "registration" method="post">
     Raqam kiriting <input type="text" name = "number" placeholder="998" >
     <input type="submit" >

</form>