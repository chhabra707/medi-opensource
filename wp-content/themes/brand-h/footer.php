<?php

/*
		This is the template for the footer
		
		@package sunsettheme
	*/

?>

<footer class="text-center mt-20 font-noto-regular">


<!-- <div class="text-2xl mb-5  ">
<a href="https://himedi.com/en?terms=true" class="text-gray-600 font-bold "style="font-size:14px;">Terms of Use</a> .
<a href="https://himedi.com/en?privacy=true" class="text-gray-600 font-bold" style="font-size:14px;">Privacy Policy</a>
</div> -->


<p class="text-gray-500 px-20 " style="font-size:13px">
	22, Seocho-daero 78-gil, Seocho-gu, Seoul, Republic of Korea
</p>


<p class="text-gray-500 mt-8 mb-16">
&copy; HIMEDI Korea Co.,LTD.
</p>

</footer>

<?php wp_footer(); ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".header-container").addClass("fixed-top");
    } else {
        $(".header-container").removeClass("fixed-top");
    }
});
		</script>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
	var mySwiper = new Swiper('.swiper-container', {
		// Optional parameters
		loop: false,

		// If we need pagination
		// pagination: {
		// 	el: '.swiper-pagination',
		// },

		//Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		// And if we need scrollbar
		scrollbar: {
			el: '.swiper-scrollbar',
		},
	});

	jQuery(document).ready(
		function() {

			for (let i = 0; i < 3; i++) {
				const chart = jQuery('.chart' + i);
				const trig = jQuery('.chartTrig' + i);
				chart.hide();

				trig.on('click', function() {
					jQuery(this).addClass('active').siblings().removeClass('active');
					jQuery(this).addClass('border-2').siblings().removeClass('border-2');
					if (trig.hasClass('active')) {
						chart.addClass('active').siblings().removeClass('active');
					}
				});
			}

			jQuery("form input").on('invalid', function() {
				$('input,textarea,radio').addClass('border border-red-500');
			});
		}
	);
</script>

</body>

</html>