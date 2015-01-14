<?php get_header(); ?>

	<div class="content-home u-gridContainer">
			<div class="u-gridRow">
				<div class="content-left u-gridCol8">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
				<div class="content-right u-gridCol4">
					<div class="contactus">
						<h2>Neem contact met ons op!</h2>
						<p>Wilt u graag meer informatie of wilt u graag onze hulp?</p>
						<a href="/contact/"><div class="contactbutton">
							Contact
						</div>
						</a>
					</div>
				</div>			
			</div>
	</div>

<?php get_footer(); ?>
