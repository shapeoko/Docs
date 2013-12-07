<?php

	include('Parsedown.php');
	$getHeader = file_get_contents('header.html');
	$getFooter = file_get_contents('footer.html');
	
	


	foreach (glob("*.md") as $file) {
	    //Get the contents of the markdown file into a string
	    $content = file_get_contents("$file");
	    
	    //Article name based of file name.
	    $articleTitle = basename($file, ".md");

	    //create new file from markdown file name
	    $newfile = $articleTitle . '.html';
		$handle = fopen($newfile, 'w') or die('Cannot open file:  '. $newfile); //implicitly creates file

		//define the article tags
		$articleOpen = '<article id="'.$articleTitle.'">';
		$articleClose = '</article>';

		//Parse the markdown into HTML
		$sectionContent= Parsedown::instance()->parse($content);

		//generate page for each md
		$newpage = $getHeader . $articleOpen . $sectionContent . $articleClose . $getFooter;
		file_put_contents($newfile, $newpage);
	    }

?>
