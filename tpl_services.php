<?php
/*
Template Name: Услуги
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
	<div class="services-page">
		<div class="services-page__head container">
			<div class="services-page__title main-title"><?php the_title(); ?></div>
			<div class="services-page__desc"><?php the_content(); ?></div>
		</div>
		<div class="services-page__list">
			<?php for ($i=1; $i < 5; $i++) { ?>
			<div class="services-page__item wow animated fadeIn<?php if($i & 1){ ?>Left<?php } else { ?>Right<?php } ?>">
				<div class="container row_line">
					<div class="services-page__img col_line"><img src="<?php the_field('услуги_'.$i.'_изображение'); ?>" alt=""></div>
					<div class="services-page__content col_line">
						<div class="services-page__subtitle"><?php the_field('услуги_'.$i.'_заголовок'); ?></div>
						<div class="services-page__text"><?php the_field('услуги_'.$i.'_текст'); ?></div>
						<a href="<?php the_field('услуги_'.$i.'_ссылка'); ?>" class="services-page__button button button_green button_small">Подробнее</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</main>


<?php
get_footer();
