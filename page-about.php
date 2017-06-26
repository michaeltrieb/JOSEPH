<?php

/* Template Name: About Page Template*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<!-- Google Maps API Key: AIzaSyCntrEQQu7o_mmL4uN9heTGLZEKwVF8kU8 -->

<div class="container">
    <div class="row gutters">
        
        <div class="col span_4">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/i/abi.JPG" alt="" id="aboutimg">
        </div>

        <div class="col span_8">
            <div class="about-info">
                <div class="who">
                    <h2>Who</h2>
                    <p>Joseph is a coffee shop/venue space founded in 2017.
                        There was an obvious need for inexpensive coffee served with a
                        sense of dignity and class, while also providing an outlet for
                        the burgeoning local music scene.
                        Diner coffee in a third wave atmosphere. That's our mantra.
                    </p>
                </div>
                <div class="why">
                    <h2>Why</h2>
                    <p>You need a place to get work done without an air of pretension breathing down your millenial neck.</p>
                </div>
            </div>
        </div>
    </div>

</div>
<hr>

<div class="map-responsive">
    <iframe
      width="700"
      height="350"
      frameborder="0" style="border:0"
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCntrEQQu7o_mmL4uN9heTGLZEKwVF8kU8&q=6225+Delmar,St.Louis,MO" allowfullscreen>
    </iframe>
</div><!--map-->



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
