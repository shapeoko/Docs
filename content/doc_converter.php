<?php

	include('Parsedown.php');
	$getHeader = file_get_contents('header.html');
	$getFooter = file_get_contents('footer.html');
	$articleClose = '</article>';
	


	foreach (glob("*.md") as $file) {
	    //Get the contents of the markdown file into a string
	    $content = file_get_contents("$file");
	    
	    //Article name based off file name.
	    //$articleTitle = substr(substr($file, 0, -3), 2);
	    $articleTitle = basename($file, ".md");
	    $subHeader =  '<h2 id="introText">' . $articleTitle . '</h2>';

	    //create new file from markdown file name
	    $newfile = $articleTitle . '.html';
		$handle = fopen($newfile, 'w') or die('Cannot open file:  '. $newfile); //implicitly creates file

		//Open the article tag
		$articleOpen = '<article id="'.$articleTitle.'">';
		
		//Parse the markdown into HTML
		$sectionContent= Parsedown::instance()->parse($content);

		//spit the whole thing out
		//$current .= $articleOpen . $sectionContent . $articleClose;

		//generate page for each md
		$newpage = $getHeader . $subHeader . $articleOpen . $sectionContent . $articleClose . $getFooter;
		file_put_contents($newfile, $newpage);
	    }

?>
