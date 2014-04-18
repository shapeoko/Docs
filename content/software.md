#Software

There are two pieces of software that you will need to be aware of while assembling and testing your machine. The first software is to be installed on your computer and is called "Universal G-Code Sender" (written in Java, it may require updating to at least Java 7, if Java isn't an option for your machine, there are other [Communication/Control programs, see the wiki](http://www.shapeoko.com/wiki/index.php/Communication_/_Control)). Details for obtaining and installing the software can be found below. The second software is actually a 'firmware' that is installed on your Arduino. The firmware is called '[Grbl](http://www.shapeoko.com/wiki/index.php/Grbl)'. 

#####If you bought the full kit from Inventables, then your Arduino came pre-loaded with Grbl.

In addition to the software proper, you will also need driver files for your Arduino (which will make it appear as a serial device although connected to your computer using a USB cable) --- these may be automatically installed via plug-and-play, if they are not, the instructions for manually installing the drivers are below.


## Universal G-code Sender

![UGS splash screen](helloworld/ugs1.png)

*(universal gcode sender by will winder)*

Universal G-Code Sender (UGS for short): a Java based, cross platform G-Code sender created to control grbl Based machines (like Shapeoko!). [Click here to download the program](http://bit.ly/16q7obd). The latest version can always be downloaded [from github](https://github.com/winder/Universal-G-Code-Sender).


### Installing ###
There is no installation required for this software. Simply download the zip file from the link above. Once downloaded, to run the software simply unzip the .zip file and double click the .jar file. On some platforms you will need to run an included start script. If you are using Microsoft Windows, just double click the .jar file.


#####Mac Users
You may need to create a "/var/lock" directory on OSX to fix a bug in the serial library. To do this open the Terminal application and run the following two commands: 

    sudo mkdir /var/lock 
    sudo chmod 777 /var/lock 

### First run
You may want to run the program before connecting the Arduino --- this will allow you to check and see if your system has any pre-existing ports --- make note of any, once the Arduino is loaded it should be on a new port.

##Grbl

### Overview ###

#####From The Github Readme File:

Grbl is a no-compromise, high performance, low cost alternative to parallel-port-based motion control for CNC milling. It will run on a vanilla Arduino (Duemillanove/Uno) as long as it sports an Atmega 328.

The controller is written in highly optimized C utilizing every clever feature of the AVR-chips to achieve precise timing and asynchronous operation. It is able to maintain more than 30kHz of stable, jitter free control pulses.

It accepts standards-compliant G-code and has been tested with the output of a number of CAM tools [see the wiki for details on Grbl](http://www.shapeoko.com/wiki/index.php/GRBL). Arcs, circles and helical motion are fully supported, as well as other basic functional G-code commands. [See the wiki for a list of commands which are supported](http://www.shapeoko.com/wiki/index.php/G-Code#G-code_supported_by_Grbl).

Grbl includes full acceleration management with look ahead. That means the controller will look up to 18 motions into the future and plan its velocities ahead to deliver smooth acceleration and jerk-free cornering if the communication program sends them (this may be an option or default, depending on the program, check the preferences).


###Installing Arduino Drivers###

Chances are, the Arduino will be recognized by your computer. If not, download the appropriate drivers/software for your platform (do not proceed beyond Step #4 or you will erase Grbl):

* [Mac OS X](http://arduino.cc/en/Guide/MacOSX#toc2)
* [Windows](http://arduino.cc/en/Guide/Windows#toc2)
* [Linux](http://playground.arduino.cc/Learning/Linux)


###Installing Grbl onto the Arduino###

As noted above, Grbl is pre-installed on Arduinos purchased from Inventables as part of a complete kit. If your board doesn't have it installed (or was erased because you downloaded the blinking lights program in Step #5 of the afore-mentioned installation directions), you can download another hex file here:

* [grbl v0.8c atmega328p 16mhz 9600.hex](https://github.com/downloads/grbl/grbl/grbl\_v0\_8c\_atmega328p\_16mhz\_9600.hex)

If that link isn't working, you can find the original file here: 

* [github.com/grbl/grbl/downloads](https://github.com/grbl/grbl/downloads)

Then follow the instructions here:

* [github.com/grbl/grbl/wiki/Flashing-Grbl-to-an-Arduino](https://github.com/grbl/grbl/wiki/Flashing-Grbl-to-an-Arduino)

and you'll be all set to configure it. Please note that while 115200 baud is used to flash Grbl, 9600 baud (as implied by the filename) is used to communicate with Grbl. Be sure to set the speed appropriately.


### Configuring ###

To view your settings type in the command  $$ (see the screen shot below for typical settings):

![shapeoko 2 grbl settigns](helloworld/check_grbl_settings.png)

To change a setting, type $ then the setting number, an equals sign, and the desired value:

    $1=40.020

will set the Y-axis. Further details are [on the wiki under Grbl Configuration](http://www.shapeoko.com/wiki/index.php/Grbl_Configuration).

###Next step [Electronics](electronics.html)

To express concerns, post on the [forums](http://www.shapeoko.com/forum/index.php), to suggest improvements without using github, edit [this wiki page](http://www.shapeoko.com/wiki/index.php?title=Software_1&action=edit&redlink=1).
