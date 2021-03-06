<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package K2K
 */

?>

	</div>
        
        <footer id="colophon" role="contentinfo" class="site-footer <?php echo is_singular() && comments_open( get_the_ID() ) ? 'with-comments ' : ''; ?>">
        
                <div class="footer-widgets-area">
                    <?php get_sidebar( 'footer' ); ?>
                </div>
                
                <div class="site-info-area"> 
                        <?php //if ( get_header_image() ) : ?>
                            <!--footer-image" style="background: url('<?php //header_image(); ?>') no-repeat center center fixed-->
                        <?php //endif; ?><!--">-->
                    
                    <div class="gradient-overlay"></div>
                    <?php get_template_part( 'components/footer/site', 'info' ); ?>
                </div>
                    
        </footer>
        
</div>
<?php wp_footer(); ?>

</body>
</html>
