<?php

/* Template Name: Contact Page Template */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


    <div id="contactform">
        <form action="" method="post">
            <fieldset>
            <legend>Contact Us</legend>
                <label for="name">Name</label>
                <input type="text" name="name">
                <label for="email">Email</label>
                <input type="text" name="email">
                <label for="message">Message</label>
                <textarea name="message"></textarea>
                <input type="submit" Value="Submit">
            </fieldset>
        </form>
    </div><!--contactform-->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
