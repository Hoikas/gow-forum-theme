<?php
header('Content-type: text/css');
# An array containing images picked at random
$images = array(
    'http://www.guildofwriters.org/wp-content/themes/two/images/backgrounds/bkgrd-body-01.jpg',
    'http://www.guildofwriters.org/wp-content/themes/two/images/backgrounds/bkgrd-body-02.jpg',
    'http://www.guildofwriters.org/wp-content/themes/two/images/backgrounds/bkgrd-body-03.jpg',
    'http://www.guildofwriters.org/wp-content/themes/two/images/backgrounds/bkgrd-body-04.jpg',
    'http://www.guildofwriters.org/wp-content/themes/two/images/backgrounds/bkgrd-body-05.jpg'
);

// Current functionality: embed in a background image with hardcoded bg color
// this should be changed to be more extensible if you want to reuse this
// component elsewhere. I cannot be assed to do that at the moment, however.
$key = array_rand($images);
echo "body {
	background: #DCC8A3 url('{$images[$key]}') no-repeat top center;
}";
?>
