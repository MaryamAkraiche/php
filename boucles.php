<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $pronoun) {
    echo $pronoun . "<br>";
}
foreach ($pronouns as $pronoun) {
    if ($pronoun == 'He/She') {
        echo $pronoun . " codes<br>";
    } else {
        echo $pronoun . " code<br>";
    }
}
?>