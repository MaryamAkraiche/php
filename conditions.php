<?php
// // 1.1 Clean your room Exercise 

// $room_is_filthy = true;

// if( $room_is_filthy){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// 	cleanup_room();
// 	echo "<br>Room is now clean!";
// 	$room_is_filthy = false;
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }

// // 1.2 Clean your room Exercise, improved

// // Create the array of possible states
// $possible_states = array(
//     0 => "health hazard",
//     1 => "filthy", 
//     2 => "dirty", 
//     3 => "clean", 
//     4=> "immaculate");

// // When testing, change the index value to navigate to the possible array values
// $room_filthiness = $possible_states[4]; 

// if( $room_filthiness == "health hazard"){
// 	echo "Yuk, Room is Disgusting! Let's clean it up !";
// } else if( $room_filthiness == "filthy"){
// 	echo "Yuk, Room is is filthy : let's clean it up !";
// } else if( $room_filthiness == "dirty"){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// }else if( $room_filthiness == "clean" ){
// 	echo "Room is clean!";
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }

// // 2. "Different greetings according to time" Exercise

// $now = date("H:i");

// // Test the value of $now and display the right message according to the specifications.
// if( $now >= "05:00" && $now <= " 09:00"){
//     echo "Good morning !";
// } else if ($now >= "09:01" && $now <= "12:00") {
//     echo "Good day !";
// } else if ($now >= "12:01" && $now <= "16:00") {
//     echo "Good afternoon !";
// } else if ($now >= "16:01" && $now <= "21:00") {
//     echo "Good evening !";
// } else {
//     echo "Good night !";
// }

// "Different greetings according to age gender and language" Exercise

// if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['language'])){
//     $age = intval($_GET['age']);
//     $gender = $_GET['gender'];
//     $language = $_GET['language'];

//     if ($age < 12) {
//         if ($gender == "woman" && $language == "yes") {
//             echo "Hello little girl!";
//         } else if($gender == "woman" && $language == "no"){
//             echo "Aloha little girl!";
//         }else if ($gender == "man" && $language == "yes"){
//             echo "Hello little boy!";
//         }else {
//             echo "Aloha little boy!";
//         }
//     } else if ($age >= 12 && $age < 18) {
//         if ($gender == "woman" && $language == "yes") {
//             echo "Hello Miss Teen!";
//         } else if($gender == "woman" && $language == "no"){
//             echo "Aloha Miss Teen!";
//         }else if ($gender == "man" && $language == "yes"){
//             echo "Hello Mister Teen!";
//         }else {
//             echo "Aloha Mister Teen!";
//         }
//     } else if ($age >= 18 && $age < 115) {
//         if ($gender == "woman" && $language == "yes") {
//             echo "Hello young lady!";
//         } else if($gender == "woman" && $language == "no"){
//             echo "Aloha young lady";
//         }else if ($gender == "man" && $language == "yes"){
//             echo "Hello young man!";
//         }else {
//             echo "Aloha young man!";
//         }
//     } else {
//         echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
//     }
// };

// // 6. The Girl Soccer team
// if (isset($_GET['age']) && isset($_GET['gender'])){
//     $age = intval($_GET['age']);
//     $gender = $_GET['gender'];
//     if ($age >= 21 && $age <= 40 && $gender == 'woman'){
//         echo "welcome to the team !";
//     } else {
//         echo "Sorry you don't fit the criteria";
//     }
// }
// // 7. Achieve the same, without the ELSE.
// $result = "Sorry you don't fit the criteria";
// if (isset($_GET['age']) && isset($_GET['gender'])){
//     $age = intval($_GET['age']);
//     $gender = $_GET['gender'];

//     if ($age >= 21 && $age <= 40 && $gender == 'woman'){
//         $result = "Welcome to the team!";
//     }
// }
// echo $result;

// // 8. "School sucks!" Exercise
// if (isset($_GET['mark'])){
//     $mark = intval($_GET['mark']);
//     if ($mark < 4){
//         echo "This work is really bad. What a dumb kid!";
//     }else if ($mark >= 5 && $mark <= 9){
//         echo "This is not sufficient. More studying is required.";
//     }else if ($mark == 10){
//         echo "Barely enough!";
//     }else if ($mark >= 11 && $mark <= 14){
//         echo "Not bad!";
//     }else if ($mark >= 15 && $mark <= 18){
//         echo "Bravo, bravissimo!";
//     }else if ($mark == 19 || $mark == 20){
//         echo "Too good to be true : confront the cheater!";
//     }
// }
?>
<!-- <form method="get" action="">
    <label for="age">Enter your age:</label>
    <input type="number" name="age" id="age">
    <input type="submit" name="submit" value="Greet me now"><br>
    <label>
        <input type="radio" name="gender" value="man"required> Man
    </label>
    <label>
        <input type="radio" name="gender" value="woman"> Woman
    </label><br>
    <label>
        Do you speak English ?
        <input type="radio" name="language" value="yes"> Yes
        <input type="radio" name="language" value="no"> No
    </label>
</form> -->

<!-- <form method="get" action="">
    <label for="age">Enter your age:</label>
    <input type="number" name="age" id="age">
    <input type="submit" name="submit" value="join">
    <label>
        <input type="radio" name="gender" value="man"required> Man
    </label>
    <label>
        <input type="radio" name="gender" value="woman"> Woman
    </label>
</form> -->

<!-- <form method="get" action="">
    <label for="age">Enter your mark:</label>
    <input type="number" name="mark" id="mark">
    <input type="submit" name="submit" value="check">
</form> -->