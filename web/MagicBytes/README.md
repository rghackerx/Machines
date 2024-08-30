1. This is an easy level machine based on the bites of an image.
2. Just to change some bites of the image and save it , it will not open 
3. then use any tool or own method by understanding how magic byte works.
    like in jpg : ff or in png : 98 it will start.
4. correct the magic bytes , open the image and get flag.
---------------------------------------------------------------------------

Tools : 

1. TO edit image hex 
    --> xxd 
    1. commands :
        --> xxd flag.png > image.hex
        --> vim image.hex (change some bits , initial 4 to 8 is preferable)
        --> xxd -r image.hex currpoted-flag.png
        --> this curropted.png is the curropted image file made from the modified hex 
        --> now give this image to contestents to correct.

    2. MagicBytes --> tool on github to correct image hex bites : jpg, jpeg , png supported only.
        --> run this and give image path and you'll get corrected flag.png

WARNING : First test the image after pass it to the contestents.
