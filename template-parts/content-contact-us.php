<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package metodo_zenon
 */

?>

<!-- #post-<?php the_ID(); ?> -->
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php echo do_shortcode('[mz-sc-section--hero title="WHERE WE ARE" hero-bg="/wp-content/themes/metodo-zenon/images/MZ_Contact_Us_Hero_sect-bg-v01-1440x440.png"]'); ?>

    <section class="mz-section mz-section--contact-us-content" id="contact-us-content">
        <div class="mz-container">
            <div class ="mz-row">
				<div class="mz-col">
					<h3>
						Zenon Method
					</h3>
					<p>
						Multidisciplinary center with coordinated professionals in physical preparation, nutrition,  physiotherapy and psychology with a cutting-edge method and state-of-the-art technology generation.
					</p>	
				</div>			
			</div>
			
        </div>
    </section>
	<!-- .entry-content -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'metodo-zenon' ),
					'after'  => '</div>',
				)
			);
		?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>

		<!-- .entry-footer -->
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'metodo-zenon' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer>
		
	<?php endif; ?>
</article>
