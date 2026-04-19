# Adjusting the TYPO3 Theme Camino with Extension "My Camino"

One aspect in the theme camino which might be seen as too restrictive, is that
PageTS can't be entered in the pages.

Reason to change it could stem from the desire or requirement to allow more
content element types, maybe in general, or only in distinct columns.

While it's of course possible to change all settings of the theme camino by
a sitepackage, I wanted just enable the field for PageTS in pages and save any
changes therefore in the database.
The common approach would be to write individual configuration in the additional
extention, also for being able to version the settings per git.
My contrary approach is based on the idea to change the least possible amount
of configuration by additional extension-code but rather work within the theme
and backend of TYPO3.

This led to a very minimal extension “My Camino” which is essentially just
changing one configuration value of the Camino Theme extension, and this
is the one to enable the PageTS field in pages.
Especially for people who are not too experienced, this might be difficult
to achieve without doing too much or clashing with the theme extension,
therefore I published this slim extension.

Concerning the Theme Camino extension I've still to links which might be helpful:
 * [Preview Page with Appearance toggle](https://davidbruchmann.github.io/typo3-theme-camino/)
 * [The Camin Theme extension itself with Appearance toggle](https://github.com/DavidBruchmann/typo3-theme-camino)

