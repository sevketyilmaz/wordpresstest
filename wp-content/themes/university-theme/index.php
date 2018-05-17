<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>

<?php
	$names = array('brad', 'jon', 'lisa');
?>

<p>hi my name is <?php echo $names[0]; ?></p>

<?php 
	$count = 0;
	while ($count < count($names) ) {
		echo "<li> hi, my name is $names[$count] </li>";
		$count++;
	}
 ?>