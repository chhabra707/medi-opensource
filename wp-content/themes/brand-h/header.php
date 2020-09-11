<?php

/*
		This is the template for the hedaer
		
		@package sunsettheme
	*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php bloginfo('name');
			wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--Begin tailwind-->
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<!-- <link rel="stylesheet" href="http://medi.techroad.io/wp-content/themes/brand-h/style.css"> -->
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
	<style>
	
	@font-face {
		
    /* font-family: 'noto_sanslight'; # no have any more 
    src: url('<?php bloginfo('template_directory') ?>/fonts/notosans-light.woff2') format('woff2'),
         url('<?php bloginfo('template_directory') ?>/fonts/notosans-light.woff') format('woff'); */
    font-weight: normal;
    font-style: normal;

}
body > div.container-fluid.mb-1 > div > header{
	z-index:2!important;
}

/* body.page-template-default.page.customize-support.no-scroll header.header-container{
    z-index:2!important;
} */



.font-roboto{
    font-family: 'noto_sanslight'!important;
}

.right-poop-0 {
    right: -353px!important;
}

.w-screen-98 {
    width: 98vw!important;
}

.h-screen-per{
    height:100%!important;
}
.button_11{
             padding:15px!important;
        }
        
         .active.button_11{
             padding:14px!important;
        }
        
        .location_content p{
            font-size:14px!important;
        }
	
	@media screen and (max-width:1920px){
	    .header-container.fixed-top{
            position: fixed;
            width: 64rem;
            margin: 0 auto;
        }
        
        
	}
	
	
        .remove_icon{
            display:none;
        }
        
        @media screen and (max-width:991px){
            .button_11{
                padding:18px;
            }
        }
	
		@media screen and (max-width:640px){
	    .header-container.fixed-top{
            position: fixed;
            width: 55rem;
            margin: 0 auto;
            top:0px;
        }
        
        .content-partners {
            width: 100%!important;
            height: 25vh!important;
        }
	}
	
	@media screen and (max-width:500px){
	    .header-container.fixed-top{
            position: fixed;
            width: 50rem;
            margin: 0 auto;
        }
        .contnet-addtional {
            top: 13%!important;
        }
	}
	
	@media screen and (max-width:460px){
	    .header-container.fixed-top{
            position: fixed;
            width: 38rem;
            margin: 0 auto;
        }
        
        .header-container .top_full, .header-container.fixed-top .scroll_full {
            display: block;
            width: 80%;
            margin-left: 0;
        }
	}
	
		@media screen and (max-width:360px){
	    .header-container.fixed-top{
            position: fixed;
            width: 36rem;
            margin: 0 auto;
        }
	}
	
	@media screen and (max-width:320px){
	    .header-container.fixed-top{
            position: fixed;
            width: 32rem;
            margin: 0 auto;
        }
        .fixed-top img.mx-auto.scroll_full {
            width: 72%;
            margin-left: 10px;
        }
	}
	
        .fixed-top .header-content.table {
            background-color:#fff;
            -webkit-box-shadow:0px 5px 9px -6px rgba(0, 0, 0, 0.2)!important;
            -moz-box-shadow:0px 5px 9px -6px rgba(0, 0, 0, 0.2)!important;
            box-shadow:0px 5px 9px -6px rgba(0, 0, 0, 0.2)!important;   
            padding-bottom:23px;
        }
        .header-container .top_full, .header-container.fixed-top .scroll_full,
        .header-container .scroll_full, .header-container.fixed-top .top_full{
            display: block;
            width: 65%;
            margin: 0 auto;
        }
		
		
		.leading-tight {
            line-height: 1.25!important;
        }
        .chart_area .active {
            font-weight: bold;
        }
        
        .swiper-slide{
            top:70px!important;
        }
        .sunset-sidebar{
            z-index:9999!important;
        }
        
        .border-3 {
            border: 0px dashed #fff;
        }
        .button_hovere .border-3.active{
            border:0px dashed #fff;
        }
        
        .button-12 {
            background-color: #ffffff!important;
            color: #2681F3;
            font-size: 20px;
            border-radius: 9999px;
            font-size: 18px;
            border-color: #2681F3;
        }
        
        .button-12:focus, .button-12:hover{
            outline:none!important;
            background-color:#2681F3!important;
            color:#fff!important;
        }
        
        .sidebar-open{
            top:20px!important;
        }
        
        /* .z-40{
            z-index:9999!important;
        } */
        
        .main_cont_img .flex img{
               /*transition: transform .2s;*/
               
               
               display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
    cursor:pointer;
               
        }
        
       .main_cont_img .flex img:hover{
           /*transform: scale(2);*/
           -webkit-transform: translateY(-8px);
    transform: translateY(-8px);
        }
        
        .space-evenly {
            justify-content: space-evenly;
        }
        
	</style>
	<!--End tailwind-->
	<!--Begin OG-->
	<meta property="og:title" content="Himed with doctors">
	<meta property="og:site_name" content="Himedi">
	<meta property="og:url" content="https://himedidoctors.com/">
	<meta property="og:description" content="Himedi meets doctors of first-class hospitals in Korea on behalf of you. We lead you to world-best medical staff and best remedies.">
	<meta property="og:type" content="business.business">
	<meta property="og:image" content="<?php bloginfo('template_directory') ?>/img/Bild3.jpg">
	<!--End OG -->
	<?php if (is_singular() && pings_open(get_queried_object())) : ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

	<?php
	$custom_css = esc_attr(get_option('sunset_css'));
	if (!empty($custom_css)) :
		echo '<style>' . $custom_css . '</style>';
	endif;
	?>

	<style>
	body{
	    font-family: 'Noto Sans', sans-serif!important;
	}
		.swiper-container {
			cursor: pointer;
			min-height: 445px;
		}

		.swiper-scrollbar {
			bottom: 15px !important;
			margin-left: 2em;
			width: 90% !important;
		}

		.swiper-scrollbar-drag {
			background: #ffffff;
		}

		.endCont {
			width: 100%;
			height: 500px;
			background-image: url("<?php bloginfo('template_directory') ?>/img/endCont.jpg");
			background-repeat: no-repeat;
			background-size: contain;
			
		}

		.overlay {
			background: #00000030;
		}

		.active {
			display: inline-block !important;
		}

		.applyBtn {
			border-radius: 10px;
		}

		.applyBtn:hover:after {
			content: ' >';
			word-spacong: 30px;
		}

		.arrowAnimate {
			animation-name: bounce;
			animation-duration: 1.8s;
			animation-iteration-count: infinite;
		}

		@keyframes bounce {

			0%,
			20%,
			50%,
			80%,
			100% {
				transform: translateY(0px);
			}

			40% {
				transform: translateY(-15px);
			}

			60% {
				transform: translateY(-5px);
			}
		}
	</style>

