<?php
/*
Template Name: Контакты
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
	<div class="contacts">
		<div class="container row_line">
			<div class="contacts__text-wrap col_line"><?php the_field('реквизиты', option); ?></div>
			<div class="contacts__blocks col_line">
				<div class="contacts__blocks-wrap row_line">
					<div class="contacts__block block block_price">
						<div class="block__wrap">
							<div class="block__title">Рассчитать стоимость</div>
							<div class="block__text">Рассчитайте стоимость вашей доставки</div>
							<a href="/" class="block__button button button_blue">Рассчитать</a>
						</div>
					</div>
					<div class="contacts__block block block_traking">
						<div class="block__wrap">
							<div class="block__title">Отслеживание груза</div>
							<div class="block__text">Отследите ваш груз. Это очень просто</div>
							<a href="/tracking/" class="block__button button button_blue">Отследить</a>
						</div>
					</div>
				</div>
				<div class="feedback">
					<div class="feedback__title"><?php the_field('обратная_связь_заголовок'); ?></div>
					<div class="feedback__wrap"><?php the_field('обратная_связь_форма'); ?></div>
				</div>
			</div>
		</div>
	</div>
	<div class="map"><?php the_field('карта', option); ?></div>
</main>


<?php
get_footer();
