<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>
	<?php
        if ( has_nav_menu( 'primary' )) {
	?>

	<nav class="primary-navigation" aria-label="<?php echo esc_attr_x('Horizontal', 'menu'); ?>" role="navigation">
		<ul class="nav-list">

		    <?php
		        if (has_nav_menu('primary')) {
		    		wp_nav_menu(array(
		    			'container'  => '',
		    			'items_wrap' => '%3$s',
		    			'theme_location' => 'primary',
		    		));
                }
		    ?>

		</ul>
	</nav><!-- .primary-navigation -->

    <?php } ?>