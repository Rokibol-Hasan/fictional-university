<?php

// function greet($name,$color){
//     echo "<p>Hello $name, your favorite color is $color</p>";
// }

// greet("John","blue");


$names = array('John','Jane','Joe');


// for($i = 0; $i < count($names); $i++){
//     echo "<p>Hello $names[$i]</p>";
// }

foreach($names as $name){
    echo "<p>Hello $name</p>";
}



?>

<h1><?php echo bloginfo('name'); ?></h1>
<p><?php echo bloginfo('description'); ?></p>