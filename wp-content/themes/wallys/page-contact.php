<?php
/*
Template Name: Contact
*/
get_header(); ?>

<main>

    <section id="googlemap" class="clear">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2975.3324238363584!2d-88.28343004927754!3d41.778048979547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880efa59d9570191%3A0xe61993d70ad3402f!2sWally&#39;s+Printing!5e0!3m2!1sen!2sus!4v1499046066282" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <section class="main_contact">

        <section class="contact_info">
            <p>PHONE:
            630-851-3400</p>

            <p>FAX:
            630-851-8857</p>

            <p>EMAIL:
            sales@wallysprinting.com</p>

            <p>ADDRESS:
              969 N. Farnsworth Ave.
              Aurora, IL 60505</p>

            <p class="no_spacing">HOURS:</p>
            <p class="no_spacing">Sunday: Closed</p>
            <p class="no_spacing">Monday: 8:30-5:30</p>
            <p class="no_spacing">Tuesday:  8:30-5:30</p>
            <p class="no_spacing">Wednesday:  8:30-5:30</p>
            <p class="no_spacing">Thursday:  8:30-5:30</p>
            <p class="no_spacing">Friday:  8:30-5:30 </p>
            <p class="no_spacing">Saturday: Closed </p>

        </section>

        <section id="form">
            <form>
                <fieldset>
                    <legend> Contact Us </legend>
                        <p class="white_text"> NAME: <input type="text" name="name" class="roundcorners" required></p>
                        <p class="white_text">PHONE: <input type="tel" name="phone" class="roundcorners" required></p>
                        <p class="white_text">EMAIL: <input type="email" name="email" class="roundcorners" required></p>
                        <p class="white_text">ARTWORK: <input type="file" name="artwork" accept="image/*"></p>
                        <p class="white_text">MESSAGE: <input type="textarea" name="message" class="roundcorners" required></p>
                        <p class="white_text"><input type="submit" value="Submit!"></p>
                </fieldset>
            </form>
        </section>
    </section>


</main>

<?php get_footer(); ?>
