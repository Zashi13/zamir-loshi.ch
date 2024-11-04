<?php
	function clean($string) {
		$string = str_replace('_', ' ', $string); // Replaces underline with space -> IMPORTANT: Foldername cant contain spaces, use underline instead

   return preg_replace('/[^A-Za-z\-]/', ' ', $string); // Removes special chars and numbers -> Allows for custom file order
}

//gets sub directories
$subDirectories = scandir($mainDir);

//removes the first two indexes in the directories array that are just dots
unset($subDirectories[0]);
unset($subDirectories[1]);

// loop through all sub directories to create h6 elements ...
	?>

	
		<?php
foreach($subDirectories as $subDirectory){
    echo '<h6>'.clean($subDirectory).'</h6>'; //create h6 element with folder name
	?>
		
	<div class="bilderport">
		
				<?php
    // ... and then loop through all pictures in each sub directory
    foreach(glob($mainDir.'/'.$subDirectory.'/*') as $curimg) { //safe img src in varaible
	echo "<img src=".$curimg." class='img'>\n"; //echo a HTML img element
    }
	?>
		
		<?php
	
	echo "</div>"; //close the bilderport div after each section
} 
	?>
		