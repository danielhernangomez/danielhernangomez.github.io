<?php
	function updateCounter($name) {
        $count = file_get_contents("stats/".$name.".txt");
        file_put_contents("stats/".$name.".txt", $count + 1); 
                } 
?>
