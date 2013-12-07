#Software

There are two pieces of software that you will need to be aware of while assembling and testing your machine. The first software is to be installed on your computer and is called "Universal G-Code Sender". Details for obtaining and installing the software can be found below. The second software is actually a 'firmware' that is installed on your arduino. The firmware is called 'grbl'. 

#####If you bought the full kit from inventables, then your arduino came pre-loaded with grbl.

## Universal G-code Sender
### Overview ###

Universal gcode sender (UGS for short): a Java based, cross platform G-Code sender created to control grbl Based machines (like Shapeoko!). [Click here to download the program](UniversalGcodeSender-v1.0.6.zip). The latest version can always be downloaded [from github](https://github.com/winder/Universal-G-Code-Sender).

### Installing ###

### Configuring ###

##grbl
### Overview ###

#####From The Github Readme File:
Grbl is a no-compromise, high performance, low cost alternative to parallel-port-based motion control for CNC milling. It will run on a vanilla Arduino (Duemillanove/Uno) as long as it sports an Atmega 328.


The controller is written in highly optimized C utilizing every clever feature of the AVR-chips to achieve precise timing and asynchronous operation. It is able to m aintain more than 30kHz of stable, jitter free control pulses.


It accepts standards-compliant G-code and has been tested with the output of several CAM tools with no problems. Arcs, circles and helical motion are fully supported, as well as, other basic functional g-code commands. Functions and variables are not currently supported, but may be included in future releases in a form of a pre-processor.


Grbl includes full acceleration management with look ahead. That means the controller will look up to 18 motions into the future and plan its velocities ahead to deliver smooth acceleration and jerk-free cornering.

###Installing ###


### Configuring ###