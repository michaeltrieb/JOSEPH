<?php

/* Template Name: About Page Template*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<!-- Google Maps API Key: AIzaSyCntrEQQu7o_mmL4uN9heTGLZEKwVF8kU8 -->

<div class="container">
    <div class="row">


    <div class="col span_4">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/i/avery.JPG" alt="" id="aboutimg">
    </div>

    <div class="col span_8">
        <p class="pagepara">
            It's about time someone shook shit up! We are here now, all of us, to make
            your coffee dreams come true. And to let music capture your golden soul.
        </p>
    </div>
    </div>

</div>
<hr>

<div id="map">
    <iframe
      width="700"
      height="350"
      frameborder="0" style="border:0"
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCntrEQQu7o_mmL4uN9heTGLZEKwVF8kU8&q=6225+Delmar,St.Louis,MO" allowfullscreen>
    </iframe>
</div><!--map-->



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
