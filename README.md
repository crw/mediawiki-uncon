# mediawiki-uncon
Uncon Mediawiki GCE deployment artifacts

## Installation

The methodology used to create this site is pulled from the following two tutorials:

* https://cloud.google.com/container-engine/docs/tutorials/persistent-disk
* https://cloud.google.com/container-engine/docs/tutorials/hello-app

The entire operation consistes of one docker image, two services, two pods, and two persistent disks. Note that you would need to change these files a bit for a new deployment. The project name (and thus image name) at Google will change. 

Once the mysql pod is correctly setup, there is a one-time data import necessary to prime the database. 
(kubectl cp data.sql pod:/data.sql; login to pod; create database; import database data.)

Once the mediawiki pod is correctly setup, there is a one-time images data import necessary to... have images.
(kubectl cp images pod:/var/html/www/images; delete and recreate pod so that mediawiki will regenerate thumbnails.)

Data is currently backed up by @crw, a copy can be obtained from him.  

Note that the version of MediaWiki used in the backup is 1.25. The latest docker image is MediaWiki 1.29. Be sure to run any upgrade steps to bring the installation up-to-date; this may include cleaning up the LocalSettings.php config file. 

https://www.mediawiki.org/wiki/Manual:Upgrading

## Potential Future Improvements

* Use Google Cloud SQL instead of a mysql container.
* Figure out how to manage the images volume so that you could run more than one pod at a time. (ReplicaSet?)
