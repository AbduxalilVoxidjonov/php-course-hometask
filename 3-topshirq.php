<?php
$haftakuni = $_POST["haftakuni"];


if (empty($haftakuni)){
    echo "Raqamlar bo'sh";
}else{
    switch($haftakuni){
        case 1: echo "Hafta Dushanbaga tegishli"; break;
        case 2: echo "Hafta Seshanba tegishli"; break;
        case 3: echo "Hafta Chorshanba tegishli"; break;
        case 4: echo "Hafta Payshanba tegishli"; break;
        case 5: echo "Hafta Juma tegishli"; break;
        case 6: echo "Hafta Shanba tegishli"; break;
        case 7: echo "Hafta Yakshanba tegishli"; break;
        default: echo "Bunday hafta kuni yo'q"; break;
    }
    
}
?>

<form name= "registration" method="post">
     Raqamni kiriting <input type="number" name = "haftakuni" placeholder="1" >
     <input type="submit" >

</form>