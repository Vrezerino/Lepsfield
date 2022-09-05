<?php get_header();

#while (have_posts()) {
#	the_post(); 
?>


<!-- <h2>
		<a href="<?= the_permalink(); ?>">
			<?= the_title(); ?>
		</a>
	</h2>
	
	<?= the_content(); ?>
	-->

<div class="page-banner">
	<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/20369768.jpg'); ?>)"></div>
	<div class="page-banner__content container t-center c-white">
		<h1 class="headline headline--large">Lepsfield Pharmacy</h1>
		<h2 class="headline headline--medium">Open 24/7</h2>
		<h3 class="headline headline--small"></h3>
		<a href="<?php echo site_url('/online-store') ?>" class="btn btn--large btn--green">Online Store</a>
	</div>
</div>

<div class="full-width-split group">
	<div class="full-width-split__one">
		<div class="full-width-split__inner">
			<h2 class="headline headline--small-plus t-center">Store News</h2>

			<div class="event-summary">
				<a class="event-summary__date t-center" href="#">
					<span class="event-summary__month">Sep</span>
					<span class="event-summary__day">5</span>
				</a>
				<div class="event-summary__content">
					<h5 class="event-summary__title headline headline--tiny"><a href="#">We've ran out of hand sanitizers</a></h5>
					<p>We're expecting more to arrive soon. <strong>Reminder that we're not a beverage store. </strong><a href="#" class="nu gray">Learn more</a></p>
				</div>
			</div>
			<div class="event-summary">
				<a class="event-summary__date t-center" href="#">
					<span class="event-summary__month">Sep</span>
					<span class="event-summary__day">3</span>
				</a>
				<div class="event-summary__content">
					<h5 class="event-summary__title headline headline--tiny"><a href="#">New product addition: Accutane</a></h5>
					<p>Buy with prescription! <a href="#" class="nu gray"></a></p>
				</div>
			</div>

			<p class="t-center no-margin"><a href="<?php echo site_url('/news') ?>" class="btn btn--green">View All News</a></p>
		</div>
	</div>
	<div class="full-width-split__two">
		<div class="full-width-split__inner">
			<h2 class="headline headline--small-plus t-center">Jobs</h2>

			<div class="event-summary">
				<a class="event-summary__date t-center" href="#">
					<span class="event-summary__month">Aug</span>
					<span class="event-summary__day">29</span>
				</a>
				<div class="event-summary__content">
					<h5 class="event-summary__title headline headline--tiny"><a href="#">Pharmacist</a></h5>
					<p>We are looking for a pharmacist with +2 years of experience! <a href="#" class="nu gray">Read more</a></p>
				</div>
			</div>
			<div class="event-summary">
				<a class="event-summary__date t-center" href="#">
					<span class="event-summary__month">Aug</span>
					<span class="event-summary__day">15</span>
				</a>
				<div class="event-summary__content">
					<h5 class="event-summary__title headline headline--tiny"><a href="#">Supervisor</a></h5>
					<p>We are looking for a new supervisor. <a href="#" class="nu gray">Read more</a></p>
				</div>
			</div>

			<p class="t-center no-margin"><a href="<?php echo site_url('/jobs') ?>" class="btn btn--green">View All Jobs</a></p>
		</div>
	</div>
</div>

<div class="full-width-split group">

	<div class="full-width-split__one info" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg'); ?>)">
		<h2 class="headline headline--medium t-center">Sudden illness?</h2>
		<p class="t-center">If urgent, always call 911 first. Otherwise, consult your doctor!</p>
		<p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
	</div>

	<div class="full-width-split__one info" style="background-image: url(<?php echo get_theme_file_uri('/images/apples.jpg'); ?>)">
		<h2 class="headline headline--medium t-center">An Apple a Day</h2>
		<p class="t-center">...keeps the doctor away (potentially)!</p>
		<p class="t-center no-margin"><a href="https://www.healthline.com/nutrition/an-apple-a-day-keeps-the-doctor-away#bottom-line" class="btn btn--blue">Learn more</a></p>
	</div>

</div>
<?php
#}
?>