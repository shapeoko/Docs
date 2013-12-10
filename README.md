#Shapeoko 2 Documentation

If you are looking for the actual instructions to assemble your Shapeoko 2, please visit: http://docs.shapeoko.com. 

##Structure

### /(root)
####HTML
HTML files are found in the root of this repository. Do not edit the HTML files. Your changes will be overwritten the next time the site is regenerated.

####CSS
The main css file is found in the root of the repository. This is the css file that defines the styles for the docs.shapeoko.com site. If edits to the style of the site need to be made, this is the file to edit.

###Content
####Markdown Files
* The markdown files (that create the html files) are located within the content folder.
* Each markdown files represents a seperate html page.

####Image Folders
* helloworld - contains image files for the helloworld page
* firstjob - contains image files for the firstjob page
* oPictures - original size images of all files found in documentation
* tPictures - thumbnail sized images of all files found in documentation. Contains both 200px and 400px sizes
* sketches - black and white sketch renders (generated from autodesk inventor)

####Scripts
* Parsedown.php - Converts markdown files to static html files. Markdown parser for PHP. Found [here](https://github.com/erusev/parsedown).
* doc_converter - script that pulls everything together: calls Parsedown.php, includes header, generates article tags, includes footer, creates file.





