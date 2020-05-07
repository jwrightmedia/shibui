# shibui
---

Shibui is a partial port of the theme created by *Underscores.me*. Their wonderful bare bones theme has served me well as a custom theme, for many years. To help speed up my process of project setup, this repo contains my most modified files, to save me time during project setup. Probably someday I'll make this automated, but I think any developer knows how you are always changing, tweaking, and rebuilding...and the rent is just too damn high, sometimes.

In Japanese, Shibui is a term meaning a particular aesthetic of simple, subtle, and unobtrusive beauty. For more information, please research Wabi Sabi, if you wish to know more.

--

## Styles & Scripts

Currently this project uses Bootstrap 3.4.1, which is what I've been primarily using for the last several years. I have plans to update to Bootstrap 4 once I have had more time with Bootstrap 4, which I might hold off because of Bootstrap 5 coming soon. This project also uses Font Awesome version 4.7.0, which is before the newer paid version. At this time, I don't see any reason to not use 4.7.0 until they stop supporting it and take down the links. It should be hosted locally, which is found in this repo.

*Bodyslug.css* contains media queries for both original desktop to mobile direction of gracefully degrading and for the modern Bootstrap 4 of mobile first. Eventually I'll drop the former in favor of the latter.

The empty *main.js* has the WordPress jQuery function. Write all functions within this so that you can use the localized WordPress version of jQuery. If you need another version, you can use WordPress to reference it but your mileage may vary.

## Choreography Styles

There are two versions of Skinny Choreography. One has Bootstrap 3 and one has Bootstrap 4. Since I am transitioning to using Bootstrap 4, but still use Bootstrap 3 on a lot of projects, there are two files. Each of these are a version of the *bodyslug.css* file but without any helper classes outside of reset, grid and grid helper classes. This is for quick projects so they don't have to have the bulk of Bootstrap added to the project, in order to keep the project file size down. After I've done a few projects with these, I'll revise.

## Skip Link Focus.js
The *main.js* combines the Skip Link Focus (minified) at the top of the file. This means you won't have to load that, but you will have to make sure the *main.js* file is loaded across all pages. Leave the Skip Link Focus in the js folder just in case of this. I did this because I always have this file loading on all pages, at this time, as a general file. I will find a better way to do this, but for now this cleans up my footer from extra JS files.

If you do add this back as a separate file, underscores puts it loading in the <head>. I suggest putting it in the footer_scripts where it belongs.

## htaccess

An htaccess that does *not* contain WordPress or SSL information is included. This txt file has expires and caching processes to be added to the htaccess created by the WordPress installation or Web Host. This should be tested prior to the site going live and at this time does not work with hosts like Pantheon.

## Copyright and license

Original copyright owned by Automattic. I claim no copyright or ownership of this code - I'm just trying to speed up my own workflow.