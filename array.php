<?php
    $me = array(
        'age'=> 22 ,
        'firstname' => 'Maryam' ,
        'lastname'  => 'Akraiche' ,
        'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix'),
        'hobbies' => array('reading', 'dancing')
    );
    $friend = array(
        'age'=> 22 ,
        'firstname' => 'Amal' ,
        'lastname'  => 'Oualla' ,
        'favourite_movies' => array('GOT', 'Her'),
        'hobbies' => array('reading', 'cooking')
    );
    
    $me['friend'] = $friend;

    echo "<pre>";
    print_r($me);
    echo "</pre>";
?>