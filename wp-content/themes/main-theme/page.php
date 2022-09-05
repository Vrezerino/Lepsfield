<?php get_header();

while (have_posts()) {
	the_post(); ?>

	<div class="page-banner">
		<div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/images/100535-ladybug-flower-4k.jpg') ?>)"></div>
		<div class="page-banner__content container container--narrow">
			<h1 class="page-banner__title"><?= the_title(); ?></h1>
			<div class="page-banner__intro">
				
			</div>
		</div>
	</div>

	<div class="container container--narrow page-section">

		<?php
		$parentID = (int) wp_get_post_parent_id(get_the_ID());

		if ($parentID) { # Show menu under title if current page has a parent.
		?>
			<div class="metabox metabox--position-up metabox--with-home-link">
				<p>
					<a class="metabox__blog-home-link" href="<?php echo get_permalink($parentID); ?>)">
						<i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parentID); ?>
					</a>
					<span class="metabox__main">
						<?php the_title(); ?>
					</span>
				</p>
			</div>
		<?php }

		$children = get_pages(array('child_of' => get_the_ID())); # 

		if ($parentID or $children) { # Show right nav menu if current page has a parent or has children.
		?>
			<div class="page-links">
				<h2 class="page-links__title"><a href="<?php echo get_permalink($parentID) ?>"><?php echo get_the_title($parentID); ?></a></h2>
				<ul class="min-list">
					<?php
					$findChildrenOf = $parentID ? $findChildrenOf = $parentID : $findChildrenOf = get_the_ID();

					wp_list_pages(array(
						'title_li' => NULL,
						'child_of' => $findChildrenOf
					));
					?>
				</ul>
			</div>

			<div class="generic-content">
				<?= the_content(); ?>
			</div>
	</div>

<?php
		}
	}
	get_footer();
?>