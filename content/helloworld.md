##Getting Set Up

At this point, we should have a fully assembled machine, capable of making amazing things. *But*, first, we need to make sure everything is in good working order.  To achieve that, we're going to run a job that we in the ShapeOko community call "Hello, World". When it's finished it will look like this:

[![successful job](tPictures/so_2_helloworld_two_4.jpg)](Docs/content/tPictures/so_2_helloworld_two_16.jpg)

Before we begin, let's make sure we are ready to go:

1. Electronics tested? (You may wish to return to the [electronics page](electronics.html) and verify your wiring. If your motors don't move smoothly or reliably you may need to adjust their [tuning](http://www.shapeoko.com/wiki/index.php/Tuning).)
2. Machine Assembled? (If you have any concerns see [Assembly Troubleshooting on the wiki](http://www.shapeoko.com/wiki/index.php/Assembly_troubleshooting))
3. [Software](http://docs.shapeoko.com/software.html) Installed?
4. Work area cleaned up? (you're on your own here)


If you answered yes to all 4 questions above, then let's proceed.

##Operating Checklist

Always review and follow the [operating checklist](http://www.shapeoko.com/wiki/index.php/Operating_Checklist). While hearing protection isn't necessary for this plotting operation, one should still get in the habit of wearing safety glasses.

##Work Area

Tape a piece of paper down to your work area. The paper should be taped in landscape orientation (wider than it is tall). Keep the paper towards the front/left of the machine. If you are planning on using a permanent marker you may want to use several layers of paper, or add a layer of some other material such as aluminum foil, to prevent the marker from bleeding through.

![successful job](helloworld/paper_tape.jpg)


##Download Files

Download [this file for inches](http://docs.shapeoko.com/content/helloworld/helloworld2.nc) or [this file which switches to metric and returns to 3mm above home](http://docs.shapeoko.com/content/helloworld/helloworld2mm.nc) (you could right-click or control-click on the link to bring up a menu to force the saving) and save it somewhere to your computer that you will remember, e.g., the Desktop or your Documents folder. Please note that G-code is text, so you can examine the file with any text editor to verify it, or touch it up if need be. Please compare what you have downloaded with the image below to ensure that you have a good copy.

[![Hello, World](helloworld/file.png)](http://docs.shapeoko.com/content/helloworld/helloworld2.nc)

Please note that it is in Imperial, and will leave your machine in inch mode. Use the command G21 to switch back to metric if accustomed to using that system when jogging the machine. It also has different begin/end points for the paths than the original file, but the problems which those exposed are addressed by the Y-axis dual motor. It is unlikely that you will be able to achieve a perfect result due to flexing of the pen or its mount --- that's okay, the rotary tool/spindle will be a bit stiffer.


##Position Machine

With the machine turned off, move your gantry to home (the origin, X=0,Y=0), the front left corner of the paper that we taped down in step \#1.

![Position Machine](helloworld/gantry_lower_left.jpg)


##Attach Sharpie

Using a piece of tape, affix a pen or marker to the Z-axis spindle carriage assembly. (Optionally you can mount the pen in-between two blocks of material which have matching grooves on them --- see the hello world at the top of this page. Forum user Claudio used shorter bolts to attach the spindle straps, then used rubber bands to attach the pen to them. Other users have used criss-crossed Zip ties. The better secured the pen is, the better the plot will look.) If using a thick marker, please consider the possibility of bleed through as noted above.


##Position Sharpie

Lower your pen (or marker) so it is about 1 inch above the paper (Remember to check whether your machine is using Imperial or metric units --- if accustomed to using metric, issue G21; if accustomed to Imperial, issue G20 to switch).


##Open Software

Plug the power in to your machine and open Universal G-Code Sender on your computer. Once the program has loaded, plug in the USB cord to your computer and you should hear the stepper motors engage.

![Open The Software](helloworld/ugs1.png)


##Open Connection Between Computer and Machine

Select the correct com port and baud rate from the drop down menus on the left.  Click 'Open' to establish a connection with the Arduino.  Once the connection has been made, GRBL will say hello by displaying its version number.

![Make Connection](helloworld/open_connection.png)


##Verify Grbl Settings

In the command line at the top of Universal G-Code Sender, type $ and press enter.  Grbl should respond with a help message.

![$ Command Response](helloworld/grbl_settings.png)

In the same command line, type $$ to view the current Grbl settings.

![$ Command Response](helloworld/grbl_config.png)


##Configure Grbl Settings

The default values need to be changed in order for your machine to function properly.  To do this, simply enter the correct value for each setting into the command line and press enter.  For example, to change the X-axis steps/mm to 40.020 you would type this, followed by an enter:

		$0=40.020

These are the correct Grbl settings for the stock full kit machine:

![Grbl Settings](helloworld/check_grbl_settings.png)


**Note: Previously, the above image showed the Z-axis set to $5=2500, this has been set back to the original 500 --- if your machine doesn't move reliably you may wish to try further reducing it to 250. Once your machine is assembled and working, you can fine tune it per the instructions on the wiki. The text below has had the settings slightly adjusted back to what should be ideal / correct values. Please adjust them as needed to match your machine when you fine tune/calibrate it.**

To save typing: 

    $0=40.000 
    $1=40.000 
    $2=320.000 
    $3=30 
    $4=250.000 
    $5=250.000
    $6=28
    $7=255 
    $8=25.000
    $9=0.050 
    $10=0.100 
    $11=25 
    $12=3 
    $13=0 
    $14=1 
    $15=0 
    $16=0 
    $17=0 
    $18=0 
    $19=25.000 
    $20=250.000 
    $21=100
    $22=1.000 

Please verify that these settings work for your machine before using it in any way which may damage it. See below for reversing the axis of motion. If necessary, you may need to [adjust your motor current](http://www.shapeoko.com/wiki/index.php/Tuning#Motor_Current).

Please note that there have been reports of pasting all settings en masse corrupting the Arduino's EEPROM. Either type the updates in manually, or paste them one line at a time.

If you have sourced your own electronics, you can easily determine your own settings by using this [Grbl settings calculator.](http://homepage.ntlworld.com/r.j.noble/ShapeOko/grblcalc/)

Ensure that the machine moves the correct distance/direction for each axis. Revisit the [electronics page](electronics.html) if need be to re-wire the machine, or [re-configure Grbl](http://www.shapeoko.com/wiki/index.php/Grbl#Invert_Bits) (while a reversal of the X- and Y-axes will merely result in mirrored or upside-down prints (once one gets the origin set), a reversal of the Z-axis can be disastrous, resulting in a crash into the wasteboard).

If one has started with the suggested value of

    $6=28
		
Then if the Z-axis is reversed you should enter

    $6=156
		
If the X-axis is reversed you should enter

    $6=60
		
If the Y-axis is reversed you should enter

    $6=92
		
If X- and Y-axes are reversed

    $6=124
		
If X- and Z-axes are reversed

    $6=188
		
If Y- and Z-axes are reversed

    $6=220
		
And lastly, to reverse all three axes

    $6=252



##Open File

Browse for the file you downloaded in step #1 and open it.

![Open The File](helloworld/ugs2.png)


##Verify File

Click the visualize button, located just below the browse button, to see what the file will look like. A screen similar to the one below will display after a few seconds. You can interact with this screen by left clicking and dragging your mouse around. The depth of this file is very shallow (.01"), so there is not much to look at beyond the general shape of the output. If the file were deeper, those levels would be represented as layers in the visualizer.

![Visualize](helloworld/ugs_visualize.png)


##Pre-Flight

If your file visualization looks correct, close the visualizer and click the 'machine control' tab towards the top of the window.

![Double Check Settings](helloworld/ugs3.png)


##Set Zero Position

Click the 'Reset Zero' Button, to tell your machine that you are at 0,0. You should notice on the left of the panel your work position coordinates will be set to X:0, Y:0, Z:0

![Set Zero](helloworld/ugs4.png)


##Air Print

To make sure there are no mistakes, lets draw some stuff in the air.  Click the 'File Mode' tab at the top of the program window. With the Sharpie ~1" above the work surface, click the 'Send' button just below the file path.

![Send File](helloworld/run_job.png)

You should see Universal G-Code Sender start streaming the text file line by line to the Arduino, and your machine should start moving around.

![Sent File](helloworld/grbl_stream.png)


##Run Job!

Lower your Sharpie so it is *just* barely above the paper. (Remember that the previous running of the file will have left it in Imperial mode --- if need be, issue G21 to switch to metric.)

![Just above work surface](helloworld/sharpie_close.jpg)

OK, now we're ready. Take a deep breath (this is going to be amazing) and click the 'Send' button just below the file path one more time.

![Run Job](helloworld/ugs5.png)


##Rule World!

Your machine will now run the hello world job. Keep close to your computer, and be aware of how to quickly disconnect the power from your machine in case of an emergency situation.

[![Finished job](tPictures/so_2_helloworld_two_4.jpg)](content/tPictures/so_2_helloworld_two_16.jpg)

Once it's complete, you may wish to [document it on the wiki](http://www.shapeoko.com/wiki/index.php/Hello_World).

As noted above, if you have any difficulties, see [Assembly Troubleshooting on the wiki](http://www.shapeoko.com/wiki/index.php/Assembly_troubleshooting). See also [Fine Tuning](http://www.shapeoko.com/wiki/index.php/Tuning) to verify that the current is set properly for your motors and power supply, and [Operation Troubleshooting](http://www.shapeoko.com/wiki/index.php/Operation_Troubleshooting) if you have any difficulties with the use of the machine.

###Next Step [First job](http://docs.shapeoko.com/firstjob.html)

To express concerns, post on the [forums](http://www.shapeoko.com/forum/index.php), to suggest improvements without using github, edit [this wiki page](http://www.shapeoko.com/wiki/index.php?title=Helloworld_1&action=edit&redlink=1).
