# mediawiki-uncon
Uncon Mediawiki GCE deployment artifacts

# Installation

The methodology used to create this site is pulled from the following two tutorials:
https://cloud.google.com/container-engine/docs/tutorials/persistent-disk
https://cloud.google.com/container-engine/docs/tutorials/hello-app

The entire operation consistes of one docker image, two services, two pods, and two persistent disks.

Once the mysql pod is correctly setup, there is a one-time data import necessary to prime the database. 
(kubectl cp data.sql pod:/data.sql; login to pod; create database; import database data.)

Once the mediawiki pod is correctly setup, there is a one-time images data import necessary to... have images.
(kubectl cp images pod:/var/html/www/images; delete and recreate pod so that mediawiki will regenerate thumbnails.)

Data is currently backed up by @crw, a copy can be obtained from him.  
