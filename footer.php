<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gcs
 */

?>


	<footer id="colophon" class="site-footer">
		<div class="footer-logo-outer">
			<div class="container">
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="" class="footer-logo">
			</div>
		</div>
	
		<div class="footer-widgets-outer">
			<div class="footer-widgets container">
				<div class="address">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer-offices.png">
					<h6>Our Offices</h6>
					<ul class="footer-list">
						<li><span>United Kingdom</span></li>
						<li><span>Portugal</span></li>
						<li><span>Hong Kong</span></li>
						<li><span>Brazil</span></li>
					</ul>
				</div>
				<div class="menu">
					<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/footer-offices.png">
					<ul class="footer-list">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Blog & News</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Contact Us</a></li>

					</ul>
				</div>
				<div class="categories">
					<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/footer-offices.png">

					<ul class="footer-list">
						<li><a href="#">Golden Visa Portugal</a></li>
						<li><a href="#">Golden Visa Spain</a></li>
						<li><a href="#">Citizenship by Investment Cyprus</a></li>
						<li><a href="#">Citizenship by Investment Malta</a></li>
						<li><a href="#">Property Investment</a></li>
					</ul>
				</div>
				<div class="social">
					<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/footer-offices.png">

					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-linked.png"> <span>Connect with us on LinkedIn</span></a>
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-fb.png"> <span>Find us on Facebook</span></a>
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-ig.png"> <span>Find us on Instagram</span></a>
				</div>
			</div>
		
		</div>
		<div class="footer-widgets">
		
		</div>
		<hr>
		<div class="copyright-outer">
			<div class="copyright container">
				<p>Global Citizen Solutions © 2020. All rights reserved.</p>
			</div>
		</div>
	
	</footer><!-- #colophon -->



</div><!-- #page -->




<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>

	
  AOS.init();


</script>


<?php wp_footer(); ?>

<script>

$(document).ready(function() {
  // Check if element is scrolled into view
  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }
  // If element is scrolled into view, fade it in
  $(window).scroll(function() {
    $('.scroll-animations .animated').each(function() {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass('fadeInLeft');
      }
    });
  });
});

</script>

<script>

let SlideImages = document.querySelectorAll('.carousel-item');

let CarourselIndicator = document.querySelectorAll('.dot');
let _slideIndex = 0;

function slideLeft() {
  SlideImages[_slideIndex].classList.remove('active');
  CarourselIndicator[_slideIndex].classList.remove('active');
  _slideIndex = _slideIndex === 0 ? SlideImages.length - 1 : _slideIndex - 1;
  SlideImages[_slideIndex].classList.add('active');
  CarourselIndicator[_slideIndex].classList.add('active');  
}

function slideRight() {
  SlideImages[_slideIndex].classList.remove('active');
  CarourselIndicator[_slideIndex].classList.remove('active');
  _slideIndex = (_slideIndex === (SlideImages.length - 1)) ? 0 : _slideIndex + 1;
  SlideImages[_slideIndex].classList.add('active');
  CarourselIndicator[_slideIndex].classList.add('active');  
}

function ChangeSlide(slideNumber) {
  SlideImages[_slideIndex].classList.remove('active');
  CarourselIndicator[_slideIndex].classList.remove('active');
  _slideIndex = slideNumber - 1;
  SlideImages[_slideIndex].classList.add('active');
  CarourselIndicator[_slideIndex].classList.add('active');  
}

(function($) {
$('#toggle').toggle( 
    function() {
        $('#popout').animate({ left: 0 }, 'slow', function() {
            $('#toggle').html('<img src="<?php echo get_template_directory_uri(); ?>/img/hamburger.png">');
        });
    }, 
    function() {
        $('#popout').animate({ left: -250 }, 'slow', function() {
            $('#toggle').html('<img src="<?php echo get_template_directory_uri(); ?>/img/hamburger.png">');
        });
    }
);
})(jQuery);




</script>


</body>
</html>
