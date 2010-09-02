<?php
/**
 Template Name: Multimedia
 */

get_header(); ?>

<div id="contentContainer">
<div id="leftCol">
<div class="blankH" style="width: 10px; height: 180px;"></div>
<div class="blankH" style="width: 180px; height: 14px;"></div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>	
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>				

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; ?>

				<?php wp_list_pages('title_li=&child_of='.$post->ID.''); ?>
			</div><!-- #content -->
<div id="rightCol">
<?php get_sidebar(); ?>
		</div><!-- #container -->
<?php get_footer(); ?>
