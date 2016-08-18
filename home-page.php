<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/bootstrap-switch.min.css">
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation" id="cta-bar" style="display: none">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 flush-right">
				<label for="email">Sign up for an early discount &amp; announcements:</label>
			</div>
			<div class="col-sm-6 text-center">
				<form class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-8 col-md-7 flush-right">
							<input type="email" class="input-lg form-control" id="email" placeholder="Enter your email address">
						</div>
						<div class="col-sm-4 col-md-5 flush-left">
							<button type="submit" class="btn btn-lg btn-primary btn-block">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</nav>
<div id="fullpage">
	<section class="section hero ash pane-1 active on" id="hero" style="">
		<div class="bg active" id="boy"></div>
		<div class="bg girl" id="girl"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="content">
						<h1>Introducing the Smartwatch That Can Save Your Life</h1>
						<h2>A sleek and stylish smartwatch that continually <br class="hidden-xs">monitors your heart for life-threatening emergencies</h2>
						<form class="form-horizontal">
							<label for="email">Sign up for an early discount &amp; announcements:</label>
							<div class="form-group">
								<div class="col-sm-8 col-md-7 flush-right">
									<input type="email" class="input-lg form-control" id="email" placeholder="Enter your email address">
								</div>
								<div class="col-sm-4 col-md-5 flush-left">
									<button type="submit" class="btn btn-lg btn-primary btn-block">Sign Up</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-sm-6 text-center">
						<!-- <input class="switch" type="checkbox" name="switch" checked> -->
						<ol class="carousel-indicators">
							<li id="watch1" class="active"></li>
							<li id="watch2" class=""></li>
						</ol>
				</div>
			</div>
		</div>
<!-- 		<a href="#hero2" class="scroll"><i class="glyphicon glyphicon-chevron-down"></i></a>
 -->	</section>
	<section class="section hero pane-2" id="hero2">
		<div class="bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-6 col-lg-offset-0">
					<div class="content">
						<h1>24/7 Heart Monitoring</h1>
						<h2>Medical-grade sensors track your heart’s every beat. If your heart slows or stops, our dispatch team will be alerted.</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- <a href="#hero3" class="scroll"><i class="glyphicon glyphicon-chevron-down"></i></a> -->
	</section>
	<section class="section hero purple pane-3" id="hero3">
		<div class="bg">
			<!-- <img class="face" src="<?php bloginfo('template_directory'); ?>/library/images/contacts.gif" alt=""> -->
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-6 col-lg-offset-0">
					<div class="content">
						<h1>Connected to Your<br/>Friends and Family</h1>
						<h2>Friends, family, and emergency services are immediately contacted and know exactly where you are in an emergency.</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- <a href="#hero4" class="scroll"><i class="glyphicon glyphicon-chevron-down"></i></a> -->
	</section>
	<section class="section hero pink pane-4" id="hero4">
		<div class="bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-6 col-lg-offset-0">
					<div class="content">
						<h1>Go Anywhere, Anytime.</h1>
						<h2>Cellular connectivity gives you the the freedom to explore anywhere you want, whenever you want, and without fear.</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- <a href="#hero5" class="scroll"><i class="glyphicon glyphicon-chevron-down"></i></a> -->
	</section>
	<section class="section hero pane-5" id="hero5">
		<div class="bg">
			<!-- <img src="<?php bloginfo('template_directory'); ?>/library/images/assistance.gif" alt="" class="face"> -->
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-6 col-lg-offset-0">
					<div class="content">
						<h1>Assistance On-Demand</h1>
						<h2>One press of a button puts you in touch with our dispatchers who can send help your way, at any time and any place.</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- <a href="#features" class="scroll2"><i class="glyphicon glyphicon-chevron-down"></i></a> -->
	</section>
	<section class="section features" id="features">
		<div class="container">
			<h2 class="push">Meet Your New Smartwatch</h2>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-md-9 col-md-offset-2">
					<div class="row">
						<div class="img-slides col-sm-4" id="slides">
							<img id="img1" class="active" src="<?php bloginfo('template_directory'); ?>/library/images/ortho-front.jpg" alt="">
							<img id="img2" src="<?php bloginfo('template_directory'); ?>/library/images/ortho-side.jpg" alt="">
							<img id="img3" src="<?php bloginfo('template_directory'); ?>/library/images/ortho-back.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<ul id="slide-cntrl" class="slide-cntrl">
								<li class="active" id="slide1">
									<h3>Rechargeable Battery</h3>
									<p>Neque facilis harum accusamus dolore facere voluptates placeat consectetur numquam.</p>
								</li>
								<li id="slide2">
									<h3>3G Connectivity + GPS</h3>
									<p>Neque facilis harum accusamus dolore facere voluptates placeat consectetur numquam.</p>
								</li>
								<li id="slide3">
									<h3>Waterproof + Breathable and comfortable band</h3>
									<p>Neque facilis harum accusamus dolore facere voluptates placeat consectetur numquam.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			jQuery('#slide-cntrl li').mouseover(function(){

				jQuery('#slide-cntrl li').removeClass('active');
				jQuery(this).toggleClass('active');

			});

			jQuery('#slide1').mouseover(function(){

				jQuery('.img-slides img').removeClass('active');
				jQuery('#img1').addClass('active');

			});

			jQuery('#slide2').mouseover(function(){

				jQuery('.img-slides img').removeClass('active');
				jQuery('#img2').addClass('active');

			});

			jQuery('#slide3').mouseover(function(){

				jQuery('.img-slides img').removeClass('active');
				jQuery('#img3').addClass('active');

			});
		</script>
	</section>
	<section class="section fp-normal-scroll ash faq" id="faq">
		<div class="container">
			<h2 class="push">Frequently Asked Questions</h2>
			<div class="row">
				<div class="col-sm-12 col-md-8 col-md-offset-2">
					<!-- Get FAQ Repeater custom fields from this Page -->
					<?php if(get_field('faq')): ?>
						<div class="panel-group" id="accordion">
						<!-- open the loop -->
						<?php while(has_sub_field('faq')): ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('id'); ?>" class="collapsed">
											<i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-minus"></i>	<?php the_sub_field('question'); ?>
										</a>
									</h4>
								</div>
								<div id="collapse<?php the_sub_field('id'); ?>" class="panel-collapse collapse">
									<div class="panel-body">
										<?php the_sub_field('answer'); ?>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						<!-- close the loop -->
						</div>
					<?php endif; ?>
					<!-- end of Repeater custom fields and dynamic content -->
				</div>
			</div>
		</div>
	</section>
