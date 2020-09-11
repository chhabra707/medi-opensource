<!-- Section 4 (start) -->
<section class="items-center pt-10">

  <!-- Icon (start) -->
  
  <div style="margin-top:110px;">
    <div class="border-gray-700 border w-16 h-16 rounded-full py-2 px-2 flex items-center justify-center text-gray-700" style="margin:0 auto">
        <svg class="w-8 h-8" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="tasks" class="svg-inline--fa fa-tasks fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M145.35 207a8 8 0 0 0-11.35 0l-71 71-39-39a8 8 0 0 0-11.31 0L1.35 250.34a8 8 0 0 0 0 11.32l56 56a8 8 0 0 0 11.31 0l88-88a8 8 0 0 0 0-11.32zM62.93 384c-17.67 0-32.4 14.33-32.4 32s14.73 32 32.4 32a32 32 0 0 0 0-64zm82.42-337A8 8 0 0 0 134 47l-71 71-39-39a8 8 0 0 0-11.31 0L1.35 90.34a8 8 0 0 0 0 11.32l56 56a8 8 0 0 0 11.31 0l88-88a8 8 0 0 0 0-11.32zM503 400H199a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h304a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8zm0-320H199a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h304a8 8 0 0 0 8-8V88a8 8 0 0 0-8-8zm0 160H199a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h304a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8z"></path></svg>
      </div>
    
  </div>
	<!-- Icon (end) -->

	<!-- Content (start) -->
	<h2 class="text-center px-4 font-size-24 leading-none text-gray-700" style="font-size:24px; line-height:1.2">
		<?php 
			if(ICL_LANGUAGE_CODE == 'en'){ 
				echo 'Please leave your contact information and inquiry. An answer will be given <br class="lg:hidden"><b>within 24 hours</b>';
			} 
			elseif(ICL_LANGUAGE_CODE == 'ru') { 
				echo 'Пожалуйста, оставьте свою контактную информацию и запрос. Ответ будет дан в течение 24 часов';
			} 
			elseif(ICL_LANGUAGE_CODE == 'mn') { 
				echo 'Холбоо барих мээдэлэл болон асуулгаа үлдээвэл бид танд 24 цагийн дотор хариу өгөх болно';
			} 
			elseif(ICL_LANGUAGE_CODE == 'ar') { 
				echo 'يرجى ترك معلومات الاتصال الخاصة بك والاستفسار. سيتم الرد في غضون 24 ساعة';
			}
		?>
    
  </h3>
  <!-- <p class="mt-5 text-center px-6 leading-none" style="color:#2681F3;font-size:16px">
  		<?php 
			if(ICL_LANGUAGE_CODE == 'en'){ 
				echo '* If you have an urget inquiry <br class="lg:hidden"> please leave it via WhatsApp.';
			} 
			elseif(ICL_LANGUAGE_CODE == 'ru') { 
				echo 'Если у вас есть срочный запрос, оставьте его через WhatsApp.';
			} 
			elseif(ICL_LANGUAGE_CODE == 'mn') { 
				echo 'Хэрэв танд яаралтай асуулт байвал WhatsApp-аар бидэнтэй холбогдоно уу.';
			} 
			elseif(ICL_LANGUAGE_CODE == 'ar') { 
				echo 'إذا كان لديك استفسار عاجل ، يرجى تركه عبر WhatsApp.';
			}
		?>
		
	</p> -->
	<!-- Content (end) -->

	<!-- Divider (start) -->
	<div class="divider mx-auto w-1/3 h-1 bg-gray-500 mt-16"></div>
	<!-- Divider (end) -->

	<!-- Form (start) -->
	
	<?php echo do_shortcode("[brand-h-form]"); ?>
	<!-- Form (end) -->
</section>
<!-- Section 4 (end) -->