<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package name
 */

?>

<footer class="footer">
	<div class="container row">
		<div class="footer__left col">
			<div class="footer__logo"><?php $image = get_field('логотип_футер', option); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?></div>
			<div class="footer__nav">
				<?php 
					wp_nav_menu( array(
						'theme_location' => 'menu-main',
						'container' => '',
						'depth' => 1
					) );
				?>
			</div>
			<div class="footer__offer">Информация на сайте не является публичной офертой</div>
		</div>
		<div class="footer__middle col">
			<div class="footer__socials">
				<ul>
					<li><a href="<?php the_field('vk', option); ?>" target="_blank"><i class="icon icon-vk"></i></a></li>
					<li><a href="<?php the_field('facebook', option); ?>" target="_blank"><i class="icon icon-fb"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="footer__right col">
			<div class="footer__contacts">
				<ul>
					<li><?php the_field('телефон_1', option); ?></li>
					<li><?php the_field('телефон_2', option); ?></li>
					<li><?php the_field('телефон_3', option); ?></li>
					<li><?php the_field('почта', option); ?></li>
					<li><i class="icon icon-location"></i><span><?php the_field('адрес', option); ?></span></li>
				</ul>
			</div>
			<div class="footer__copy"><?php the_field('копирайт', option); ?></div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
