<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php the_title(); ?>
	<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Pagina não encontrada.'); ?></p>
<?php endif; ?>