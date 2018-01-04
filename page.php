<?php
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
	
<header class="header">
	<div class="header__video">
		<video loop="loop" autoplay="autoplay" poster="<?php the_field('баннер_постер'); ?>">
			<source src="<?php the_field('баннер_видео'); ?>" type="video/mp4">
		</video>
	</div>
	<div class="header__wrap">
		<div class="container container_small">
			<div class="header__title"><?php the_field('баннер_заголовок'); ?></div>
			<div class="header__desc"><?php the_field('баннер_описание'); ?></div>
			<?php the_field('баннер_форма'); ?>
		</div>
	</div>
</header>
<main class="main">
	<div class="order">
		<div class="container container_small">
			<div class="order__wrap">
				<div class="order__title title"><?php the_field('заказ_машины_заголовок', option); ?></div>
				<div class="order__elements"><?php the_field('заказ_машины_форма', option); ?></div>
				<div class="order__desc"><?php the_field('заказ_машины_описание', option); ?></div>
			</div>
		</div>
	</div>
	<div class="services">
		<div class="services__top container">
			<div class="services__title title">ПЕРЕВОЗКА ГРУЗОВ</div>
			<div class="services__desc">Мы предоставляем четыре вида основных услуг:</div>
		</div>
		<div class="services__middle row_line">
			<?php for ($i=1; $i < 5; $i++) { ?>
			<div class="services__item col_line">
				<div class="services__img"><img src="<?php the_field('услуги_'.$i.'_изображение'); ?>" alt=""></div>
				<div class="services__subtitle"><?php the_field('услуги_'.$i.'_заголовок'); ?></div>
				<div class="services__text"><?php the_field('услуги_'.$i.'_текст'); ?></div>
			</div>
			<?php } ?>
		</div>
		<div class="services__bottom container">
			<a href="/services/" class="services__button button button_green button_medium">Перевозка грузов</a>
		</div>
	</div>
	<div class="adventages">
		<div class="adventages__head container container_small animated fadeInUp wow">
			<div class="adventages__title title"><?php the_field('преимущества_главный_заголовок', option); ?></div>
			<div class="adventages__desc"><?php the_field('преимущества_главный_текст', option); ?></div>
		</div>
		<div class="adventages__list">
			<?php for ($i=1; $i < 7; $i++) { ?>
			<div class="adventages__item">
				<div class="container row wow animated fadeIn<?php if($i & 1){ ?>Left<?php } else { ?>Right<?php } ?>">
					<div class="adventages__img col"><?php $image = get_field('преимущества_'.$i.'_изображение', option); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?></div>
					<div class="adventages__content col">
						<div class="adventages__subtitle"><?php the_field('преимущества_'.$i.'_заголовок', option); ?></div>
						<div class="adventages__text"><?php the_field('преимущества_'.$i.'_текст', option); ?></div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="counts">
		<div class="container">
			<div class="counts__list row_line">
				<div class="counts__item col_line">
					<div class="counts__count"><img src="/wp-content/uploads/2018/01/3102.png" alt=""><span>3102</span></div>
					<div class="counts__text">Выполненных перевозок</div>
				</div>
				<?php for ($i=1; $i < 5; $i++) { ?>
				<div class="counts__item col_line">
					<div class="counts__count"><?php the_field('цифры_'.$i.'_число', option); ?></div>
					<div class="counts__text"><?php the_field('цифры_'.$i.'_текст', option); ?></div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="clients">
		<div class="clients__title title container animated fadeInRight wow">НАМ ДОВЕРЯЮТ СВОЙ ГРУЗ</div>
		<div class="clients__list">
			<div class="container">
				<div class="clients__wrap animated fadeInLeft wow">
				<?php $loop = new WP_Query( array( 'post_type' => 'clients', 'posts_per_page' => 0 ) ); ?> 
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
					<div class="clients__item"><a href="<?php the_field('ссылка'); ?>" target="_blank"><img src="<?php the_field('изображение'); ?>"></a></div>
				<?php endwhile; ?>
				<?php wp_reset_query();?>
				</div>
			</div>
		</div>
	</div>
	<div class="reviews">
		<div class="reviews__title title container animated fadeInRight wow">НАС РЕКОМЕНДУЮТ</div>
		<div class="reviews__list">
			<div class="container">
				<div class="reviews__wrap animated fadeInLeft wow">
				<?php $loop = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => 0 ) ); ?> 
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
					<div class="reviews__item"><a href="<?php the_field('изображение'); ?>" data-fancybox="reviews"><img src="<?php the_field('изображение'); ?>"></a></div>
				<?php endwhile; ?>
				<?php wp_reset_query();?>
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
