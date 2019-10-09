# shibui
---

Shibui is a partial port of the theme created by Underscores.me. Their wonderful bare bones theme has served me well as a custom theme and many other developers for many years. To help speed up my process of project setup, this repo contains my most modified files, to save me time during project setup. Probably someday I'll make this automated, but I think any developer knows how you are always changing, tweaking, and rebuilding...and the rent is just too damn high, sometimes.

In Japanese, Shibui is a term meaning a particular aesthetic of simple, subtle, and unobtrusive beauty. For more information, please research Wabi Sabi, if you wish to know more.

--

## Styles & Scripts

Currently this project uses Bootstrap 3.3.7, which is what I've been primarily using for the last several years. Plans to update to Bootstrap 4 will come eventually when I have a project with enough time and wiggle room for me to do so. This also uses Font Awesome version 4.7.0, which is before the newer paid version. At this time, I don't see any reason to not use 4.7.0 until they stop supporting it and take down the links. It should be hosted locally, which is found in this repo.

Bodyslug.css contains media queries for both original desktop to mobile direction of gracefully degrading and for the modern Bootstrap 4 of mobile first. Eventually I'll drop the former in favor of the latter.

The empty script.js has the WordPress jQuery function. Write all functions within this so that you can use the localized WordPress version of jQuery. If you need another version, you can use WordPress to reference it but your mileage may vary.

## htaccess

An htaccess that does *not* contain WordPress or SSL information is included. This txt file has expires and caching processes to be added to the htaccess created by the WordPress installation or Web Host. This should be tested prior to the site going live and at this time does not work with hosts like Pantheon.

## Copyright and license

Original copyright owned by Automattic. I claim no copyright or ownership of this code - I'm just trying to speed up my own workflow.