<?php
/**
 * The main single item template file.
 *
 * @package Kadence
 */
namespace Kadence;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
/**
 * Hook for anything before content.
 */
do_action( 'kadence_before_content' );
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="secondary" class="widget-area">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
    <?php endif; ?>
	<?php
	/**
	 * Hook Kadence::print_styles - 20
	 */
	kadence()->print_styles( 'kadence-content' );
	/**
	 * Hook for after content single element.
	 */
	do_action( 'kadence_single' );
	?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();