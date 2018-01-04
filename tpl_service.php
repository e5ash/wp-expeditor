<?php
/*
Template Name: Услуга
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
	<div class="banner banner_white" style="background-image: url('<?php the_field('изображение'); ?>');">
		<div class="container">
			<div class="banner__title main-title"><?php the_title(); ?></div>
			<div class="banner__text"><?php the_content(); ?></div>
			<div class="banner__breadcrumbs">
				<ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				    <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
				</ul>
			</div>
		</div>
	</div>
	<div class="order">
		<div class="container container_small">
			<div class="order__wrap">
				<div class="order__title title"><?php the_field('заказ_машины_заголовок', option); ?></div>
				<div class="order__elements"><?php the_field('заказ_машины_форма', option); ?></div>
				<div class="order__desc"><?php the_field('заказ_машины_описание', option); ?></div>
			</div>
		</div>
	</div>
	<div class="service">
		<div class="service__data">
			<div class="container">
				<div class="service__title subtitle wow animated fadeInLeft"><?php the_field('услуга_заголовок'); ?></div>
				<div class="service__desc animated wow fadeInLeft"><?php the_field('услуга_описание'); ?></div>
				<div class="service__list row_line wow animated fadeInRight">
					<?php for ($i=1; $i < 4; $i++) { ?>
					<?php if(get_field('услуга_'.$i.'_заголовок')) { ?>
					<div class="service__item col_line">
						<div class="service__img"><?php $image = get_field('услуга_'.$i.'_изображение'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?></div>
						<div class="service__content">
							<div class="service__subtitle"><?php the_field('услуга_'.$i.'_заголовок'); ?></div>
							<div class="service__subdesc"><?php the_field('услуга_'.$i.'_текст'); ?></div>
						</div>
					</div>
					<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>

		<?php if(get_field('стоимость_заголовок')) { ?>
		<div class="service__price price">
			<div class="container">
				<div class="price__title subtitle title"><?php the_field('стоимость_заголовок'); ?></div>
				<div class="price__table"><?php the_field('стоимость_таблица'); ?></div>
			</div>
		</div>
		<?php } ?>

		<?php if(get_field('преимущества_главный_заголовок')) { ?><div class="service__features features">
			<div class="container">
				<div class="features__title title"><?php the_field('преимущества_главный_заголовок'); ?></div>
				<div class="features__wrap row_line">
					<?php for ($i=1; $i < 7; $i++) { ?>
					<div class="features__item wow col_line row_line wow animated fadeInRight">
						<div class="features__img col_line"><?php $image = get_field('преимущества_'.$i.'_изображение'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?></div>
						<div class="features__content col_line">
							<div class="features__subtitle"><?php the_field('преимущества_'.$i.'_заголовок'); ?></div>
							<div class="features__text"><?php the_field('преимущества_'.$i.'_текст'); ?></div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php } ?>

		<?php if(get_field('табы_1_таб')) { ?><div class="service__tabs tabs">
			<div class="container">
				<div class="tabs__title">Перевозка контейнеров 20 футов</div>
				<div class="tabs__nav">
					<ul>
						<li><a href="#tab-1">Из Москвы</a></li>
						<li><a href="#tab-2">В Москву</a></li>
					</ul>
				</div>
				<div class="tabs__wrap">
					<div class="tabs__list">
						<div class="tabs__item" id="tab-1"><?php the_field('табы_1_таб'); ?></div>
						<div class="tabs__item" id="tab-2"><?php the_field('табы_2_таб'); ?></div>
					</div>
					<div class="tabs__wrap-desc">*Цены указаны с учетом НДС 18%</div>
				</div>
			</div>
		</div>
		<?php } ?>

		<?php if(get_field('табы_3_таб')) { ?>
		<div class="service__tabs tabs tabs_gray">
			<div class="container">
				<div class="tabs__title">Перевозка контейнеров 40 футов</div>
				<div class="tabs__nav">
					<ul>
						<li><a href="#tab-3">Из Москвы</a></li>
						<li><a href="#tab-4">В Москву</a></li>
					</ul>
				</div>
				<div class="tabs__wrap">
					<div class="tabs__list">
						<div class="tabs__item" id="tab-3"><?php the_field('табы_3_таб'); ?></div>
						<div class="tabs__item" id="tab-4"><?php the_field('табы_4_таб'); ?></div>
					</div>
					<div class="tabs__wrap-desc">*Цены указаны с учетом НДС 18%</div>
				</div>
			</div>
		</div>
		<?php } ?>

		<?php if(get_field('текст')) { ?>
		<div class="service__text text">
			<div class="container row_line">
				<div class="service__text-content text col_line"><?php the_field('текст'); ?></div>
				<div class="service__text-blocks col_line">
					<div class="service__block block block_questions">
						<div class="block__wrap">
							<div class="block__title">ЕСТЬ ВОПРОСЫ</div>
							<div class="block__text">Если у вас возникли вопрос, позвоните нам или отправьте нам сообщения и мы с радость вас проконсультируем.</div>
							<a href="/contacts/" class="block__button button button_blue">Получить консультацию</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
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
