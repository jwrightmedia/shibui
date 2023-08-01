# shibui

Shibui is a partial port of the theme created by *Underscores.me*. This repo serves as my custom theme prep archive in order to speed up my process of project setup. The most recent version of this repo has files prepared for copying and pasting, but still needs the *bodyslug* to be changed on the files ready to be used.

In Japanese, Shibui is a term meaning a particular aesthetic of simple, subtle, and unobtrusive beauty. For more information, please research Wabi Sabi, if you wish to know more.

## bodyslug Find & Replace

Anyplace where *bodyslug* is found in these files, you must replace that with the bodyslug that is generated by *Underscores* when you spin up the theme from their generator.

## Styles & Scripts

Currently, I use Bootstrap 5 or my stripped down layout/design library [jimi](https://github.com/jwrightmedia/jimi). Font Awesome version 4.7.0 is included in this repo, but only as an easy default. 

*Bodyslug.css* Rename to the theme slug.

*functions.php* is a minimal file and is only here to make sure the theme works. Don't add anything to this file and use [Constitutional Functions](https://github.com/jwrightmedia/constitutional-functions) for anything custom and not already called in this file.

*main.js* is the main, empty JS file for the whole site, using the WordPress jQuery function. Write all functions within this so that you can use the localized WordPress version of jQuery. If you need another version, you can use WordPress to reference it but your mileage may vary. Contains Skip Link Focus (see below.)

*/js/modernizr 3.11.0.js* specific version left over from a previous project. 

*style.css* This has stripped out some of the unnesscary default styles that Underscores adds and minifies them. Essentially this file just needs the theme name and credits updated and then the rest of your styles go into the *bodyslug.css*.

## Skip Link Focus.js Removed - Underscores

The *main.js* combines the Skip Link Focus (minified) at the top of the file. This means you won't have to load that, but you will have to make sure the *main.js* file is loaded across all pages. On average, I leave the Skip Link Focus in the js folder when it is generated by Underscores, just in case. There might be a better way to do this, but since the script is so small, I can save a few miliseconds of load time for the file.

If you do add this back as a separate file, Underscores puts it loading in the *<head>*. I suggest putting it in the footer_scripts in the theme functions, as this isn't an essential file to be loaded before the rest of the content.

## htaccess

An htaccess that does *not* contain WordPress or SSL information is included. This txt file has expires and caching processes to be added to the htaccess created by the WordPress installation or Web Host. This should be tested prior to the site going live and at this time does not work with hosts like [Pantheon](https://pantheon.io/). Use with caution and only if you are aware of the host set up.

# Time Savers

## acf_samples.php

Listing of quick reference ACF code samples.

## acf_flexible-content_samples.php

Listing of quick reference ACF code samples specific to the Flexible Content option of ACF Pro for quick reference when adding Flexible Content options to page and includes global options.

## css_samples.php

Some older CSS things that I keep losing, so I threw them in here.

## wp_samples.php

Quick reference WordPress code samples. Not a replacement for the [WordPress Codex](https://codex.wordpress.org/Main_Page).

## acf-json folder

This empty folder is only here in order to remind me to create this folder within the theme folder. Included in [Constitutional Functions](https://github.com/jwrightmedia/constitutional-functions) is a code snippet that automatically saves the json file of any ACF field group to this folder. It's a backup just in case something gets corrupted in the database or breaks.

## Other Folders

CSS, fonts, img, inc, js all contain files mentioned above or are here to remind me to add these folder to the themes.

## Copyright/License

Original copyright owned by Automattic. I claim no copyright or ownership of this code - I'm just trying to speed up my own workflow.