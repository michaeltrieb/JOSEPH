<header>
    <div id="main">
        <h1 class="logo"><span>JOSEPH</span></h1>
    </div><!--main-->

<?php
$navParams = array(
	'theme_location' 	=> 'header-menu',
 	'container'     	=> '',
	'items_wrap'		=> '<nav><ul>%3$s</ul></nav>'
);

wp_nav_menu( $navParams ); ?>
</header>

<div class="container">
