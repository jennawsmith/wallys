<?php
/*
Template Name: About
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main class="about">
    <?php the_content(); ?>
    <section id="history" class="cyan_box">
        <h2>History</h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam posuere nisi. Proin eleifend consectetur lectus, nec sollicitudin massa laoreet sit amet. Proin ultricies magna auctor tristique luctus. Curabitur consectetur tellus quis elit tincidunt, nec dapibus est faucibus. Vivamus ut turpis non enim ultricies placerat id id tortor. Morbi vel nisi faucibus, aliquet metus mattis, pharetra ligula. Nunc libero est, lobortis ac elementum ac, consequat eget tellus. In at sollicitudin justo, nec laoreet sem. Aenean commodo molestie magna, eget consectetur nunc congue a. Duis ultrices metus ut placerat condimentum. Nullam at tincidunt arcu, ac aliquet urna. Aliquam erat volutpat. Fusce in lectus sit amet urna accumsan hendrerit. Mauris dui elit, rutrum at laoreet vitae, aliquet vitae quam. Maecenas vitae dolor augue.</p>
    </section>

    <section id="ourstaff" class="cyan_box">
        <h2>Our Staff</h2>
        <p>Wally Roskuszka, CEO and Manager</p>
        <p>Sandy Roskuszka, Assistant Manager and Book-keeper</p>
        <p>Wally Roskuszka, Assistant Manager </p>
    </section>

    <section id="employment" class="cyan_box">
        <h2>Employment</h2>
        <p>Want to work with us?</p>
    </section>
</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
