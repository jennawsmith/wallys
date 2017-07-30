<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Wally's Printing Home</title>

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->
				<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>


	<body <?php body_class(); ?>>
    <div class="page">
            <div class="logo clear">
                <a href="/index.html"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="Wally's Printing"/></a>
            </div>

            <button class="artwork_button pulse clear">SUBMIT YOUR ART!</button>

            <nav class="nav clear">
								<?php html5blank_nav(); ?>
                <!--<ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul> -->
            </nav>
