# shibui
---

Shibui is a partial port of the theme created by Underscores.me. Their wonderful bare bones theme has served me well as a custom theme and many other developers for many years. To help speed up my process of project setup, this repo contains my most modified files, to save me time during project setup. Probably someday I'll make this automated, but I think any developer knows how you are always changing, tweaking, and rebuilding...and the rent is just too damn high, sometimes.

In Japanese, Shibui is a term meaning a particular aesthetic of simple, subtle, and unobtrusive beauty. For more information, please research Wabi Sabi if you wish to know more.

## From Underscores' Instructions

1. Search for `'_s'` (inside single quotations) to capture the text domain.
2. Search for `_s_` to capture all the function names.
3. Search for `Text Domain: _s` in `style.css`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks.
5. Search for `_s-` to capture prefixed handles.

OR

1. Search for: `'_s'` and replace with: `'megatherium-is-awesome'`
2. Search for: `_s_` and replace with: `megatherium_is_awesome_`
3. Search for: `Text Domain: _s` and replace with: `Text Domain: megatherium-is-awesome` in `style.css`.
4. Search for: <code>&nbsp;_s</code> and replace with: <code>&nbsp;Megatherium_is_Awesome</code>
5. Search for: `_s-` and replace with: `megatherium-is-awesome-`

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

## Copyright and license

Original copyright owned by Automattic. I claim no copyright or ownership of this code - I'm just trying to speed up my own workflow.