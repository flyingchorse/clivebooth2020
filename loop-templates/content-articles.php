<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
 global $galleryId;
$post_id = $post->ID;
$galleryId = get_post_meta($post_id, 'viewbook', true);

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


	<?php echo get_the_post_thumbnail( $post->ID, 'folio-image'); ?>
	
	<div class="post-gallery-link float-right"> <?php $len=strlen($galleryId); if ($len > 1) { ?> <a href="<?php echo $galleryId; ?>"><div class="gallery-icon">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36" height="22" viewBox="0 0 36 22">
  <image width="36" height="22" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAh8AAAFKCAQAAAAX//WDAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAALiMAAC4jAXilP3YAAAAHdElNRQfiAgcOCgn54gbUAAAEVElEQVR42u3YMYoDMRAAQekwrP//Wm+0l118tAJZUBU5EuMJmmHn+IxrUN3Pe+2Baf8rFvdv+0vun90TAKeSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCSDyCaz+4JgEO5PoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBIPoBojs+4dg9xsPt5rz0w7X/F4v7ns/sPnM31AUTyAUTyAUTyAUSv3QPAN/AN9f/m3y/XBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxDJBxC9dg8A32DuHuBIrg8gkg8gkg8gkg8gms/uCYBDuT6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6ASD6AaI7PuHYPcbD7ea89MO1/xeL+bX/J7foAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAIvkAol8JDRyCRUERRAAAAABJRU5ErkJggg=="/></svg>
		
	</div></a><?php }?></div>
	<header class="entry-header pt-3">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h4 class='subheading'><?php echo esc_html(get_post_meta($post_id, 'subheading', true)); ?></h3>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_excerpt(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
		<div class="entry-meta">

			<?php //understrap_posted_on(); ?>

		</div><!-- .entry-meta -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
		<?php //understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
