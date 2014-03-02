TimThumb
========

TimThumb is one the most popular PHP scripts for simple image manipulations (cropping, zooming & resizing). Mainly used on WordPress for cached thumbnails generation. Yet, TimThumb’s caching mechanism is far from being perfect and requires execution of the TimThumb php script for every image request. Using this modified script and Nginx's routing configuration, we've managed to increase http://rating-widget.com server's daily requests limit in 26%.

In addition, this modified TimThumb script is configured to serve default set of images when invalid image source is provided.

The full post:
http://rating-widget.com/blog/timthumb-nginx-and-cache-cookbook-for-minimal-resource-consumption/

Original timthumb repository:
https://code.google.com/p/timthumb/

Project Page:
http://www.binarymoon.co.uk/projects/timthumb/
