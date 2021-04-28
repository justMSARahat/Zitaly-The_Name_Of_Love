<?php get_header(); ?>

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="archive.html">Blog</a></li>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">
				
			<?php while(have_posts()): the_post();?>

			<article class="single">
					<div class="art-header">
						<a href="#">
							<h3><?php the_title(); ?></h3>
						</a>
						<div class="info">Posted on <?php the_time('d F,Y'); ?> in: <a href="#"><?php the_tags(); ?></a></div>
					</div>
					<div class="art-content">
						<?php the_post_thumbnail(); ?>
						<p><?php the_content(); ?></p>
					</div>
				</article>

			<?php endwhile; ?>

			<hr>
			<?php comments_popup_link('No Comments Yet','1 Comment','% Comments'); ?>
			<hr>
			<div class="comments">
				<?php comments_template(); ?>
			</div>



			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<?php dynamic_sidebar( 'page_sidebar' );?>
		</div>
	</div>
</section>

<?php get_footer();?>