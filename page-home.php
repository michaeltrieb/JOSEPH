<?php

/* Template Name: Home Page Template */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

</div><!--closing container from header.php-->

<div class="avery">
</div>

<div class="container">


<div class="container row gutters">
    <div class="col span_4">
        <h3>HOURS</h3>

        <p><strong>Mon:</strong> Closed</p>
        <p><b>Tues-Thurs:</b> 7am-7pm</p>
        <p><b>Fri-Sun:</b> 7am-10pm</p>
    </div><!--col span_4-->

    <div class="col span_4">
        <h3>LOCATION</h3>
        <address>6225 Delmar, St. Louis, MO</address>
        <a href="tel:+16362220490">636 222 0490</a>
    </div><!--col span_4-->

    <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
    <div class="col span_4 primary-sidebar widget-area" id="primary-sidebar" role="complementary" style="overflow-y:scroll;">
        <h3>TWEETS</h3>
        <?php dynamic_sidebar( 'home_right_1' ); ?>
        <?php endif; ?>
        <a href="http://www.twitter.com/JOSEPHCOFFEEE">@JOSEPHCOFFEEE</a>
    </div><!--col span_4-->

</div><!--container row-->


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
