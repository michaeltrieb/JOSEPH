<header>
    <div id="main">
        <h1 class="logo"><span>JOSEPH</span></h1>
        <h6 class="tagline">Coffee and music. Est. 2017</h6>
    </div><!--main-->

<?php
$navParams = array(
	'theme_location' 	=> 'header-menu',
 	'container'     	=> '',
	'items_wrap'		=> '<nav class="topnav responsive" id="topnav">
                            <ul>%3$s</ul><a href="javascript:void(0);"
                            style="font-size:15px;" class="icon"
                            onclick="myFunction()">&#9776;</a></nav>
                            '
);

wp_nav_menu( $navParams ); ?>
</header>

<div class="container">
