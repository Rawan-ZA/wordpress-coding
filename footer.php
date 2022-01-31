 <!-- footer
   ================================================== -->
 <footer>

 	<div class="footer-main">

 		<div class="row">

 			<div class="col-four tab-full mob-full footer-info">

 				<img src='<?= get_theme_mod('footer-logo'); ?>' alt='footer-logo' class="footer-logo" style="height:50px; width:160px;" />
 				<p>
 					<?= get_theme_mod('footer-info'); ?>
 				</p>

 			</div> <!-- footer-info -->

 			<div class="col-two tab-1-3 mob-1-2 site-links">


 				<h4><?= get_theme_mod('footer-heading-1') ?></h4>
 				<?php wp_nav_menu([
						'theme_location'  => 'footer-main-menu',
						'menu_class'     =>  '',
						'container'      =>  'div',
						'container_class' =>  'social-links'
					]); ?>

 			</div> <!-- /site-links -->

 			<div class="col-two tab-1-3 mob-1-2 social-links">
 				<?php
					if (is_active_sidebar('lhander-footer-3')) :
						dynamic_sidebar('lhander-footer-3');
					else :
					?>
 					<h4><?= get_theme_mod('footer-heading-2') ?></h4>
 					<?php wp_nav_menu([
							'theme_location'  => 'socail-menu',
							'menu_class'     =>  '',
							'container'      =>  'div',
							'container_class' =>  'social-links'
						]); ?>
 				<?php endif; ?>
 				<?php
					if (is_active_sidebar('lhander-footer-4')) :
						dynamic_sidebar('lhander-footer-4');
					else :
					?>
 			</div> <!-- /social -->
 			<?php if (get_theme_mod('subscrip-sidebar') == 1) : ?>
 				<div class="col-four tab-1-3 mob-full footer-subscribe">

 					<h4> <?= get_theme_mod('footer-heading-3') ?></h4>

 					<p> <?= get_theme_mod('footer-subscribe-text'); ?></p>

 					<div class="subscribe-form">

 						<form id="mc-form" class="group" novalidate="true">

 							<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="type email &amp; hit enter" required="">

 							<input type="submit" name="subscribe">

 							<label for="mc-email" class="subscribe-message"></label>

 						</form>
 					<?php endif; ?>
 					</div>

 				</div> <!-- /subscribe -->
 			<?php endif; ?>
 		</div> <!-- /row -->

 	</div> <!-- /footer-main -->


 	<div class="footer-bottom">

 		<div class="row">

 			<div class="col-twelve">
 				<div class="copyright">
 					<?php
						if (is_active_sidebar('copyright-footer')) :
							dynamic_sidebar('copyright-footer');
						else :
						?>
 						<span><?= get_theme_mod('copyright-text'); ?></span>
 						<!-- <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>		         	 -->
 				</div>
 			<?php endif; ?>
 			<?php if (get_theme_mod('back-to-top') == 1) : ?>
 				<div id="go-top" style="display: block;">
 					<a class="smoothscroll" title="Back to Top" href="#top"><i class="icon ion-android-arrow-up"></i></a>
 				</div>
 			<?php endif; ?>
 			</div>

 		</div> <!-- /footer-bottom -->

 	</div>

 </footer>

 <div id="preloader">
 	<div id="loader"></div>
 </div>


 <?php wp_footer(); ?>
 </body>

 </html>