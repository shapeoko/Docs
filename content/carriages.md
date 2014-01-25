# Carriages


##Wiring options

Before beginning this section, please take a look at the [wiring options](http://docs.shapeoko.com/wiring.html) page. 

* [Option \#1](wiring_1.html) (soldering), needs no special attention at this step other than noting the motor orientations show in the steps below.
* If you are going to use the terminal block method [option \#2](wiring_2.html), you will need to attach those terminal blocks at the end of this step.
* [Option \#3](wiring_3.html), although not necessary at this step, could make life easier to attach your Arduino to the *right* Y axis motor mount plate.

_See those specific options for more details._


## Overview

![exploded view of Motor Mount Carriages](tPictures/PS20022_2.png)
![Motor Mount Carriage, parts and tools](tPictures/so_motor_mount_carriages_parts_2.jpg)
![Motor Mount Carriage parts](tPictures/so_motor_mount_carriage_parts_2.jpg)

This step is the bulk of the work required to assemble your machine. There are two different styles of plates that we will be assembling. The first style includes a stepper motor, there are 3 of these plates total, and they will be used to drive both your X- and Y-axes. The other style is nearly identical to the first, with the exception of not having a stepper motor or smooth idlers attached. This plate will be used to connect your Z-axis assembly to your X-axis assembly. 

The 3 plates with stepper motors are identical and interchangeable. The plates are symmetrical, so there is no such thing as a front and a back (as they're the same) until one determines this by attaching parts. Keep in mind that your stepper motor will go on the opposite side of your wheels and smooth idlers.

**Note:** The plates are laser-cut and powder-coated --- please examine the holes to ensure that M5 bolts and the eccentric nuts will fit --- if there are any holes with obstructions, clear these using a knife blade, round file or other tool.

It might be easier and more straight-forward to assemble all four of them to match the Z-axis motor carriage mount plate, then set one aside for that, and add smooth idler wheels to make the other three.

When attaching V-wheels and Smooth Idlers, push them away from the horizontal centerline of the plate --- this will maximize the available space and minimize the chance of the wheels slipping. Similarly, turn the eccentric nuts to move the dynamic V-wheel as far as possible from the matching static one, so as to have the widest possible gap to make it easier to mount each assembly on the MakerSlide.

Note that the eccentric nuts have a centered rounded portion which mates with a matching hole on the plates --- it is that placement which allows them to function to adjust the spacing of the V-wheels.
 
##Motor Mount Carriages (PS20022) - 3 total

![assembled idler](tPictures/so_smooth_idler_2.jpg)
![assembled V-wheel](tPictures/so_v_wheel_2.jpg)
![Motor Mount Carriages parts](tPictures/so_motor_mount_carriage_parts_2.jpg)
![stepper motor, pulley, M3 bolts and washers, tools](tPictures/so_e_motor_pulley_2.jpg)
![smooth idler with spacer and washers](tPictures/so_smooth_idler_bolt_spacer_washers_2.jpg)
![](tPictures/so_vwi_vwheel_eccentric_tools_2.jpg)
![](tPictures/so_vwi_vwheel_tools_2.jpg)

These are the plates that will mount on either end of the gantry and on the rear of the X-Axis.


###Requirements


####Parts

 1.   **Motor Mount Plate** (12ga) (26029-01) x 3pcs
 *   **Eccentric Nut** (30158-01) x 6pcs
 *   (from previous step) - **Dual Bearing V-Wheel** (25203-02) x 12pcs
 *   **M5 x 20mm Button Head Cap Screw** (PS20004) x 12pcs
 *   **M5 Flat Washer** (25287-02) x 36pcs
 *   **M5 Hex Nut** (25284-02) x 12pcs
 *   (from previous step) - **Smooth Idler** (25197-02) x 6pcs
 *   **M5 x 30mm Button Head Cap Screw** (25286-05) x 6pcs
 *   3/8" x 5/16" x #12 bore **Aluminum Spacer** (25312-14) x 6pcs

####Parts for attaching stepper motors

 *   M3 SHCS x 12 pcs
 *   M3 Flat Washer x 12 pcs
 *   GT2 pulley (note that the set screw end goes on first)


####Tools

 * 3mm Hex Key
 * 2.5mm Hex Key (used for the M3 screws if attaching the motor)
 * 1.5mm Hex Key (used for the set screws in the pulley)
 * 8mm (5/16") wrench

[![exploded view of Motor Mount Carriages](tPictures/PS20022_4.png)](content/tPictures/PS20022_16.png)

1. Connect V-Wheels (**\#3**) to the plate (**\#1**)
	- two static at the top (using M5 Hex Nuts (**\#6**))
	- two eccentric at the bottom in the larger holes (using Eccentric Nuts (**\#2**)) --- note that the eccentric nuts have a round portion which should fit completely into these holes --- ensure that the nuts are inserted evenly and squarely and not canted at an angle.
2. Connect the smooth idlers (**\#7**) to plate
	- two total, these will need an aluminum spacer (**\#9**) (**Note:** You may want to sandwich the spacer in between two washers (**\#5**), rather than placing both washers against the plate as shown.)
	- take note of the orientation of the bolt (**\#4**)
	- take note of the orientation of the bearings/idler
3. Attach your stepper motor
	- Use four M3x6mm SHCS to attach each stepper motor
	- Use an M3 washer between the SHCS and the plate (**Note:** You may need more than one washer per bolt, depending upon the depth of the threads in the motor. Use an equal number of washers per motor. Be careful not to strip out the threads in the motor.) When you tighten the motor into place, do so in an X pattern. You want the face of the motor to be equally tight against the plate.

[![Assembled Motor Mount Carriages](tPictures/so_motor_mount_carriage_4.jpg)](content/tPictures/so_motor_mount_carriage_8.jpg)

Please note that the above photograph does not show the stepper motor in place. As previously noted, one should attach at least one stepper motor for the X-axis plate, as it's difficult to attach it once the gantry carriage is assembled. Use 4 M3 screws, 4 M3 washers and also attach the GT2 pulley (You should attach the pulley before mounting the motor.). If using [Wiring Option \#2](http://docs.shapeoko.com/wiring_2.html), attach the terminal blocks now to the appropriate plates, while the inner sides are readily accessible.

Motor orientation is as follows:


###Left Y-axis and X-axis

![wire facing up](wiring/stepper_orientation_up.svg)

(If using [wiring option \#2](http://docs.shapeoko.com/wiring_2.html), attach one terminal block to the right of the X-axis plate)


###Right Y-axis

![wire facing up](wiring/stepper_orientation_left.svg)

(If using [wiring option \#2](http://docs.shapeoko.com/wiring_2.html), attach two terminal blocks to this plate)


[![Assembled Motor Mount Carriages with motor added](tPictures/so_carriage_finished.jpg)](content/tPictures/so_carriage_finished.jpg)

The above photograph does not show the stepper motor in place, with the GT2 pulley.

###Next step [Z-axis](http://docs.shapeoko.com/zaxis.html)

To express concerns, post on the [forums](http://www.shapeoko.com/forum/index.php), to suggest improvements without using github, edit [this wiki page](http://www.shapeoko.com/wiki/index.php?title=Carriages_2&action=edit&redlink=1).
