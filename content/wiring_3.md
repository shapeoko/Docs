## Option #3 
This is the 'mount the controller on the machine' method. It's experimental, it's untested, it's **hot**. You can assemble the entire machine before doing this step*. If you venture down this path, you're an explorer, and may be on your own. It might be worth it.

###assembly tip
_*while it's physically possible to attach the arduino after the machine is assembled, it's a pain in the ass. If you want to do yourself a favor, and save some frustration. Wire the entire gantry before mounting it to the work area._


_note: in all the pictures shown below, yellow zip ties are used. these are preferred for documentation because they are more visible than the black zip ties included with your kit_

![mtcotm](wiring/68-so_wiring-067.jpg)

###You will need the following to complete this option

* Zip Ties
* Expandable Braiding (2 sizes)
* Razor Blade (wire strippers)
* Bravery & Courage

###X and Z wiring 
Looking at the machine from the back, the idea is to pull down the wires from the Z-axis stepper motor to the x-axis carraige. Then pull up the x-axis stepper motor wires to the top of the carriage, so you can zip tie them together using the included zip ties. 

![rear view svg](wiring/wiring_3_rearview.svg);


####Expandable Braiding
The included expandable braiding can be used in this step as well. The best way to thread the wires through the braiding is to twist them together, forming two 'groups', like so:

![expandable braiding step 1](wiring/38-so_wiring-037.jpg)

And then you can start threading both groups (simultaneously) through the expandable braiding. This isn't hard, but takes a little time if you've never done it before. 

![rear view start](wiring/39-so_wiring-038.jpg) ![rear view end](wiring/40-so_wiring-039.jpg)


####Routing Wires
After the wires are pulled through the braiding, continue pulling until both wires are tight. They will be uneven lengths (because the z-axis is further away!).

![rear view pulled through](wiring/43-so_wiring-042.jpg)

Be sure you have approximately 5 inches of wire for the x-axis. We are going to route that **around* the stepper motor, so we'll need a longer length to make it to the controller.

![rear view wire length](wiring/46-so_wiring-045.jpg)

Once you do, put a zip tie on the end of the braiding to keep it from fraying and to keep it from sliding back down. 

![rear view zip braiding](wiring/44-so_wiring-043.jpg)

Then, zip tie that to the side motor mount

![rear view zip to carriage](wiring/47-so_wiring-046.jpg)

Now that the bundle has been tied to the motor mount plate, go ahead and route the wires around the stepper motor as shown below. 

![side view svg](wiring/wiring_3_sideview.svg);

Once that is finished, you are done (for now) with the X and Z stepper motor wires. Just move those out of the way. Now it's time to wire up the Y axis!

###Y Axis
Here is an overview of how the Y-axis wires are routed. From the front, you can see the second Y stepper motor (the one on the left side of the machine), has it's wires routed through the makerslide. 
![front view svg](wiring/wiring_3_frontview.svg);

It's easiest if you slide the gantry all the way towards the left side. Then twist the wires together (like we did to get them through the expandable braiding earlier), then thread the wires through the horizontal slot on the carriage plates. Like this:

![start threading](wiring/27-so_wiring-026.jpg)

Once you have pushed the wires past the gantry, grab the bundle and pull it out from between the pieces of makerslide. It's easier to do this than try to thread it all the way across.

![keep threading](wiring/28-so_wiring-027.jpg)

At the opposite side of what you started, thread the wires through the carriage plate's top slot. Like this

![keep threading](wiring/29-so_wiring-028.jpg)

Now pull the wires so they are fairly taught on the otherside. Be careful not to pull too hard!

![keep threading](wiring/31-so_wiring-030.jpg)
![keep threading](wiring/30-so_wiring-029.jpg)

Both sets of wires for the Y axis should be on the same side of the machine now. That's awesome. This part is going to get pretty hairy. The wires coming from the Y axis stepper motor that's on the same side as the controller, are **REALLY** long. I dont' advocate cutting these wires. You never know what you might want to do to your machine at some piont in the future, and cutting the wires might limit your options. Instead, let's manage the wires the best we can, and then wrap them up together and tuck them away. 

First step is to pull your leads so they're not so curly. The motors ship in a styrofoam box and their leads are all wound up to conserve shipping space. Do yourself a favor and smooth those wires out. Otherwise they're going to be curling up and getting all twisted around things. Seriously. Smooth them out.

**Now that that's done, let's move on.**

Tie your pairs together, like the image below. (black -> green, green -> black, red -> red, blue -> blue). It will be easier (and more secure) if you strip off a few more **mm** of coating before twisting them together.  

![rear view actual image](wiring/50-so_wiring-049.jpg)


Let's go ahead and wire the motors to our controller now

####Z-Axis

![rear view actual image](wiring/49-so_wiring-048.jpg)

####X-Axis

![rear view actual image](wiring/52-so_wiring-051.jpg)

####Y-Axis

![rear view actual image](wiring/54-so_wiring-053.jpg)


Now, everythign shoudl be connected to your gShield, so it's time to attach the gShield to the Arduino. Take your time and make sure you have all the pins lined up.

![rear view actual image](wiring/55-so_wiring-054.jpg)

Once that's connected, you'll find yourself with a **RAT'S NEST** of wires. It's time to get those under control. 

![rats nest taming](wiring/57-so_wiring-056.jpg)

Pull the extra wire out, and ziptie the base of it together

![rats nest taming](wiring/58-so_wiring-057.jpg)

Pull more out, folder it over itself and ziptie it again

![rats nest taming](wiring/59-so_wiring-058.jpg)

Cover the bundle with expandable braiding, adding a ziptie to the bottom, and top. Then tie the whole thing to the plate like in the picture shown below.

![rats nest taming](wiring/60-so_wiring-059.jpg)

If it's done right, you'll end up with something like this. 

![rear view actual image](wiring/68-so_wiring-067.jpg)