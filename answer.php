<?php
	$filename = "favouritecourse.csv";
	$fin = file($filename);
	
	$simi = array();
	
	$s1 = $_POST["score1"];
	$s2 = $_POST["score2"];
	$s3 = $_POST["score3"];
	$s4 = $_POST["score4"];
	
	foreach($fin as $line => $content) {
		$elems = explode(",", $content);
		$simi[$elems[1]] = pow((double)$s1 - (double)$elems[2], 2) + pow((double)$s2 - (double)$elems[3], 2) + pow((double)$s3 - (double)$elems[4], 2) + pow((double)$s4 - (double)$elems[5], 2);
	}
	
	asort($simi);
	
	$simi = array_slice($simi, 0, 10);
	
	$filename = "courses.txt";
	$fin = file($filename);
	
	$ranks = array();
	$urls = array();
	
	foreach($fin as $line => $content) {
		$elems = explode(" ", $content);
		$ranks[$elems[2]] = $elems[0];
		$urls[$elems[2]] = $elems[1];
	}
	
	print_r($ranks);
	print_r($urls);
	
	foreach($simi as $nm => $sc) {
		echo '<div style="text-align:center;"><p>' . $nm . '<br><a href="' . $urls[$nm] . '"><img  border="10" src="pages/image/' . $ranks[$nm] . '.jpg" alt="' . $nm . '" width="320" height="320"></a></p><br></div>';
	}
?>