</head>

<body <?php body_class(); ?>>


<div class="sunset-sidebar bg-white text-black sidebar-closed w-full" style="color:black;background-color:white">
		<div class="sunset-sidebar-container">
		
			<a class="js-toggleSidebar sidebar-close">
				<span class="sunset-icon sunset-close"></span>
				
			</a>
		
			<div class="sidebar-scroll">
				
				<div class="">
					<div class="py-10 px-10 mt-10">
						
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'We give sincere answers to any question for patients’ recovery';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Мы искренне отвечаем на любые вопросы для вашего полного выздоровления';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Өвчтөнг эдгэрэхтэй тулгарсан бүхий л асуутанд бид танд хариулах болно';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'نعطي إجابات صادقة على أي سؤال من أجل تعافي المرضى.';
							}
							?>
					</div>
					<div class="flex justify-center">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>/inquiry" class="">
							<button class="text-white py-4 px-20 mx-auto rounded-lg mb-20 hover:bg-blue-500" style="background-color:#2681F3">
								<?php 
									if(ICL_LANGUAGE_CODE == 'en'){ 
										echo 'Inquiry';
									} 
									elseif(ICL_LANGUAGE_CODE == 'ru') { 
										echo 'запрос';
									} 
									elseif(ICL_LANGUAGE_CODE == 'mn') { 
										echo 'Зөвлөгөө авах';
									} 
									elseif(ICL_LANGUAGE_CODE == 'ar') { 
										echo 'تساؤلات';
									}
								?>
									
							</button>	
						</a>
					</div>
					<div class="flex mx-5">
						<div class="w-6 h-6 mt-1 mx-3">
							<svg aria-hidden="true" style="color:#9a9a9a" focusable="false" data-prefix="fal" data-icon="user-nurse" class="svg-inline--fa fa-user-nurse fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M319.41,318,224,413.39,128.59,318C57.09,321.09,0,379.59,0,451.8A58.23,58.23,0,0,0,58.2,510H389.8A58.23,58.23,0,0,0,448,451.8C448,379.59,390.91,321.09,319.41,318ZM208,478H58.2A26.28,26.28,0,0,1,32,451.8c0-47.46,38-92.44,84.73-100.41L208,442.66Zm181.8,0H240V442.64l91.25-91.25C378,359.36,416,404.34,416,451.8A26.28,26.28,0,0,1,389.8,478ZM224,302A128,128,0,0,0,352,174V63.82a32,32,0,0,0-20.76-30L246.47,2.07a64.06,64.06,0,0,0-44.94,0L116.76,33.86A32,32,0,0,0,96,63.82V174A128,128,0,0,0,224,302ZM128,63.82,212.77,32a32,32,0,0,1,22.47,0L320,63.82V142H128ZM320,174a96,96,0,0,1-192,0ZM259,72.67H237.33V51a5,5,0,0,0-5-5H215.67a5,5,0,0,0-5,5V72.67H189a5,5,0,0,0-5,5V94.33a5,5,0,0,0,5,5h21.67V121a5,5,0,0,0,5,5h16.66a5,5,0,0,0,5-5V99.33H259a5,5,0,0,0,5-5V77.67A5,5,0,0,0,259,72.67Z"></path></svg>
						</div>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>/how-to-use" class="text-black"> 
							<div class="text-black ml-1">
								<?php 
									if(ICL_LANGUAGE_CODE == 'en'){ 
										echo 'How to utilize Himedi with Doctors';
									} 
									elseif(ICL_LANGUAGE_CODE == 'ru') { 
										echo 'Как использовать Himedi (Хаймеди) с врачами';
									} 
									elseif(ICL_LANGUAGE_CODE == 'mn') { 
										echo 'Himedi эмч нартай хэрхэн үйлчилгээ авах вэ';
									} 
									elseif(ICL_LANGUAGE_CODE == 'ar') { 
										echo 'كيفية الاستفادة من هاي ميدي مع الأطباء';
									}
								?>
							</div>
						</a>
					</div>
					<div class="flex mt-5 mx-5">
						<div class="w-6 h-6 mt-1 mx-3">
							<svg aria-hidden="true" style="color:#9a9a9a" focusable="false" data-prefix="fal" data-icon="hospital-alt" class="svg-inline--fa fa-hospital-alt fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M468 384h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12zm0-128h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12zM308 384h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12zm0-128h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12zM148 384h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12zm0-128h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12zm182-144h-26V86c0-3.3-2.7-6-6-6h-20c-3.3 0-6 2.7-6 6v26h-26c-3.3 0-6 2.7-6 6v20c0 3.3 2.7 6 6 6h26v26c0 3.3 2.7 6 6 6h20c3.3 0 6-2.7 6-6v-26h26c3.3 0 6-2.7 6-6v-20c0-3.3-2.7-6-6-6zm198 16H416V48c0-26.5-21.5-48-48-48H208c-26.5 0-48 21.5-48 48v80H48c-26.5 0-48 21.5-48 48v328c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V176c0-8.8 7.2-16 16-16h144V48c0-8.8 7.2-16 16-16h160c8.8 0 16 7.2 16 16v112h144c8.8 0 16 7.2 16 16v328c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V176c0-26.5-21.5-48-48-48z"></path></svg>
						</div>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>/affiliate" class="text-black"> 
							<div class="text-black ml-1">
								<?php 
									if(ICL_LANGUAGE_CODE == 'en'){ 
										echo 'Check partner hospitals';
									} 
									elseif(ICL_LANGUAGE_CODE == 'ru') { 
										echo 'Проверьте партнерские больницы';
									} 
									elseif(ICL_LANGUAGE_CODE == 'mn') { 
										echo 'Хамтран ажилладаг эмнэлгүүд хайх.';
									} 
									elseif(ICL_LANGUAGE_CODE == 'ar') { 
										echo 'تحقق من المستشفيات الشريكة';
									}
								?>
							</div>
						</a>
					</div>
					<div class="flex mt-5 mx-5">
						<div class="w-8 h-8 mt-1 mx-3">
							<svg aria-hidden="true" style="color:#9a9a9a" focusable="false" data-prefix="fal" data-icon="user-check" class="svg-inline--fa fa-user-check fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M637.7 144.6l-14.1-14.2c-3.1-3.1-8.2-3.2-11.3 0L497.1 242.1l-53.3-53.4c-3.1-3.1-8.2-3.1-11.3 0l-14.2 14.1c-3.1 3.1-3.1 8.2 0 11.3l70.2 70.4c4.7 4.7 12.3 4.7 17 0l132.1-128.6c3.2-3.1 3.2-8.2.1-11.3zM313.6 288c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4zM416 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16v-41.6C32 365.9 77.9 320 134.4 320c19.6 0 39.1 16 89.6 16 50.4 0 70-16 89.6-16 56.5 0 102.4 45.9 102.4 102.4V464zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm0-224c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path></svg>
						</div>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>/interview" class="text-black"> 
							<div class="text-black">
								<?php 
									if(ICL_LANGUAGE_CODE == 'en'){ 
										echo 'Interviews with successful cases';
									} 
									elseif(ICL_LANGUAGE_CODE == 'ru') { 
										echo 'Интервью с успешно выздоровавшими пациентами';
									} 
									elseif(ICL_LANGUAGE_CODE == 'mn') { 
										echo 'Амжилттай тохиолдлуудын ярилцлага';
									} 
									elseif(ICL_LANGUAGE_CODE == 'ar') { 
										echo 'مقابلات مع حالات ناجحة';
									}
								?>
							</div>
						</a>
					</div>
					<div class="flex mt-5 mx-5">
						<div class="w-6 h-6 mt-0 mx-3">
							<svg aria-hidden="true" style="color:#9a9a9a" focusable="false" data-prefix="fal" data-icon="notes-medical" class="svg-inline--fa fa-notes-medical fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M336 64h-88.6c.4-2.6.6-5.3.6-8 0-30.9-25.1-56-56-56s-56 25.1-56 56c0 2.7.2 5.4.6 8H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM192 32c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm160 432c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16h48v20c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12V96h48c8.8 0 16 7.2 16 16v352zm-72-176h-56v-56c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v56h-56c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h56v56c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8v-56h56c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8z"></path></svg>
						</div>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>/success-cases" class="text-black"> 
							<div class="text-black ml-2">
								<?php 
									if(ICL_LANGUAGE_CODE == 'en'){ 
										echo 'Examples of 2nd diagnoses';
									} 
									elseif(ICL_LANGUAGE_CODE == 'ru') { 
										echo 'Примеры 2-го диагноза';
									} 
									elseif(ICL_LANGUAGE_CODE == 'mn') { 
										echo 'Хоердогч оношлогоонуудын жишээнүүд';
									} 
									elseif(ICL_LANGUAGE_CODE == 'ar') { 
										echo 'أمثلة على التشخيص الثاني';
									}
								?>
							</div>
						</a>
						
					</div>
					<div class="flex mt-5 mx-5">
						<div class="w-6 h-6 mt-0 mx-3 mt-1">
							<svg aria-hidden="true" style="color:#9a9a9a" focusable="false" data-prefix="fal" data-icon="tasks" class="svg-inline--fa fa-tasks fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M145.35 207a8 8 0 0 0-11.35 0l-71 71-39-39a8 8 0 0 0-11.31 0L1.35 250.34a8 8 0 0 0 0 11.32l56 56a8 8 0 0 0 11.31 0l88-88a8 8 0 0 0 0-11.32zM62.93 384c-17.67 0-32.4 14.33-32.4 32s14.73 32 32.4 32a32 32 0 0 0 0-64zm82.42-337A8 8 0 0 0 134 47l-71 71-39-39a8 8 0 0 0-11.31 0L1.35 90.34a8 8 0 0 0 0 11.32l56 56a8 8 0 0 0 11.31 0l88-88a8 8 0 0 0 0-11.32zM503 400H199a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h304a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8zm0-320H199a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h304a8 8 0 0 0 8-8V88a8 8 0 0 0-8-8zm0 160H199a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h304a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8z"></path></svg>
						</div>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>/inquiry" class="text-black"> 
							<div class="text-black ml-2">
								<?php 
									if(ICL_LANGUAGE_CODE == 'en'){ 
										echo 'Inquiry';
									} 
									elseif(ICL_LANGUAGE_CODE == 'ru') { 
										echo 'Запрос';
									} 
									elseif(ICL_LANGUAGE_CODE == 'mn') { 
										echo 'Зөвлөгөө авах';
									} 
									elseif(ICL_LANGUAGE_CODE == 'ar') { 
										echo 'تساؤلات';
									}
								?>
							</div>
						</a>
					</div>
					<div class="flex mt-5 mx-5">
							<?php //do_action('wpml_add_language_selector'); ?>					
							<?php echo do_shortcode('[wpml_language_selector_widget]'); ?>					
					</div>					
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/about-us" class="text-black" style="color:black!important"> 
						<div class="mt-12" >
							<div style="position:relative">
								<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/sidebar-1.png" style="position:absolute;top:0px"> -->
								<div style="position:absolute;top:10px">
									<img src="<?php echo get_template_directory_uri(); ?>/img/himedi-story-sidebar.png">
									<!-- <div class="mt-3 ml-5">HIMEDI STORY</div>
									<div class="ml-5 text-sm">As a complex medical service platform</div>								
									<div class="ml-10 mt-2 text-sm text-gray-500">More > </div> -->
								</div>	
							</div>
						</div>
					</a>
					
					</div>
				</div>
			</div><!-- .sidebar-scroll -->
		
		</div><!-- .sunset-sidebar-container -->
		
	</div><!-- .sunset-sidebar -->
	
	<div class="sidebar-overlay js-toggleSidebar"></div>
	
	<div class="container-fluid mb-1">
		
		<div class="row">
				
			<header class="header-container background-image text-center lg:h-48 h-16" style="background-image: url(<?php header_image(); ?>);height:0px; z-index:999">
				
				<a class="js-toggleSidebar sidebar-open mt-0">
					<!-- <span class="sunset-icon sunset-menu lg:text-2xl text-2xl" style="color:#333333"></span> -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu-black.png" style="width:25px;" class="scroll_full"/>
				</a>
				
				<!-- logo -->
				<div class="header-content table">
					<div class="table-cell" style="vertical-align:top;padding-top:25px">
						<h1 class="site-title sunset-icon justify-center flex">
							<!-- <span class="sunset-logo"></span> -->
							
							

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							
								<?php 
									if(ICL_LANGUAGE_CODE == 'en'){ 
									} 
									elseif(ICL_LANGUAGE_CODE == 'ru') { 
									} 
									elseif(ICL_LANGUAGE_CODE == 'mn') { 
									} 
									elseif(ICL_LANGUAGE_CODE == 'ar') {  
									}
								?>

								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo_final.png" class="mx-auto scroll_full"/>
								</div>
							</a>
							<span class="hide"><?php bloginfo( 'name' ); ?></span>
						</h1>
						<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
					</div><!-- .table-cell -->
				</div><!-- .header-content -->
				
				<div class="nav-container hidden-xs">
					
					<nav class="navbar navbar-sunset">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'nav navbar-nav',
								'walker' => new Sunset_Walker_Nav_Primary()
							) );	
						?>
					</nav>
					
				</div><!-- .nav-container -->
				
			</header><!-- .header-container -->

		</div><!-- .row -->
		
	</div><!-- .container-fluid -->