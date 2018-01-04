<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package name
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<script src="<?php echo get_template_directory_uri(); ?>/scripts/libs.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/common.js"></script>
	<!--[if lt IE 9]>
	<script>
		document.createElement('header');
		document.createElement('nav');
		document.createElement('main');
		document.createElement('section');
		document.createElement('article');
		document.createElement('aside');
		document.createElement('footer');
	</script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
<div class="panel">
	<div class="container row">
		<div class="panel__logo col"><a href="/"><?php $image = get_field('логотип', option); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?></a></div>
		<div class="panel__phone col"><?php the_field('телефон_1', option); ?></div>
		<div class="panel__button">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="panel__nav col">
			<div class="panel__nav-home"><a href=""><i class="icon icon-home-black"></i></a></div>
			<div class="panel__nav-wrap">
				<?php 
					wp_nav_menu( array(
						'theme_location' => 'menu-main',
						'container' => ''
					) );
				?>
			</div>
			<div class="panel__nav-callback"><a href=""><i class="icon icon-phone-bg"></i></a></div>
		</div>
	</div>
</div>
<?php wp_reset_query();?>