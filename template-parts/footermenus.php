<?php
/**
 * The template for the footer menus
 *
 * @package Pirate Rogue
 * @since Pirate Rogue 1.0
 * @version 1.0
 */
?>

<div class="footer-menus-wrap cf">
    <h2 class="screen-reader-text"><?php _e('Navigation','pirate-rogue'); ?></h2>
  <?php if (has_nav_menu( 'footer-one' ) ) : ?>
	<nav id="footer-menu-one" class="footer-menu">
		<?php
			$location = 'footer-one';
			$menu_obj = pirate_rogue_get_menu_by_location($location );
			wp_nav_menu( array(
			'theme_location'	=> 'footer-one',
			'items_wrap'			=> '<h3 class="footer-menu-title">'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
			'container' 			=> 'false',
			));  ?>
	</nav>
	<?php endif; ?>
	<?php if (has_nav_menu( 'footer-two' ) ) : ?>
	<nav id="footer-menu-two" class="footer-menu">
		<?php
			$location = 'footer-two';
			$menu_obj = pirate_rogue_get_menu_by_location($location );
			wp_nav_menu( array(
			'theme_location'	=> 'footer-two',
			'items_wrap'			=> '<h3 class="footer-menu-title">'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
			'container' 			=> 'false',
			));  ?>
	</nav>
	<?php endif; ?>
	<?php if (has_nav_menu( 'footer-three' ) ) : ?>
	<nav id="footer-menu-three" class="footer-menu">
		<?php
			$location = 'footer-three';
			$menu_obj = pirate_rogue_get_menu_by_location($location );
			wp_nav_menu( array(
			'theme_location'	=> 'footer-three',
			'items_wrap'			=> '<h3 class="footer-menu-title">'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
			'container' 			=> 'false',
			));  ?>
	</nav>
	<?php endif; ?>
	<?php if (has_nav_menu( 'footer-four' ) ) : ?>
	<nav id="footer-menu-four" class="footer-menu">
		<?php
			$location = 'footer-four';
			$menu_obj = pirate_rogue_get_menu_by_location($location );
			wp_nav_menu( array(
			'theme_location'	=> 'footer-four',
			'items_wrap'			=> '<h3 class="footer-menu-title">'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
			'container' 			=> 'false',
			));  ?>
	</nav>
	<?php endif; ?>
	<?php if (has_nav_menu( 'footer-five' ) ) : ?>
	<nav id="footer-menu-five" class="footer-menu">
		<?php
			$location = 'footer-five';
			$menu_obj = pirate_rogue_get_menu_by_location($location );
			wp_nav_menu( array(
			'theme_location'	=> 'footer-five',
			'items_wrap'			=> '<h3 class="footer-menu-title">'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
			'container' 			=> 'false',
			));  ?>
	</nav>
	<?php endif; ?>
	<?php if (has_nav_menu( 'footer-six' ) ) : ?>
	<nav id="footer-menu-six" class="footer-menu">
		<?php
			$location = 'footer-six';
			$menu_obj = pirate_rogue_get_menu_by_location($location );
			wp_nav_menu( array(
			'theme_location'	=> 'footer-six',
			'items_wrap'			=> '<h3 class="footer-menu-title">'.esc_html($menu_obj->name).'</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
			'container' 			=> 'false',
			));  ?>
	</nav>
	<?php endif; ?>
</div>
