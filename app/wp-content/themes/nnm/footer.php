			<!-- footer -->
			<footer class="footer" role="contentinfo">
				
				<div class="footer-content">
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<svg viewBox="0 0 409.5 41.758">
								<use xlink:href="#svg-logo_nnm"/>
							</svg>
						</a>
					</div>

					<div class="tools">
						
						<div class="up-site">
							<i class="fa fa-chevron-up"></i> subir
						</div>
						<div class="redes">
							<ul>
								<li><a href="http://www.facebook.com/NNMcl" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-facebook.jpg" alt=""></a></li>
								<li><a href="https://twitter.com/nnmpuntocl" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-twitter.jpg" alt=""></a></li>
								<li><a href="https://vimeo.com/channels/43677" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-vimeo.jpg" alt=""></a></li>
								<li><a href="http://www.flickr.com/photos/nonacienmanchester/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-flickr.jpg" alt=""></a></li>
							</ul>
						</div>

					</div>
				</div>

				<!-- copyright -->
				<p class="copyright">
					<i class="cc cc-cc"></i> NNM es una publicación distribuida con licencia CC BY-NC. El contenido publicado es solo con propósitos promocionales. Puedes solicitar el retiro de tu material a <a href="mailto:info@nnm.cl">info@nnm.cl</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.min.js"></script>
		<?php wp_footer(); ?>
		<script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="<?php echo get_template_directory_uri(); ?>/js/whatsapp-button.js";h.appendChild(s);}</script>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	</body>
</html>
