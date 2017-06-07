<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<div class="row">
				    <div class="column medium-3 text-center">
				        <a href="/"><img src="/wp-content/uploads/2017/06/logo.png" alt="Met One Instruments Inc." class="logo"></a>
				    </div>
				    <div class="column medium-3">
                        <div class="small no-top section">
                            <p>1800 Washington Bivd</p>
                            <p>Grants Pass, OR 97526</p>
                        </div>
				        <div class="small no-top section">
				            <p>Phone: <strong><a href="tel:5414717111">541-471-7111</a></strong></p>
                            <p>Fax: <strong><a href="tel:5414717116">541-471-7116</a></strong></p>
				        </div>
                        <div class="small no-top section">
				            <p>Sales: <strong><a href="mailto:sales@metone.com">sales@metone.com</a></strong></p>
                            <p>Service: <strong><a href="mailto:service@metone.com">service@metone.com</a></strong></p>
				        </div>
				    </div>
				    <div class="column medium-3">
				        <h5>Menu</h5>
                        <ul class="menu vertical">
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Air Quality Monitoring</a></li>
                            <li><a href="">Indoor &amp; Controlled Environments</a></li>
                            <li><a href="">Meterology Sensors &amp; Systems</a></li>
                            <li><a href="">Communication &amp; Data Handeling</a></li>
                            <li><a href="">Met One News</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
				    </div>
				    <div class="column medium-3">
				        <div class="row">
				            <div class="column medium-4 text-center">
				                <a href=""><i class="fa fa-facebook-official"></i></a>
				            </div>
				            <div class="column medium-4 text-center">
				                <a href=""><i class="fa fa-twitter-square"></i></a>
				            </div>
				        </div>
				    </div>
				</div>
                <div class="row section">
                    <div class="column medium-9 medium-offset-3">
                        <p>Copyright 2017 Met One Instruments, Inc. | All rights reserved | Design: <a href="http://oslund.com/">Oslund Design</a> | Development: <a href="https://purebluedesign.com/">Pure Blue</a> | Hosting: <a href="http://www.ambientit.net/">Ambient I.T.</a></p>
                    </div>
                </div>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.12'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