</div>

<script src="<?php bloginfo('template_directory'); ?>/library/js/min/app-min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/bootstrap-switch.min.js"></script>
	<!-- <script>
		var windowHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
		var divHeight = windowHeight;
		console.log(divHeight);
		jQuery('.hero').css('height', divHeight);
	</script> -->
<script>

	

	jQuery(document).ready(function($){

		// Hero slides
		setInterval(function(){
		  $('#hero .bg').toggleClass('active')
		  $('#hero .carousel-indicators li').toggleClass('active')
		}, 5000);



		// $("[name='switch']").bootstrapSwitch({
		// 	onText: 'Silver',
		// 	offText: 'Blue'
		// });

		// $('input[name="switch"]').on('switchChange.bootstrapSwitch', function(event, state) {
  // 		$('#hero .bg').toggleClass('active')
		// });


		$('#watch1').click(function(){
			alert('click');
			$('#hero .bg').removeClass('active');
			$('#boy').addClass('active');
			$('#hero .carousel-indicators li').removeClass('active');
			$(this).addClass('active');
		});

		$('#watch2').click(function(){
			$('#hero .bg').removeClass('active');
			$('#girl').addClass('active');
			$('#hero .carousel-indicators li').removeClass('active');
			$(this).addClass('active');
		});

		$('#fullpage').fullpage({
			paddingTop: '70px',
			css3: false,
			fitToSection: false,
			hybrid: true,
			onLeave: function(index, nextIndex, direction){
				var leavingSection = $(this);

				//after leaving section 2
				if(index == 1 && direction =='down'){
					$('.hero').removeClass('on');
					$('.pane-2').addClass('on');
					//alert('show');
					$('#cta-bar').fadeIn();

				}

				else if(index == 2 && direction == 'up'){
					$('.hero').removeClass('on');
					$('.pane-1').addClass('on');
					//alert('hide');
					$('#cta-bar').fadeOut();
					
				} 

				else if(index == 2 && direction =='down'){
					$('.hero').removeClass('on');
					$('.pane-3').addClass('on');
				}

				else if(index == 3 && direction == 'up'){
					$('.hero').removeClass('on');
					$('.pane-2').addClass('on');
				} 

				else if(index == 3 && direction =='down'){
					$('.hero').removeClass('on');
					$('.pane-4').addClass('on');
				}

				else if(index == 4 && direction == 'up'){
					$('.hero').removeClass('on');
					$('.pane-3').addClass('on');
				} 

				else if(index == 4 && direction =='down'){
					$('.hero').removeClass('on');
					$('.pane-5').addClass('on');
				}

				else if(index == 5 && direction == 'up'){
					$('.hero').removeClass('on');
					$('.pane-4').addClass('on');
				} 

				else if(index == 5 && direction =='down'){
					$('.hero').removeClass('on');
					$('.pane-6').addClass('on');
				}

				else if(index == 6 && direction == 'up'){
					$('.hero').removeClass('on');
					$('.pane-5').addClass('on');
				} 
			}
		});

		
		$('#hero').bind('inview', function (event, visible, topOrBottomOrBoth) {
			if (visible == true) {
				
				if (topOrBottomOrBoth == 'top') {
					// top part of element is visible

				} else if (topOrBottomOrBoth == 'bottom') {
					// bottom part of element is visible


				} else {
					// whole part of element is visible
					$('.hero ').removeClass('active');
					$('#hero ').addClass('active');

				}
			} else {
				// element has gone out of viewport
				//$('.navbar').addClass('dark');
			}
		});

		$('#hero2').bind('inview', function (event, visible, topOrBottomOrBoth) {
			if (visible == true) {
				
				if (topOrBottomOrBoth == 'top') {
					// top part of element is visible
				} else if (topOrBottomOrBoth == 'bottom') {
					// bottom part of element is visible
					

				} else {
					$('.hero ').removeClass('active');
					$('#hero2 ').addClass('active');
					
					
				}
			} else {
				// element has gone out of viewport
			}
		});

		$('#hero3').bind('inview', function (event, visible, topOrBottomOrBoth) {
			if (visible == true) {
				
				if (topOrBottomOrBoth == 'top') {
					// top part of element is visible
				} else if (topOrBottomOrBoth == 'bottom') {
					// bottom part of element is visible

				} else {
					// whole part of element is visible
					$('.hero ').removeClass('active');
					$('#hero3 ').addClass('active');
				}
			} else {
				// element has gone out of viewport
			}
		});

		$('#hero4').bind('inview', function (event, visible, topOrBottomOrBoth) {
			if (visible == true) {
				
				if (topOrBottomOrBoth == 'top') {
					// top part of element is visible
				} else if (topOrBottomOrBoth == 'bottom') {
					// bottom part of element is visible

				} else {
					// whole part of element is visible
					$('.hero ').removeClass('active');
					$('#hero4 ').addClass('active');
				}
			} else {
				// element has gone out of viewport
			}
		});

		$('#hero5').bind('inview', function (event, visible, topOrBottomOrBoth) {
			if (visible == true) {
				
				if (topOrBottomOrBoth == 'top') {
					// top part of element is visible
				} else if (topOrBottomOrBoth == 'bottom') {
					// bottom part of element is visible

				} else {
					// whole part of element is visible
					$('.hero').removeClass('active');
					$('#hero5').addClass('active');
					$('.hero .bg').show();
				}
			} else {
				// element has gone out of viewport
			}
		});

		$('#features').bind('inview', function (event, visible, topOrBottomOrBoth) {
			if (visible == true) {
				
				if (topOrBottomOrBoth == 'top') {
					// top part of element is visible
				} else if (topOrBottomOrBoth == 'bottom') {
					// bottom part of element is visible

				} else {
					// whole part of element is visible
					$('.hero ').removeClass('active');
					$('.hero .bg').hide();
				}
			} else {
				// element has gone out of viewport
			}
		});

		$('#faq').bind('inview', function (event, visible, topOrBottomOrBoth) {
			if (visible == true) {
				
				if (topOrBottomOrBoth == 'top') {
					// top part of element is visible
				} else if (topOrBottomOrBoth == 'bottom') {
					// bottom part of element is visible

				} else {
					// whole part of element is visible
					$('.hero ').removeClass('active');
					$('.hero .bg').hide();
					console.log('faq');
				}
			} else {
				// element has gone out of viewport
			}
		});

		$('.footer').bind('inview', function (event, visible, topOrBottomOrBoth) {
			if (visible == true) {
				
				if (topOrBottomOrBoth == 'top') {
					// top part of element is visible
				} else if (topOrBottomOrBoth == 'bottom') {
					// bottom part of element is visible

				} else {
					// whole part of element is visible
					$('#cta-bar').fadeOut();
				}
			} else {
				$('#cta-bar').fadeIn();
			}
		});

		

		// If there's a carousel on the page, activate it
		$('.carousel').carousel();

		// Activate toolips
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});

		// Initialize accordion UI and open the first accordion panel
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');;

		// Smooth Scroll Functionality
		$('.scroll a, .scroll2').smoothScroll({
			offset: -70,
			easing: 'swing'
		});

		$('.scroll, .scroll2 a').smoothScroll({
			offset: 0,
			easing: 'swing'
		});

		$(window).on('beforeunload', function() {
			$(window).scrollTop(0);
		});


		// Find out what browser they're using
		var userAgent = window.navigator.userAgent;

		// If ipad or iphone, do something
		if (userAgent.match(/iPad/i) || userAgent.match(/iPhone/i)) {
			
		}
		// Use below if not iPad or iPhone
		else {
			
		}

	});
</script>


<?php get_footer(); ?>