<?php
// 9. The "Switch" structure.

if (isset($_GET['mark'])){
    $mark = intval($_GET['mark']);
    switch ($mark) {
        case ($mark < 4):
            echo "This work is really bad. What a dumb kid!";
            break;
        case ($mark >= 5 && $mark <= 9):
            echo "This is not sufficient. More studying is required.";
            break;
        case 10:
            echo "Barely enough!";
            break;
        case ($mark >= 11 && $mark <= 14):
            echo "Not bad!";
            break;
        case ($mark >= 15 && $mark <= 18):
            echo "Bravo, bravissimo!";
            break;
        case ($mark == 19 || $mark == 20):
            echo "Too good to be true : confront the cheater!";
            break;

    }
}
?>
<form method="get" action="">
    <label for="age">Enter your mark:</label>
    <input type="number" name="mark" id="mark">
    <input type="submit" name="submit" value="check">
</form>