<?php

/* Template Name: About Page Template*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<!-- Google Maps API Key: AIzaSyCntrEQQu7o_mmL4uN9heTGLZEKwVF8kU8 -->

<div id="map">
    <iframe
      width="700"
      height="350"
      frameborder="0" style="border:0"
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCntrEQQu7o_mmL4uN9heTGLZEKwVF8kU8&q=6225+Delmar,St.Louis,MO" allowfullscreen>
    </iframe>
</div><!--map-->



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
