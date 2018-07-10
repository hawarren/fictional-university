<?php
$names = array('Brad', 'Hanif', 'Hashim'); 
$count = 0;
while($count < count($names)) { //count counts the number of items in the array
    echo"<li>Hello my name is $names[$count] </li>";
    $count++;
    
}

?>


<p>Hi, my name is <?php echo $names[0]?></p>

<li></li>