## Option #2

![](tPictures/so_wiring_terminalblocks_tools_2.jpg)
![](tPictures/so_wiring_terminalblocks_parts_2.jpg)
![](tPictures/so_wiring_zaxis_expandablebraid_2.jpg)
![](tPictures/so_wiring_gantry_zaxis_terminalblock_2.jpg)
![](tPictures/so_wiring_x_y_terminalbocks_2.jpg)

This is the terminal block method. This method is pretty easy, but requires that you make some preparations **WHILE** you are assembling the machine (mounting the terminal blocks). It is especially suited if you have short motor leads, or want to expand your machine beyond the reach of your motor leads.

**Note:** The photographs show one way to do the wiring, but it would be better to follow the electronics layout svg wiring diagram. Eventually the photographs will be re-taken.

![Z-axis wiring with terminal blocks](wiring/rear_rendered_with_tb.png)

![wiring with terminal blocks](wiring/rendered_wiring_right_tb.png)

(By elimination, the unlabelled terminal block in the first diagram is for the Z-axis.)

###You will need the following tools and parts to complete this option

####Parts

* 4 Position Terminal Block x 3 pcs.
* Zip Ties
* Expandable Braiding
* Heat shrink tubing

You may either Zip tie the terminal blocks to the motor carriages or bolt them, if you bolt them you will also need:

* M3 x 16mm SHCS x 6 pcs.
* M3 flat washer x 12 pcs.
* M3 hex nut x 6 pcs. 

You may also need M4 or M5 washers to place in-between the M3 washers and motor mount plates --- these make it easier to keep things aligned and provide a larger surface.

####Tools

* Razor Blade (wire stripper)
* Screw Driver, 2mm straight (for connecting the grey stepper wires to the Arduino)
* Screw Driver, #2 Philips or 9/32" flat (for the combination screws on the terminal blocks)
* 5.5 mm open end wrench (for the M3 nuts if securing the terminal blocks with bolts)
* 2.5 mm Hex key (for the M3 SHCS)
* a heat source (heat gun or (hair) blow dryer)

[![](tPictures/so_wiring_terminalblocks_parts_4.jpg)](content/tPictures/so_wiring_terminalblocks_parts_8.jpg)

(_Note the above photograph shows some extra bolts, washers and nuts. It also shows a fully assembled Z-axis carriage --- the instructions have one place the terminal blocks on the carriage plate sub-assemblies at the end of the [carriages step](http://docs.shapeoko.com/carriages.html)._)

During assembly, attach two terminal blocks to the right Y-axis motor mount carriage and one to the right of the X-axis motor mount carriage. Note the indicated stepper motor orientation, which makes for neater cable runs.

[![](tPictures/so_wiring_terminalblocks_tools_4.jpg)](content/tPictures/so_wiring_terminalblocks_tools_8.jpg)

###Z-axis

[![](tPictures/so_wiring_zaxis_expandablebraid_4.jpg)](content/tPictures/so_wiring_zaxis_expandablebraid_8.jpg)

After assembly, start at the Z-axis. Raise the Z-axis as high as it will go. Secure the Z-axis lead wire close to the stepper motor to a stand-off to minimize its movement. 

Cut off a length of expandable braiding long enough to reach from the motor stand-offs to the X-axis motor mount carriage plate when the Z-axis is fully raised. Feed the Z-axis motor lead through it, positioning it on the leads so that it can be zip-tied to the stand-offs and mount plate. 

Cut off two ~1" lengths of heat shrink tubing, slide each over the Z-axis leads and the expandable braid, place one piece of heat shrink tubing over either end of the expandable braid. Apply heat to fix them in place over the ends of the braids, then zip-tie each end in place. _Or you can just zip-tie the ends of the expandable braiding._


Re-connect the leads to the terminal block as well as a grey 4-conductor wire (see the [Electronics page](http://docs.shapeoko.com/electronics.html) for details). Arrange and secure any excess length of the Z-axis leads, arrange and zip-tie the Z-axis stepper motor wire off the top of the right side of the X-axis plate.

###X-axis

[![](tPictures/so_wiring_gantry_zaxis_terminalblock_4.jpg)](content/tPictures/so_wiring_gantry_zaxis_terminalblock_8.jpg)

Move the X-Z-sub-gantry to the left of the gantry. 

Zip-tie the X-axis leads close to the stepper motor to the carriage plate to minimize its movement, orienting it towards the Z-axis stepper motor wire. 

Arrange the stepper motor wire in an even arc leading to the right Y-axis motor mount plate. Zip-tie the leads to the wire until you reach the mount plate (alternately, use expandable braiding if you have a suitable size and length). Zip-tie the Z-axis stepper motor wire to the plate near the Makerslide and arrange it towards the rear of the machine.

Re-connect the X-axis leads to the  right-most terminal block as well as a grey 4-conductor wire. Arrange and secure any excess length of the X-axis leads, arrange the X-axis stepper motor wire towards the rear of the machine.

###Y-axis

[![](tPictures/so_wiring_x_y_terminalbocks_4.jpg)](content/tPictures/so_wiring_x_y_terminalbocks_8.jpg)

Thread the left Y-axis stepper motor leads through the top slot of the mount plates and through the MakerSlide to the right gantry plate, Zip-tieing it where it passes through each slot.  

Twist the leads together with the leads from the right Y-axis motor (remember to reverse one pair of wires) and connect them to the terminal block. 

Bundle and secure the excess leads. Connect the Y-axis stepper motor wire to the terminal block and arrange it towards the rear of the machine. Zip-tie it in place at the rear of the plate. Zip-tie it and the other stepper motor wires together.

###Arduino

[![](tPictures/so_enclosure_legobricks_4.jpg)](content/tPictures/so_enclosure_legobricks_8.jpg)

Arrange the stepper motor wires so that they reach the Arduino and if necessary re-connect them to it. Check all the wiring, moving the machine carefully through its range of X- and Y-axis motion, ensuring nothing works loose. If you have access to a multimeter, use it to check the continuity of the wiring before connecting, powering up and testing or using the machine.

Jog each axis, checking the direction and distance of the machine's movement. If any movement is in the wrong direction, reverse a pair of wires at the Arduino or reconfigure Grbl. If movement is more or less than expected, check the gShield micro-stepping jumpers for that axis --- if necessary re-calculate Grbl's settings.

Proceed to [Hello World!](http://docs.shapeoko.com/helloworld.html) once everything checks out.


