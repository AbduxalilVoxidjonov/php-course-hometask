<form method="post">
  <div>

  <h3>1 - taom</h3>
  <input type="radio"  id="mastava" name="ovqat" value="mastava">Mastava (16 000 so'm)
  <input type="radio" id="moxora" name="ovqat"value = "moxora"> Moxora (15 000 so'm)
  <input type="radio" id="shorva" name="ovqat" value = "sho'rva"> Sho'rva (15 000 so'm)
  <input type="radio" id="norin" name="ovqat" value = "norin"> Norin (20 500 so'm)
  </div>

  <h3>2 - taom</h3>
  <div>
  <input type="radio"  id="osh" name="ovqat2" value="osh">Osh (20 000 so'm)
  <input type="radio" id="manti" name="ovqat2"value = "manti"> Manti (18 500 so'm)
  <input type="radio" id="qozonkabob" name="ovqat2" value = "qozonkabob"> Qozon kabob (23 000 so'm)
  <input type="radio" id="lagmon" name="ovqat2" value = "lagmon"> Lag'mon (21 500 so'm)
  </div>

  <h3>Ichimlik</h3>
  <div>
  <input type="radio"  id="choy" name="ichimlik" value="choy">Choy (2 000 so'm)
  <input type="radio" id="cococola" name="ichimlik"value = "cococola"> Coco cola (8 000 so'm)
  <input type="radio" id="fanta" name="ichimlik" value = "fanta"> Fanta (10 500 so'm)
  <input type="radio" id="kofe" name="ichimlik" value = "kofe"> Kofe (20 500 so'm)
  </div>

  <h3>Salat</h3>
  <div>
  <input type="radio"  id="achchiqchuchuk" name="salat" value="achchiqchuchuk">Achchiq chuchuk (5 000 so'm)
  <input type="radio" id="olivye" name="salat"value = "olivye"> Olivye (8 000 so'm)
  <input type="radio" id="franzuskiy" name="salat" value = "franzuskiy"> Franzuskiy (8 000 so'm)
  <input type="radio" id="mujskiykapriz" name="salat" value = "mujskiykapriz"> Mujskiy kapriz (20 500 so'm)
  </div>
  <h3>15 % usluga </h3>
  <input type="submit" value="Hisoblash">

  <h2>Jame: <?php 
  $ovqat1 = $_POST["ovqat"];
  $ovqat2 = $_POST["ovqat2"];
  $ichimlik = $_POST["ichimlik"];
  $salat = $_POST["salat"];
  $summa = 0;
   switch($ovqat1){
    case "mastava":
        $summa += 16000;
        break;
    case "moxora":
        $summa += 15000;
        break;
    case "sho'rva":
        $summa += 15000;
        break;
    case "norin":
        $summa += 20500;
        break;
   }

    switch($ovqat2){
    case "osh":
        $summa += 20000;
        break;
    case "manti":
        $summa += 18500;
        break;
    case "qozonkabob":
        $summa += 23000;
        break;
    case "lagmon":
        $summa += 21500;
        break;
    }

    switch($ichimlik){
    case "choy":
        $summa += 2000;
        break;
    case "cococola":
        $summa += 8000;
        break;
    case "fanta":
        $summa += 10500;
        break;
    case "kofe":
        $summa += 20500;
        break;
    }

    switch($salat){
    case "achchiqchuchuk":
        $summa += 5000;
        break;
    case "olivye":
        $summa += 8000;
        break;
    case "franzuskiy":
        $summa += 8000;
        break;
    case "mujskiykapriz":
        $summa += 20500;
        break;
    }
    
    $summa += $summa * 0.15;
    echo $summa;
  ?></h2>

</form>