<?php
/*
Template Name: Отслеживание груза
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package name
 */

get_header(); ?>
	
<main class="main">
	<div class="banner" style="background-image: url('<?php the_field('изображение'); ?>');">
		<div class="container">
			<div class="banner__title main-title"><?php the_title(); ?></div>
			<div class="banner__text"><?php the_content(); ?></div>
		</div>
	</div>
	<div class="traking">
		<div class="container">
			<div class="traking__wrap row">
				<div class="traking__iframe col"><iframe src="https://movizor.com/iframe/" width="750" height="250"></iframe></div>
				<div class="traking__block block block_price col">
					<div class="block__wrap">
						<div class="block__title">Рассчитать стоимость</div>
						<div class="block__text">Рассчитайте предварительную стоимость вашей доставки</div>
						<a href="/" class="block__button button button_blue">Рассчитать</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="consultation">
		<div class="container container_small">
			<div class="consultation__title title"><?php the_field('консультация_заголовок', option); ?></div>
			<div class="consultation__desc"><?php the_field('консультация_описание', option); ?></div>
			<div class="consultation__wrap row_line"><?php the_field('консультация_форма', option); ?></div>
			<div class="consultation__phones row_line">
				<div class="consultation__phone col_line"><?php the_field('телефон_1', option); ?></div>
				<div class="consultation__phone col_line"><?php the_field('телефон_2', option); ?></div>
				<div class="consultation__phone col_line"><?php the_field('телефон_3', option); ?></div>
			</div>
		</div>
	</div>
</main>


<?php
get_footer();
