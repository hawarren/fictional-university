<?php
function myFirstFunction(){
    echo "<p> Hello this is my first function</p>";
}
myFirstFunction();
myFirstFunction();

function greet($name, $color){
    echo "<p>Hi name is $name and my favorite color is $color</p>";
}
greet(Mike, blue);
greet('Jane', 'green');
?>
<h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description'); ?></h1>

