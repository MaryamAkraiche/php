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

<?php
	$web_development= array(
		'frontend' => array(),
		'backend' => array()
	);
	$web_development['frontend'][] = 'xhtml';
	$web_development['frontend'][] = 'CSS';
	$web_development['frontend'][] = 'Flash';
	$web_development['frontend'][] = 'JavaScript';
	$web_development['backend'][] = 'Ruby on Rails';

$key = array_search('Flash', $web_development['frontend']);
if ($key !== false) {
    unset($web_development['frontend'][$key]);
    $web_development['frontend'] = array_values($web_development['frontend']);
}


	echo "<pre>";
	print_r($web_development);
	echo "</pre>";
?>