<?php
$number1 = isset($_POST["number1"]) ? $_POST["number1"] : 0;
$number2 = isset($_POST["number2"]) ? $_POST["number2"] : 0;
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add"])) {
        $result = $number1 + $number2;
    } elseif (isset($_POST["minus"])) {
        $result = $number1 - $number2;
    } elseif (isset($_POST["kopay"])) {
        $result = $number1 * $number2;
    } elseif (isset($_POST["bolish"])) {
        if ($number2 != 0) {
            $result = $number1 / $number2;
        } else {
            $result = "Division by zero!";
        }
    }
}
?>

<form name="registration" method="post">
    Kalkulyator <br>
    <input type="number" name="number1" placeholder="1" value="<?php echo $number1; ?>"> First Number <br><br>
    <input type="number" name="number2" placeholder="2" value="<?php echo $number2; ?>"> Second Number <br><br>
    <input type="text" id="result" name="result" value="<?php echo $result; ?>" readonly> Result <br><br>
    <input type="submit" id="add" name="add" value="Qo'shish">
    <input type="submit" id="minus" name="minus" value="Ayirish">
    <input type="submit" id="kopay" name="kopay" value="Ko'paytirish">
    <input type="submit" id="bolish" name="bolish" value="Bo'lish">
</form>
