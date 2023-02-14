# shibui
---

Shibui is a partial port of the theme created by *Underscores.me*. This wonderful bare-bones theme has served me well as a basis for custom themed sites for many years. To help speed up my process of project setup, this repo contains my most modified files, to save me time during the project setup. Perhaps someday I'll make this automated, but I think any developer knows how you are always changing, tweaking, and rebuilding...and the rent is just too damn high, sometimes.

In Japanese, Shibui is a term meaning a particular aesthetic of simple, subtle, and unobtrusive beauty. For more information, please research Wabi Sabi, if you wish to know more.

--

## Styles & Scripts

Currently this project uses Bootstrap 3.4.1, which is what I've been primarily using for the last several years. Bootstrap 4 is included as I am in the testing phase with upgrading, however Bootstrap 5 has been released and is very promising. This project also uses Font Awesome version 4.7.0, but will be depreciated to use Bootstrap's SVG icons in the future, as well as make the addition of these icons optional, with site speed time in mind. 

*Bodyslug.css* contains media queries focusing on mobile first. These are just for reference. The name of this file is changed by you to the theme slug that you create when you spin up the Underscores theme.

*functions.php* is a bare minimum file to be coupled with my Constitutional Functions plugin, which has many snippets and is ready to work with the theme modifications I made here. 

*main.js* is the main, empty JS file for the whole site, using the WordPress jQuery function. Write all functions within this so that you can use the localized WordPress version of jQuery. If you need another version, you can use WordPress to reference it but your mileage may vary. Contains Skip Link Focus (see below.)

*style.css* This has stripped out some of the unnesscary default styles that Underscores adds and minifies them. Essentially this file just needs the theme name and credits updated and then the rest of your styles go into the *bodyslug.css*.

## Choreography Styles

There are two versions of Skinny Choreography. One has Bootstrap 3 and one has Bootstrap 4. Since I am transitioning to using Bootstrap 4, but still use Bootstrap 3 on a lot of projects, there are two files. Each of these are a version of the *bodyslug.css* file but without any helper classes (like any extra Bootstrap CSS/JS components) outside of reset, grid and grid helper classes. This is for quick projects so they don't need to have the bulk of Bootstrap added to the project, in order to keep the project file size down. After I've done a few projects with these, I'll revise.

*Note:* I will be depreciating this soon, in favor of my own style library, (jimi)[https://github.com/jwrightmedia/jimi]

## Skip Link Focus.js Removed - Underscores
The *main.js* combines the Skip Link Focus (minified) at the top of the file. This means you won't have to load that, but you will have to make sure the *main.js* file is loaded across all pages. On average, I leave the Skip Link Focus in the js folder when it is generated by Underscores, just in case. There might be a better way to do this, but since the script is so small, I can save a few miliseconds of load time for the file.

If you do add this back as a separate file, underscores puts it loading in the <head>. I suggest putting it in the footer_scripts in the theme functions, as this isn't an essential file to be loaded before the rest of the content.

## htaccess

An htaccess that does *not* contain WordPress or SSL information is included. This txt file has expires and caching processes to be added to the htaccess created by the WordPress installation or Web Host. This should be tested prior to the site going live and at this time does not work with hosts like (Pantheon)[https://pantheon.io/].

## acf_samples.php

This is listing of quick reference ACF code samples. Saves time from Googling or trying to recall exactly how to do something.

## wp_samples.php

This is listing of quick reference WordPress code samples. Saves time from Googling or trying to recall exactly how to do something. Not a replacement for the (WordPress Codex)[https://codex.wordpress.org/Main_Page].

## acf-json folder

This empty folder is only here in order to remind me to create this folder within the theme folder. Included in (Constitutional Functions)[https://github.com/jwrightmedia/constitutional-functions] is a code snippet that automatically saves the json file of any ACF field group to this folder. It's a backup just in case something gets corrupted in the database or breaks.

## Copyright and license

Original copyright owned by Automattic. I claim no copyright or ownership of this code - I'm just trying to speed up my own workflow.