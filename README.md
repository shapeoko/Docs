#Shapeoko 2 Documentation

If you are looking for the actual instructions to assemble your Shapeoko 2, please visit: http://docs.shapeoko.com. 

##Overview
This is a static-dynamic site (if that's a thing?). 

The html files are placeholders for. The nav bar and header is pulled in via jquery and The content for the site is created in the markdown format (GFM), and markdown-js is used to convert the markdown into html.

The Content directory is used to store the actual **content** of the site. Markdown files, images, and other documents are all stored in this directory.

##Structure

### /(root)
####HTML
HTML files are found in the root of this repository. Do not edit the HTML files. Your changes will be overwritten the next time the site is regenerated.

####CSS
The main css file is found in the root of the repository. This is the css file that defines the styles for the docs.shapeoko.com site. If edits to the style of the site need to be made, this is the file to edit.

###JS
Folder containing the required js files. Jquery is called via google's CDN.

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
* wiring - images specific to the wiring instructions





