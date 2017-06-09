<?php

/* Template Name: Home Page Template */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="container row gutters">
    <div class="col span_3">
        <h3>HOURS</h3>
        <br>
        <p><b>Mon:</b> Closed</p>
        <p><b>Tues-Thurs:</b> 7am-7pm</p>
        <p><b>Fri-Sun:</b> 7am-10pm</p>
    </div><!--col span_3-->
    <div class="col span_6">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/i/avery.JPG" alt="">
    </div><!--col span_6-->
    <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
    <div class="col span_3 primary-sidebar widget-area" id="primary-sidebar" role="complementary" style="overflow-y:scroll;">
        <h3>TWEETS</h3>
        <br>
        <?php dynamic_sidebar( 'home_right_1' ); ?>
        <?php endif; ?>
    </div><!--col span_3-->

</div><!--container row-->

<div class="container row">
    <div class="row">
        <p>6225 Delmar | STL MO | 636 222 0490</p>
    </div><!--row-->
</div><!--container row-->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
