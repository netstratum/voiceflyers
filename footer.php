<!-- footer 
			================================================== -->
		<footer>
			<div class="up-footer">
				<div class="container">
					<div class="row">

						<div class="col-md-3">
							<div class="widget footer-widgets text-widget">
								<img alt="" src="images/voiceflyers.png">
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
							</div>
					
						</div>

						<div class="col-md-3">
							<div class="widget footer-widgets message-widget">
								<h4>Send Message</h4>
								<form id="footer-contact" class="contact-work-form">
									<input type="text" name="name" id="name" placeholder="Name"/>
									<input type="text" name="mail" id="mail" placeholder="Email"/>
									<textarea name="comment" id="comment" placeholder="Message"></textarea>
									<button type="submit" name="contact-submit" class="submit_contact">
										<i class="fa fa-envelope"></i> Send
									</button>
									<div class="msg"></div>
								</form>
							</div>
						</div>

						<div class="col-md-3">
						
							
						</div>

						<div class="col-md-3">
							<div class="widget footer-widgets info-widget">
								<h4>Contact Us</h4>
								<ul class="contact-list">
									<li><a class="phone" href="#"><i class="fa fa-phone"></i>9930 1234 5679</a></li>
									<li><a class="mail" href="#"><i class="fa fa-envelope"></i> contact@yourdomain.com</a></li>
									<li><a class="address" href="#"><i class="fa fa-home"></i> street address example</a></li>
								</ul>
							</div>
						
						</div>

					</div>
				</div>
			</div>

			<div class="footer-line">
				<div class="container">
					<p>&#169; 2013 Voice Flyers,  All Rights Reserved</p>
					<a class="go-top" href="#"></a>
				</div>
			</div>

		</footer>
		<!-- End footer -->
	</div>
	<!-- End Container -->

	<!--
	##############################
	 - ACTIVATE THE BANNER HERE -
	##############################
	-->
	<script type="text/javascript">

		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

		if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;

			var api = tpj('.fullwidthbanner').revolution(
				{
					delay:8000,
					startwidth:1170,
					startheight:580,

					onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

					thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
					thumbHeight:50,
					thumbAmount:3,

					hideThumbs:0,
					navigationType:"bullet",				// bullet, thumb, none
					navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

					navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


					navigationHAlign:"center",				// Vertical Align top,center,bottom
					navigationVAlign:"bottom",					// Horizontal Align left,center,right
					navigationHOffset:30,
					navigationVOffset: 40,

					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:20,
					soloArrowLeftVOffset:0,

					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:20,
					soloArrowRightVOffset:0,

					touchenabled:"on",						// Enable Swipe Function : on/off


					stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
					stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

					hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
					hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
					hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


					fullWidth:"on",

					shadow:1								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

				});


				// TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
				// YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
					api.bind("revolution.slide.onloaded",function (e) {


						jQuery('.tparrows').each(function() {
							var arrows=jQuery(this);

							var timer = setInterval(function() {

								if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
								  arrows.fadeOut(300);
							},3000);
						})

						jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
							jQuery('.tp-simpleresponsive').addClass("mouseisover");
							jQuery('body').find('.tparrows').each(function() {
								jQuery(this).fadeIn(300);
							});
						}, function() {
							if (!jQuery(this).hasClass("tparrows"))
								jQuery('.tp-simpleresponsive').removeClass("mouseisover");
						})
					});
				// END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
			});
	</script>
	<script>
		jQuery(function(){ 
			DevSolutionSkill.init('circle'); 
			DevSolutionSkill.init('circle2'); 
			DevSolutionSkill.init('circle3'); 
			DevSolutionSkill.init('circle4'); 
			DevSolutionSkill.init('circle5'); 
			DevSolutionSkill.init('circle6');
		});
	</script>
</body>
</html>