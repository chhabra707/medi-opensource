<?php

/*
	
@package sunsettheme
-- Page Template
*/

?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
<style type="text/css" scoped>
    html { scroll-behavior: smooth; } 
</style>
 <!-- Section 1 (start) -->
 <section class="text-justify">
        <!-- Main slider (start) -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide object-fit-slide">
					        <img src="<?php bloginfo('template_directory') ?>/img/Bild2-min-700.jpg" alt="" >
                </div>
                <div class="swiper-slide object-fit-slide">
				          <img src="<?php bloginfo('template_directory') ?>/img/Bild3-min-700.jpg" >
                </div>
                <div class="swiper-slide object-fit-slide">
				          <img src="<?php bloginfo('template_directory') ?>/img/Bild4-min-700.jpg">
                </div>
                <!-- ... (use in case of pagination) -->
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
    
            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev"></div> -->
            <!-- <div class="swiper-button-next"></div> -->
    
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        <!-- Main slider (end) -->
    
        <!-- Content (start) -->
        <div class="lg:mt-10 mt-10 lg:mb-24 mb-0 lg:p-10 p-2">
            <h2 class="px-8 text-left font-size-24 leading-relaxed " style="font-size:25px; color:rgba(0,0,0,.8); line-height: 1.3em;">
				
            <?php 
                if(ICL_LANGUAGE_CODE == 'en'){ 
                    echo 'Himedi meets doctors of <strong>first-class</strong> hospitals in Korea on behalf of you';
                } 
                elseif(ICL_LANGUAGE_CODE == 'ru') { 
                    echo 'Himedi (Хаймеди) встретится от <strong>вашего имени</strong> с врачами первоклассных больниц Кореи';
                } 
                elseif(ICL_LANGUAGE_CODE == 'mn') { 
                    echo 'Himedi таны өмнөөс Солонгосын нэгдүгээр зэрэглэлийн эмнэлэгүүдийн эмч нартай уулзах болно';
                } 
                elseif(ICL_LANGUAGE_CODE == 'ar') { 
                    echo ' ستلتقي بأطباء مستشفيات من الدرجة الأولى في كوريا نيابة عنك';
                }
            ?>

            </h2>
            <p class="pt-4 px-8 text-gray-700 text-left font-size-24 leading-none" style="font-size:20px; font-weight:400; line-height:1.2;color:rgba(0,0,0,.5)!important">
              <?php 
                  if(ICL_LANGUAGE_CODE == 'en'){ 
                      echo 'We lead you to world-best medical staff<br class="br-hidden"> and best remedies';
                  } 
                  elseif(ICL_LANGUAGE_CODE == 'ru') { 
                      echo 'Вы найдете лучший медицинский персонал и лучшие методы лечения в мире';
                  } 
                  elseif(ICL_LANGUAGE_CODE == 'mn') { 
                      echo 'Бид таныг дэлхийн шилдэг эмнэлэгийн ажилчид болон хамгийн сайн эмчлэх арга замруу чиглүүлнэ';
                  } 
                  elseif(ICL_LANGUAGE_CODE == 'ar') { 
                      echo 'سنقودك إلى أفضل طاقم طبي على مستوى العالم وأفضل العلاجات';
                  }
              ?>

              
            </p>
        </div>
        <!-- Content (end) -->
    
        <!-- Arrow icon (start) -->
        <a href="#section2">
            <img class="mx-auto lg:pt-0 pt-10 arrowAnimate" src="<?php bloginfo('template_directory') ?>/img/arrow.png" alt="arrow icon">
        </a>
        <!-- Arrow icon (end) -->
    
    </section>
    <!-- Section 1 (end) -->
	<!-- Section1-1 (start) -->
	  <!-- Content (start) -->
	  <div class="mt-40 w-full" id="section2">
	    <img src="<?php bloginfo('template_directory') ?>/img/section1-1-min-700.jpg" alt="">
	  </div>
	  <div class="lg:mt-10 mt-10 lg:mb-24 mb-0 lg:p-10 p-2">
	  	<h2 class="px-8 font-size-24 text-left leading-relaxed " style="font-size:25px; font-weight:400; color:#000; line-height: 1.3em; font-family:arial;">
        <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'Just send us your medical records. You do not need to come to Korea';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Просто отправьте нам свою медицинскую карту. Вам не обязательно ехать в Корею';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Бидэнд зөвхөн өвчтөний түүх, эмнэлгийн бичгүүдээ л явуулна уу. Та Солонгост ирэх шаардлагагүй';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'فقط أرسل لنا سجلاتك الطبية. لست بحاجة للمجيء إلى كوريا';
          }
        ?>
				
        </h2>
            <p class="pt-4 px-8 text-gray-700 text-left font-size-24 leading-none" style="font-size: 20px; font-family: Noto Sans Light, sans-serif!important; line-height: 1.2; color: rgba(0,0,0,.5)!important; word-break: break-all;">
            <?php 
              if(ICL_LANGUAGE_CODE == 'en'){ 
                  echo 'Send your relevant medical records such as treatment history, image, etc';
              } 
              elseif(ICL_LANGUAGE_CODE == 'ru') { 
                  echo 'Отправьте соответствующие медицинские записи, такие как история лечения, изображение, видео и т.д';
              } 
              elseif(ICL_LANGUAGE_CODE == 'mn') { 
                  echo 'Хийлгэсэн эмчилгээний түүх, карт зураг гэх мэт мэдээлэлээ явуулна уу';
              } 
              elseif(ICL_LANGUAGE_CODE == 'ar') { 
                  echo 'أرسل سجلاتك الطبية ذات الصلة مثل تاريخ العلاج والأشعة وما إلى ذلك';
              }
            ?>
              
            </p>
        </div>
		<!-- Content (end) -->
		
		<!-- Arrow icon (start) section3 -->
        <a href="#graphs">
          <img class="mx-auto lg:pt-0 pt-40 pb-40 arrowAnimate" src="<?php bloginfo('template_directory') ?>/img/arrow.png" alt="arrow icon">
        </a>
		<!-- Arrow icon (end) -->
		
	<!-- Section1-1 (end) -->
    <!-- Section 2 (start) -->
    <section id="graphs" class="mt-10 w-full text-center overflow-hidden">
  <!-- Chart By Harsh -->

  <div class="w-full bg-gray-100 text-justify">
		<div class="medi_graph flex flex-col justify-center flex-wrap" style="max-height: 450px;">
			<p class="pt-4 px-8 text-gray-700 text-center font-noto-regular leading-none w-full" style="font-size:20px">
        <?php 
              if(ICL_LANGUAGE_CODE == 'en'){ 
                  echo 'The survival rate of patients with one of the 5 major cancers compared <br class="lg:hidden block">to that in the U.S';
              } 
              elseif(ICL_LANGUAGE_CODE == 'ru') { 
                  echo 'Сравнение показателей выживаемости пяти основных типов рака по сравнению с США';
              } 
              elseif(ICL_LANGUAGE_CODE == 'mn') { 
                  echo 'Хамгийн түгээмэл тохиолдох 5-н төрлийн хавдрын үед амьд үлдэх төвшиний АНУ-тай харьцуулсан харьцуулалт';
              } 
              elseif(ICL_LANGUAGE_CODE == 'ar') { 
                  echo 'معدل البقاء على قيد الحياة للمرضى الذين يعانون من أحد أنواع السرطان الخمسة الرئيسية مقارنةً بمثيله في الولايات المتحدة';
              }
          ?>

			</p>
      
      <div class="flex-1 flex justify-center flex-wrap" style="max-width: 635px;">
            <div class="w-screen">
                <canvas id="chart_1" width="635px" height="350"></canvas>
            </div>
      </div>

		</div>
		<div class="medi_graph flex flex-col justify-center  flex-wrap hidden" style="max-height: 450px;">
			<p class="pt-4 px-8 text-gray-700 text-center font-noto-regular leading-none w-full" style="font-size:20px;">
        <?php 
              if(ICL_LANGUAGE_CODE == 'en'){ 
                  echo 'No. of hospitals per a thousand people among OECD countries';
              } 
              elseif(ICL_LANGUAGE_CODE == 'ru') { 
                  echo 'Количество больниц на тысячу человек среди стран ОЭСР';
              } 
              elseif(ICL_LANGUAGE_CODE == 'mn') { 
                  echo 'OECD орнуудын 1000 хүн амд ноогдох эмнэлэгүүдийн тоо';
              } 
              elseif(ICL_LANGUAGE_CODE == 'ar') { 
                  echo 'عدد المستشفيات لكل ألف شخص بين دول منظمة التعاون الاقتصادي والتنمية';
              }
        ?>
				
			</p>
      
      <div class="flex-1 flex justify-center flex-wrap" style="max-width: 635px;">
            <div class="w-screen my-10">
                <canvas id="chart_2" width="635px" height="350"></canvas>
            </div>
        </div>

		</div>
		<div class="medi_graph flex flex-col justify-center  flex-wrap hidden" style="max-height: 450px;">
			<p class="pt-4 px-2  text-gray-700 text-center font-noto-regular leading-none w-full" style="font-size:20px;">
        <?php 
              if(ICL_LANGUAGE_CODE == 'en'){ 
                  echo 'Medical expenses for serious illnesses in<br> <b>Germany VS Korea</b>';
              } 
              elseif(ICL_LANGUAGE_CODE == 'ru') { 
                  echo 'Сравнение цен на лечение тяжелых заболеваний в Кореи и Германии';
              } 
              elseif(ICL_LANGUAGE_CODE == 'mn') { 
                  echo 'Герман болон Солонгосийн хүнд өвчиний эмчилгээний зардалын харьцуулалт';
              } 
              elseif(ICL_LANGUAGE_CODE == 'ar') { 
                  echo 'النفقات الطبية للأمراض الخطيرة في ألمانيا مقارنة بكوريا';
              }
        ?>

			</p>

      <div id="chart_3_cont" class="flex-auto flex flex-wrap mx-10 w-full" style="max-width: 635px;">
            <div class="w-full flex flex-row p-4">
                <div class="flex-auto w-1/2" >
                    <!-- <p class="left-0 top-0 text-gray-500">$1M</p> -->
                    <canvas id="chart_3_1" width="300" height="350"></canvas>
                </div>
                <div class="flex-auto  w-1/2 " >
                    <!-- <p class="left-0 top-0 text-gray-500">$1M</p> -->
                    <canvas id="chart_3_2" width="300" height="350"></canvas>
                </div>
            </div>
        </div>

		</div>
	</div>

    <div class="lg:pt-32 pt-10 flex justify-between px-10 lg:px-24 py-10 graph-button-container">
		<button onclick="showGraph(1)"  class="grph_btn border-2 border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5 mr-3 text-lg leading-tight" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">
            <?php 
                    if(ICL_LANGUAGE_CODE == 'en'){ 
                        echo '5 major cancers compared to that in the U.S.';
                    } 
                    elseif(ICL_LANGUAGE_CODE == 'ru') { 
                        echo 'пяти основных типах рака по сравнению с США.';
                    } 
                    elseif(ICL_LANGUAGE_CODE == 'mn') { 
                        echo '5-н төрлийн хавдрын үед амьд үлдэх төвшиний АНУ-тай харьцуулсан харьцуулалт';
                    } 
                    elseif(ICL_LANGUAGE_CODE == 'ar') { 
                        echo 'معدل البقاء على قيد الحياة للمرضى الذين يعانون من أحد أنواع السرطان الخمسة الرئيسية مقارنةً بمثيله في الولايات المتحدة';
                    }
            ?>
            
        </button>
		<button onclick="showGraph(2)"  class="grph_btn border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5 text-lg mr-3 leading-tight" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">
            <?php 
                    if(ICL_LANGUAGE_CODE == 'en'){ 
                        echo 'No. of hospitals per a thousand people among OECD countries';
                    } 
                    elseif(ICL_LANGUAGE_CODE == 'ru') { 
                        echo 'Количество больниц на тысячу человек среди стран ОЭСР';
                    } 
                    elseif(ICL_LANGUAGE_CODE == 'mn') { 
                        echo 'OECD орнуудын 1000 хүн амд ноогдох эмнэлэгүүдийн тоо';
                    } 
                    elseif(ICL_LANGUAGE_CODE == 'ar') { 
                        echo 'عدد المستشفيات لكل ألف شخص بين دول منظمة التعاون الاقتصادي والتنمية';
                    }
            ?>
            
        </button>
		<button onclick="showGraph(3)"  class="grph_btn border-dashed border-blue-500 shadow-md focus:outline-none outline-none rounded-full p-5 text-lg leading-tight" style="width: 10em; height:10em; text-shadow: 0px 2px 5px #777">
         <?php 
            if(ICL_LANGUAGE_CODE == 'en'){ 
                echo 'Korea’s medical service boasts a world-class level.';
            } 
            elseif(ICL_LANGUAGE_CODE == 'ru') { 
                echo 'Уровень медицинского обслуживания в Корее самый высокий в мире.';
            } 
            elseif(ICL_LANGUAGE_CODE == 'mn') { 
                echo 'Солонгосын эмнэлэгийн үйлчилгээ нь дэлхийн түвшинд хүрсэн';
            } 
            elseif(ICL_LANGUAGE_CODE == 'ar') { 
                echo 'تتميز الخدمة الطبية في كوريا بمستوى عالمي.';
            }
            ?>
        </button>
	</div>
   
  <!-- Chart Text (start) -->
  <div class="lg:mt-10 mt-10 lg:mb-24 mb-0 lg:p-10 p-2 px-12">
        <h2 class="title-1" >
          <?php 
                if(ICL_LANGUAGE_CODE == 'en'){ 
                    echo 'Korea’s medical service boasts a world-class level';
                } 
                elseif(ICL_LANGUAGE_CODE == 'ru') { 
                    echo 'Уровень медицинского обслуживания в Корее самый высокий в мире';
                } 
                elseif(ICL_LANGUAGE_CODE == 'mn') { 
                    echo 'Солонгосын эмнэлэгийн үйлчилгээ нь дэлхийн түвшинд хүрсэн';
                } 
                elseif(ICL_LANGUAGE_CODE == 'ar') { 
                    echo 'تتميز الخدمة الطبية في كوريا بمستوى عالمي';
                }
          ?>
        
        </h2>
        <p class="pt-4 sub-title-1" >
          <?php 
                if(ICL_LANGUAGE_CODE == 'en'){ 
                    echo 'Every aspect of it—including technology, skills, infrastructures, <br class="lg:hidden block">and prices—is all highly credible';
                } 
                elseif(ICL_LANGUAGE_CODE == 'ru') { 
                    echo 'Уровень медицинского обслуживания в Корее самый высокий в мире';
                } 
                elseif(ICL_LANGUAGE_CODE == 'mn') { 
                    echo 'Солонгосын эмнэлэгийн үйлчилгээ нь дэлхийн түвшинд хүрсэн';
                } 
                elseif(ICL_LANGUAGE_CODE == 'ar') { 
                    echo 'تتميز الخدمة الطبية في كوريا بمستوى عالمي.';
                }
          ?>
        
        </p>
    </div>

	<!-- Chart Text (end) -->

  <!-- Arrow icon (start) -->
  <a href="#section4" class="fourth-section">
    <img class="mx-auto lg:pt-10 pt-32 pb-30 lg:mt-20 mb-40 lg:mb-40 arrowAnimate" src="<?php bloginfo('template_directory') ?>/img/arrow.png" alt="arrow icon">
  </a>
	<!-- Arrow icon (end) -->	
  
</section>

<!-- Section 3 (start) -->
<section class="text-center" id="section4">
	<!-- Content (start) -->
	<div class="relative">
		<div class="bg-black w-full h-full absolute inset-0 opacity-50"></div>
		<img src="<?php bloginfo('template_directory') ?>/img/endCont-min.jpg">
		<p class="absolute inset-0 h-full text-white text-5xl px-5 contnet-addtional" style="font-size:24px; line-height:40px; font-family: Arial, Verdana, sans-serif!important; font-weight:400;">
      <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'In addition, <b class="font-extrabold">Himedi</b> has cared for <b class="font-extrabold">4,239</b> patients while addressing <b class="font-extrabold">10,290</b> inquiries in consultation with Korea’s best medical staff';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Кроме того, Himedi (Хаймеди) оказала помощь 4239 пациентам, рассмотрев 10 290 запросов проконсультировавшись с лучшими профессионалами Кореи';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Нэмж хэлэхэд, Himedi нь Солонгосын шилдэг эмнэлэгийн ажилтануудтай хамтран 10290 хүсэлт хүлээн авч 4239 өвчтөнд үйлчилгээ үзүүлсэн';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'بالإضافة إلى ذلك ، قام هاي ميدي برعاية 4239 مريضًا أثناء الرد على 10290 استفسارًا بالتعاون مع أفضل الطواقم الطبية الكورية.';
          }
        ?>

			
		</p>
	</div>
	<p class="lg:pt-24 pt-10 px-5 sub-title-1-c">
      <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'You can reserve six world-class hospitals <br class="desktop_br"> and other great hospitals.<br>(World\'s best 100 hospitals, April 2020 Newsweek)';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Вы можете записаться на прием в шесть больниц мирового класса и другие крупные больницы. (100 лучших больниц мира, Newsweek (Нюс Вик) за апрель 2020 г)';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Олон улсын хэмжээнд хүлээн зөвшөөрөгддөг зургаан том эмнэлэг болон бусад томоохон эмнэлгүүдэд цаг авах боломжтой ( Дэлхийн шилдэг 100 эмнэлэг, 2020 оны 4-р сарын Newsweek сэтгүүл)';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'يمكنك حجز ستة مستشفيات عالمية المستوى ومستشفيات أخرى جيدة للغاية. (أفضل 100 مستشفى في العالم ، أبريل 2020 نيوزويك)';
          }
      ?>
		
	</p>
	<!-- Content (end) -->

	<!-- Sponsor (start) -->
	<div class="w-full pt-10 lg:px-32 px-10 lg:py-32 py-10">
		<div class="flex justify-between items-center content-center pb-5" style="height: 63.8px;">
			<img class="inline-block" src="<?php bloginfo('template_directory') ?>/img/log1.png" width="73px" alt="asan">
			<img class="inline-block" src="<?php bloginfo('template_directory') ?>/img/log2.png" width="73px" alt="samsung">
			<img class="inline-block" src="<?php bloginfo('template_directory') ?>/img/log6.png" width="63.8px" alt="yonsel">

		</div>
		<div class="flex justify-between items-center content-center pt-5" style="height: 63.8px;">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log4.png" width="73px" alt="medicine">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log5.png" width="73px" alt="catholic">
			<img class="inline" src="<?php bloginfo('template_directory') ?>/img/log3.png" width="73px" alt="snuh">
		</div>
	</div>
	<!-- Sponsor (end) -->

	<!-- Button (start) -->
  <div class="flex justify-center">
    <button class="bg-brand text-white lg:w-1/2 w-12/12 mx-auto px-5 py-5 lg:px-0 mt-10 text-xs hover:bg-blue-500" style="border-radius:5px; border-color: #2681f3; font-size:16px; padding:10px 40px;">
      <a href="/interview" style="color:white!important;" class="">Check Success Story</a>
    </button>
  </div>

  

	<!-- Button (end) -->
</section>
<!-- Section 3 (end) -->

<!-- Section 3-1 (start) -->
<section class="text-center mt-40 pt-20" style="background-color:#f2f3f5;">
	<!-- Content (start) -->
  <h2 class="text-center px-6 font-size-24 leading-relaxed " style="font-size:24px; color:rgba(0,0,0,.8); line-height: 1.5em;">
    <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'Get a personalized consultation suitable to you';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Свяжитесь с нами по удобному для вас способу ';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Өөрт тань тохирсон аргаар бидэнтэй холбогдоорой';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'احصل على استشارة شخصية مناسبة لك';
          }
      ?>
		
	</h2>	
	<button class="bg-brand px-3 py-3 text-white w-48 mx-auto mt-10 mb-10" style="border-radius: 50%; width: 47px; font-size: 18px;">
		01
	</button>
	<div class="flex px-8 text-center">
		<div class="h-32 w-32 flex itmes-center remove_icon justify-center items-start mt-3" style="color:blue; margin-right:10px;">
        <img src="<?php bloginfo('template_directory') ?>/img/hospital-user-light.svg" >
		</div>
        <div class="mb-5 w-full text-center">
            <div class="text-black mb-5 mt-4 font-bold text-center px-3 font-size-24 leading-none">
                <?php 
                    if(ICL_LANGUAGE_CODE == 'en'){ 
                        echo 'Consulting directly with a doctor on behalf of you';
                    } 
                    elseif(ICL_LANGUAGE_CODE == 'ru') { 
                        echo 'Консультация напрямую с врачом от вашего имени';
                    } 
                    elseif(ICL_LANGUAGE_CODE == 'mn') { 
                        echo 'Таны өмнөөс эмчтэй шууд холбогдох болно';
                    } 
                    elseif(ICL_LANGUAGE_CODE == 'ar') { 
                        echo 'استشارة مباشرة مع طبيب نيابة عنك';
                    }
                ?>
		    </div>
            <div class="text-xl leading-none text-center" style="">
                <?php 
                    if(ICL_LANGUAGE_CODE == 'en'){ 
                        echo '*Available only for patients already with medical records';
                    } 
                    elseif(ICL_LANGUAGE_CODE == 'ru') { 
                        echo 'Доступно только для пациентов, которые повторно записаны на прием';
                    } 
                    elseif(ICL_LANGUAGE_CODE == 'mn') { 
                        echo 'Зөвхөн давтан үзүүлэх гэж байгаа өвчтөнд хамрагдана';
                    } 
                    elseif(ICL_LANGUAGE_CODE == 'ar') { 
                        echo 'متاح فقط للمرضى الذين لديهم بالفعل سجلات طبية';
                    }
                ?>
            </div>
        </div>
	</div>

	<button class="bg-brand px-3 py-3 text-white w-48 mx-auto mt-10 mb-10" style="border-radius: 50%; width: 47px; font-size: 18px;">
		02
	</button>
	<div class="flex px-8">
		<div class="lg:h-32 h-20 lg:w-32 w-20 flex itmes-center remove_icon justify-center items-start mt-3" style="color:blue; margin-right:20px;">
		<img src="<?php bloginfo('template_directory') ?>/img/user-md-chat-light.svg" >
		</div>
    <div class="mb-5 w-full">
	<div class="text-black mb-5 mt-4 font-bold text-center px-3 font-size-24 leading-none">
    <?php 
            if(ICL_LANGUAGE_CODE == 'en'){ 
                echo 'Telemedicine consultation';
            } 
            elseif(ICL_LANGUAGE_CODE == 'ru') { 
                echo 'Видео консультации';
            } 
            elseif(ICL_LANGUAGE_CODE == 'mn') { 
                echo 'Видео зөвлөгөө';
            } 
            elseif(ICL_LANGUAGE_CODE == 'ar') { 
                echo 'استشارة التطبيب عن بعد';
            }
      ?>
		  
		</div>
		<div class="text-xl leading-none text-center" style="">
      <?php 
            if(ICL_LANGUAGE_CODE == 'en'){ 
                echo '*Available for new patients as well';
            } 
            elseif(ICL_LANGUAGE_CODE == 'ru') { 
                echo 'Доступно также для новых пациентов';
            } 
            elseif(ICL_LANGUAGE_CODE == 'mn') { 
                echo 'Шинэ өвчтөнүүдэд боломжтой';
            } 
            elseif(ICL_LANGUAGE_CODE == 'ar') { 
                echo 'متاح للمرضى الجدد أيضًا';
            }
      ?>
			  
		</div>
    </div>
	</div>

	<button class="bg-brand px-3 py-3 text-white w-48 mx-auto mt-10 mb-10" style="border-radius: 50%; width: 47px; font-size: 18px;">
		03
	</button>
	<div class="flex px-8">
    <div class="lg:h-32 h-20 lg:w-32 w-20 flex itmes-center remove_icon justify-center items-start mt-3" style="color:blue; margin-right:20px;">
      <img src="<?php bloginfo('template_directory') ?>/img/notes-medical-light.svg" >
    </div>
    <div class="mb-5 w-full">
		<div class="text-black mb-5 mt-4 font-bold text-center px-3 font-size-24 leading-none">
      <?php 
            if(ICL_LANGUAGE_CODE == 'en'){ 
                echo 'Request for the 2nd opinion';
            } 
            elseif(ICL_LANGUAGE_CODE == 'ru') { 
                echo 'Запрос второго мнения';
            } 
            elseif(ICL_LANGUAGE_CODE == 'mn') { 
                echo 'Хоердогч талын санал авах';
            } 
            elseif(ICL_LANGUAGE_CODE == 'ar') { 
                echo 'طلب الرأي الثاني';
            }
      ?>

		</div>
		<div class="text-xl leading-none text-center" style="">
      <?php 
              if(ICL_LANGUAGE_CODE == 'en'){ 
                  echo '*Available for new patients as well';
              } 
              elseif(ICL_LANGUAGE_CODE == 'ru') { 
                  echo 'Доступно также для новых пациентов';
              } 
              elseif(ICL_LANGUAGE_CODE == 'mn') { 
                  echo 'Шинэ өвчтөнүүдэд боломжтой';
              } 
              elseif(ICL_LANGUAGE_CODE == 'ar') { 
                  echo 'متاح للمرضى الجدد أيضًا';
              }
        ?>

		</div>
    </div>
	</div>
  <!-- Button (start) -->
  <div class="flex justify-center">
  
    <!-- <button class="bg-white px-5 py-5 text-blue-500 w-56 mx-auto mt-10 mb-24" style="border-radius:10px; font-size:18px"> -->
	<a href="/inquiry" class="w-full">
    <button class="bg-white text-blue-500 text-white text-white lg:w-2/3 w-7/12 mx-auto px-5 py-5 mb-20 lg:px-0 mt-40 text-xs hover:bg-blue-500 hover:text-white" style="border-radius:10px; font-size:18px; font-family:'Noto Sans', sans-serif!important">
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
	<!-- Button (end) -->

	<!-- Content (end) -->
</section>
<!-- Section 3-1 (end) -->
<!-- Section 3-2 (start) -->
<div class="mt-20 px-5">
  <div class="border-gray-700 border w-16 h-16 rounded-full py-2 px-2 flex items-center justify-center text-gray-700" style="margin:0 auto">
<svg class="w-8 h-8" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-nurse" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M319.41,318,224,413.39,128.59,318C57.09,321.09,0,379.59,0,451.8A58.23,58.23,0,0,0,58.2,510H389.8A58.23,58.23,0,0,0,448,451.8C448,379.59,390.91,321.09,319.41,318ZM208,478H58.2A26.28,26.28,0,0,1,32,451.8c0-47.46,38-92.44,84.73-100.41L208,442.66Zm181.8,0H240V442.64l91.25-91.25C378,359.36,416,404.34,416,451.8A26.28,26.28,0,0,1,389.8,478ZM224,302A128,128,0,0,0,352,174V63.82a32,32,0,0,0-20.76-30L246.47,2.07a64.06,64.06,0,0,0-44.94,0L116.76,33.86A32,32,0,0,0,96,63.82V174A128,128,0,0,0,224,302ZM128,63.82,212.77,32a32,32,0,0,1,22.47,0L320,63.82V142H128ZM320,174a96,96,0,0,1-192,0ZM259,72.67H237.33V51a5,5,0,0,0-5-5H215.67a5,5,0,0,0-5,5V72.67H189a5,5,0,0,0-5,5V94.33a5,5,0,0,0,5,5h21.67V121a5,5,0,0,0,5,5h16.66a5,5,0,0,0,5-5V99.33H259a5,5,0,0,0,5-5V77.67A5,5,0,0,0,259,72.67Z"></path></svg>
</div>
  <h2 class="text-center px-6 font-size-24 leading-relaxed " style="font-size: 22px; color: rgba(0,0,0,.8)!important; font-family: Noto Sans Regular, sans-serif!important; text-align: center!important; line-height: 1.5em;">
    <?php 
            if(ICL_LANGUAGE_CODE == 'en'){ 
                echo 'Himedi recommends remedies and best doctors for you';
            } 
            elseif(ICL_LANGUAGE_CODE == 'ru') { 
                echo 'Himedi (Хаймеди) предложит  вам лучшие методы лечения и лучших врачей';
            } 
            elseif(ICL_LANGUAGE_CODE == 'mn') { 
                echo 'Himedi танд хамгийн сайн эмчилгээ болон эмч нарыг санал болгож байна';
            } 
            elseif(ICL_LANGUAGE_CODE == 'ar') { 
                echo 'هاي ميدي توصي بأفضل العلاجات وأفضل الأطباء لك.';
            }
      ?>
        
  </div>
  <div class="text-bold mt-20 font-bold text-left px-6 font-size-24 leading-relaxed" style="color:#2681F3; margin-top:12px;">
    <h2>STEP 01</h2>
  </div>
  <div class="text-left px-6 font-size-24 leading-none" style="line-height:30px; font-size:24px; font-family: font-family: Noto Sans Regular, sans-serif!important; ">
    <?php 
            if(ICL_LANGUAGE_CODE == 'en'){ 
                echo 'Let <strong style="font-family: \'Noto Sans\', sans-serif!important;">Himedi</strong> know your disease name and questions you want to ask doctors';
            } 
            elseif(ICL_LANGUAGE_CODE == 'ru') { 
                echo 'Сообщите Himedi (Хаймеди) название вашей болезни и вопросы, которые вы хотите задать врачам';
            } 
            elseif(ICL_LANGUAGE_CODE == 'mn') { 
                echo 'Сообщите Himedi (Хаймеди) название вашей болезни и вопросы, которые вы хотите задать врачам';
            } 
            elseif(ICL_LANGUAGE_CODE == 'ar') { 
                echo 'دع هاي ميدي تعرف اسم مرضك والأسئلة التي تريد طرحها على الأطباء.';
            }
      ?>
    
  </div>
  <p class="px-6 pt-0 leading-none mt-3" style="font-size: 14px;
    font-family: Noto Sans Light, sans-serif!important; line-height: 1.2; color: rgba(0,0,0,.5)!important;">
      <?php 
        if(ICL_LANGUAGE_CODE == 'en'){ 
            echo 'Based on the information you share and consultations, Himedi will recommend best-suitable remedies and doctors for you';
        } 
        elseif(ICL_LANGUAGE_CODE == 'ru') { 
            echo 'На основе предоставленной вами информации и консультаций, Himedi (Хаймеди) порекомендует вам наиболее подходящие методы лечения и врачей';
        } 
        elseif(ICL_LANGUAGE_CODE == 'mn') { 
            echo 'Таны өгсөн мэдээлэл болон зөвлөгөөн дээр үндэслэн ,Himedi танд тохирсон эмчилгээ болон эмч нарыг санал болгоно';
        } 
        elseif(ICL_LANGUAGE_CODE == 'ar') { 
            echo 'بناءً على المعلومات التي تشاركها والاستشارات ، هاي ميدي تقوم بالتوصية بأفضل العلاجات والأطباء المناسبين لك';
        }
      ?>
    
  </div>
  <!-- <div style="height:500px"> #safari issue
    <div class="relative content-check-hospital">
      <img class="mx-auto mb-24 mt-5 absolute" src="<?php bloginfo('template_directory') ?>/img/section3-2-phone.png" width="346px" height="346px" alt="">
      <img class="absolute" src="<?php bloginfo('template_directory') ?>/img/inquiry.png" style="height:240px;top:90px;left:108px">
    </div>
  </div> -->
  <div style="height:400px">
    <div class="relative ">
      <img class="mx-auto mb-24 mt-5" src="<?php bloginfo('template_directory') ?>/img/himedi-inquiry-screen1-min.png" width="346px" height="346px" alt="">      
    </div>
  </div>

  <!-- Button (start) -->
  <div class="flex justify-center">
    <button class="bg-brand px-5 py-5 text-white w-7/12 lg:w-4/12 mx-auto mt-10 mb-20 font-size-24 hover:bg-blue-500" style="border-radius:10px; font-size:16px; padding:10px 40px;">
      <a href="/affiliate" style="color:white!important;" class="">
        <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'Check hospitals';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Поиск больниц';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Эмнэлэгүүд хайх';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'تحقق من المستشفيات';
          }
        ?>
      </a>
    </button>
  </div>
	<!-- Button (end) -->
	<div class="text-bold mt-20 font-bold text-left px-6 font-size-24 leading-relaxed" style="color:#2681F3">
    <h2>STEP 02</h2>
  </div>
  <div class="text-left px-6 font-size-24 leading-none" style="line-height:30px; font-size:24px; font-family: 'Noto Sans'!important;">
    <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'If you would like to receive the <strong style="font-family: \'Noto Sans\', sans-serif!important;">second opinion</strong> or deputy consultation from the recommended doctors, please share more detailed <strong style="font-family: \'Noto Sans\', sans-serif!important;">medical records</strong>';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Если вы хотите получить второе мнение или консультацию заместителя от рекомендованных врачей, поделитесь более подробными медицинскими записями';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Хэрэв та санал болгосон эмч нараас төлөөлүүлэн зөвлөгөө авах эсвэл 2-догч санал авахыг хүсвэл бидэнд өөрийн дэлгэрэнгүй эмнэлэгийн түүхээ явуулна уу';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'إذا كنت ترغب في الحصول على رأي ثان أو استشارة نائب من الأطباء الموصى بهم ، فيرجى مشاركة سجلات طبية أكثر تفصيلاً.';
          }
      ?>
  
  </div>
  <!-- Main slider (start) -->
  <div class="swiper-container content-step2" style="">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper mt-2">
          <!-- Slides -->
          <div class="swiper-slide object-fit-slide">
            <img src="<?php bloginfo('template_directory') ?>/img/section3-2-1-min-700.jpg" alt="">
          </div>
          <div class="swiper-slide object-fit-slide">
            <img src="<?php bloginfo('template_directory') ?>/img/section3-2-2-min-700.jpg" alt="" >
          </div>
          <div class="swiper-slide object-fit-slide">
            <img src="<?php bloginfo('template_directory') ?>/img/section3-2-3-min-700.jpg" alt="">
          </div>
          <!-- ... (use in case of pagination) -->
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <!-- <div class="swiper-button-prev"></div> -->
      <!-- <div class="swiper-button-next"></div> -->

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
  </div>
  <!-- Main slider (end) -->
  <div class="text-bold mt-20 font-bold text-left px-6 font-size-24 leading-relaxed" style="color:#2681F3">
    <h2>STEP 03</h2>
  </div>
  <div class="text-left px-6 font-size-24 leading-none" style="line-height:30px; font-size:24px;">
      <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'Based on the shared materials, Himedi proposes a plan for treatment available in Korea';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'На основании предоставленных материалов Himedi (Хаймеди) предлагает план лечения, доступный в Корее';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Таны өгсөн мэдээлэл дээр үндэслэн Himedi танд Солонгосд хийгдэх эмчилгээний төлөвлөгөөг хүргэх болно';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'بناءً على المواد التي تقوم بمشاركتها، هاي ميدي تقوم بوضع خطة العلاج المتاح في كوريا';
          }
      ?>
    
  </div>
  <div class="mt-12">
    <img src="<?php bloginfo('template_directory') ?>/img/section3-3-1.jpg" width="632px" height="348px" alt="">
  </div>
  <!-- Button (start) -->
  <div class="flex justify-center mt-24">
	<!-- <button class="bg-brand px-5 py-5 text-white mx-auto mt-10" style="border-radius:10px; font-size:18px"> -->
	<button class="bg-brand px-5 py-5 text-white w-9/12 lg:w-6/12 mx-auto mt-10 mb-20 font-size-24 hover:bg-blue-500" style="border-radius:10px; font-size:16px; padding:13px 40px;">
      <a href="/success-cases" style="color:white">
        <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'Check medical diagnoses';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Проверить диагноз';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Оношоо шалгана уу';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'تحقق من التشخيصات الطبية';
          }
         ?>
      </a>
    </button>
  </div>
	  <!-- Button (end) -->
  </div>
  <div class="mt-20">
    <h2 class="px-8 text-left font-size-24 leading-relaxed " style="font-size:24px; color:rgba(0,0,0,.8); line-height: 1.5em;">
      <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'Feel free to ask us anything. <br><strong>We will reply</strong><br> kindly and promptly.';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Не стесняйтесь спрашивать нас о чем угодно. Мы ответим быстро и точно .';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Асуух асуулт байвал бидэнтэй холбогдоно уу. Бид таны асуултанд хариулахдаа таатай байх болно';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'لا تتردد في أن تطلب منا أي شيء. نقوم بالرد بسرعة.';
          }
         ?>
      
    </div>
    <p class="pt-4 px-8 text-gray-700 text-left font-size-24 leading-none" style="font-size:16px; line-height:26px; font-weight:400;">
      <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'Do you have difficulty in inquiring? <br>We give sincere answers to any question for patients’ recovery';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Трудно с нами связаться? Искренне ответим на любые вопросы о выздоровлении пациента';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Асуулт асуухад хүндрэлтэй байдаг уу? Бид өвчтөнийг түргэн эдгээхийн тулд  асуултад чин сэтгэлээсээ хариулах болно';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'هل تجد صعوبة في الاستفسار؟ لدينا إجابات صادقة و دقيقة على أي سؤال من أجل تعافي المرضى';
          }
         ?>
     
    </div>
    <div class="text-bold mt-20 font-bold text-left px-6 font-size-24 leading-relaxed" style="color:#2681F3">
      <a href='/inquiry'>
        <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'Start consultation &#62;';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Начать консультацию &#62;';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Зөвлөгөө авч эхлэх &#62;';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'ابدأ الاستشارة &#62;';
          }
         ?>
      </a>
    </div>
    <div>
      <img class="mx-auto mb-24 mt-10" src="<?php bloginfo('template_directory') ?>/img/himedi-whatsapp1-min.png" width="346px" height="346px" alt="himedi-whatsapp">
    </div>
  </div>
  </div>
  <div class="mt-20">
  <h2 class="px-8 font-bold text-left font-size-24 leading-relaxed " style="font-size:24px; color:rgba(0,0,0,.8); line-height: 1.5em;">
    <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'Himedi solves problems that patients and their caregivers face';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Мы решим проблемы пациента и смотряших за пациентом ';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Himedi өвчтөн болон асран хамгаалагчдын асуудлыг шийдвэрлэнэ.';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'هاي ميدي تحل المشاكل التي يواجهها المرضى ومقدمو الرعاية لهم.';
          }
      ?>
  
    </div>
    <p class="pt-4 px-8 text-gray-700 text-left font-size-24 leading-none" style="font-size:16px; line-height:26px; font-weight:400;">
      <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'Himedi dreams of a heartwarming world where everyone enjoys a healthy life. Going beyond the step of medical tourism, Himedi, as a complex medical service platform, presents a new direction for medical service.';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Химеди мечтает о душевном мире, в котором каждый живет здоровой жизнью. Выходя за рамки медицинского туризма, Himedi (Хаймеди), как комплексная платформа медицинских услуг, представляет новое направление для медицинских услуг';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Himedi нь бүгд эрүүл энх амьдрах боломжтой сайхан дэлхийг хүсэж байна. Эмнэлэгийн аялал жуучлалын салбарт алхам урд гишгэж буй Himedi нь цогц эмнэлэгийн үйлчилгээний платформ болох эмнэлэгийн үйлчилгээний шинэ чиглэл санал болгож байна';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'تتطلع هاي ميدي إلى عالم صحي حيث يتمتع الجميع بحياة صحية. ليس فقط السياحة العلاجية ، بل تقدم هاي ميدي، كمنصة خدمات طبية ليست بسيطة ، اتجاهًا جديدًا للخدمات الطبية.';
          }
      ?>
      
    </div>
    <!-- Button (start) -->
    <div class="flex justify-center my-24 mb-32">
      <a href="/about-us">
        <button class="border button-12 px-20 py-5 mx-auto mt-10">
        Himedi Story
        </button>
        </a>
    </div>
	  <!-- Button (end) -->
    
  </div>

  <!-- Section 3-2 (end) -->
  <!--.entry-content-->
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <script>
  function showGraph(n) {
    let texts = document.getElementsByClassName('medi_graph')
    let graphBtns = document.getElementsByClassName('grph_btn')
    for (let index = 0; index < texts.length; index++) {
        const graph = texts[index];
        const graphBtn = graphBtns[index];
        graph.classList.add("hidden");
        graphBtn.classList.remove("border-2");
    }
    texts[n-1].classList.remove("hidden")
    graphBtns[n-1].classList.add("border-2")
  }

  function addDataValuesToBars(dist, myColor) {
    return function (){
      let chartInstance = this.chart;
      let ctx = chartInstance.ctx;
      ctx.font = Chart.helpers.fontString(10, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
      ctx.textAlign = 'center';
      ctx.textBaseline = 'bottom';
      ctx.fillStyle = myColor? myColor: "#fff";
      this.data.datasets.forEach(function (dataset, i) {
          let meta = chartInstance.controller.getDatasetMeta(i);
          meta.data.forEach(function (bar, index) {
              let data = dataset.data[index];
              ctx.fillText(data, bar._model.x, bar._model.y + dist);
          });
      });
    }
  }

  //** Chart One */
  const chartOneCtx = document.getElementById('chart_1').getContext('2d');
  const chartOneDataLabels = ["Gastric Cancer","Colon Cancer","Breast Cancer","Liver Cancer","Cervical Cancer"]
  const chartOneBlueBarValues = [76, 76, 93, 35, 80]
  const chartOneGreyBarValues = [32, 66, 91, 19, 69]

  const chartOneOption = {
      type: 'bar',
      data: {
          labels: chartOneDataLabels,
          datasets: [{
              data: chartOneBlueBarValues,
              backgroundColor: "rgb(66, 135, 245)",
          },
          {
              data: chartOneGreyBarValues,
              backgroundColor: "rgb(158, 158, 158)",
          }
          ]
      },
      options: {
          scales: {
              xAxes: [
                  {
                      categoryPercentage: 0.5,
                      barPercentage: 1.0,   
                      ticks:{
                        display: (screen.width <= 600)? false:true,
                      },
                      gridLines:{
                        drawBorder: true,
                        drawOnChartArea: false,
                      }
                  }
              ],
              yAxes: [{
                  position: 'right',
                  ticks: {
                    display: false,
                      beginAtZero: true
                  },
                  gridLines:{
                      drawBorder: true,
                      display: false,
                  }
              }]
          },
          legend: {
              display: false,
          },
          layout: {
              padding: {
                  left: 0,
                  right: 0,
                  top: 0,
                  bottom: 0
              }
          },
          tooltips: {
              enabled: false
          },
          events: [],
          responsive: true,
          onResize:(myChart, size)=>{
            if(screen.width <= 600){
              myChart.options.scales.xAxes[0].ticks.display = false
            }else{
              myChart.options.scales.xAxes[0].ticks.display = true
            }
          },
          maintainAspectRatio:true,
          animation: {
              onComplete: addDataValuesToBars(20)
          }
      }
  }

  //** Chart Two */
  const chartTwoCtx = document.getElementById('chart_2').getContext('2d');
  const chartTwoDataLabels = ["South Korea", "Japan", "Australia", "Finland", "France", "Germany", "Mexico", "Switzerland", "Czech Republic", "Canada", "Chile", "U.S.", "Hungary"]
  const chartTwoBlueBarValues = [74, 67, 56, 48, 46, 38, 37, 34, 25, 20, 20, 17, 17]

  const getColors = () => {
    let maxValue = Math.max(...chartTwoBlueBarValues)
    let index = chartTwoBlueBarValues.indexOf(maxValue)
    let col = []
    chartTwoBlueBarValues.forEach((elm, i)=>{
        if(i === index){
            col.push("rgb(66, 135, 245)");
        }else{
            col.push("rgb(158, 158, 158)");
        }
    })
    return col;
  }

  const chartTwoOption = {
    type: 'bar',
    data: {
        labels: chartTwoDataLabels,
        datasets: [{
            data: chartTwoBlueBarValues,
            backgroundColor: getColors(),
        }
        ]
    },
    options: {
        scales: {
            xAxes: [
                {
                    categoryPercentage: 0.5,
                    barPercentage: 1.0,
                    ticks:{
                      display: (screen.width <= 600)? false:true,
                      },
                      gridLines:{
                        drawBorder: true,
                        drawOnChartArea: false,
                      }
                }
            ],
            yAxes: [{
                position: 'left',
                ticks: {
                  beginAtZero: true,
                    display: false
                },
                gridLines:{
                  display: false,
                }
            }]
        },
        legend: {
            display: false,
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        tooltips: {
            enabled: false
        },
        events: [],
        responsive: true,
        onResize:(myChart, size)=>{
            if(screen.width <= 600){
              myChart.options.scales.xAxes[0].ticks.display = false
            }else{
              myChart.options.scales.xAxes[0].ticks.display = true
            }
          },
        maintainAspectRatio: true,
        animation: {
            onComplete: addDataValuesToBars(-5,'#000')
        }
    }
  }

  //** Chart Three */
  const chartThreeOneCtx = document.getElementById('chart_3_1').getContext('2d');
  const chartThreeOneLabels = ["Hematologic malignancy"]
  const chartThreeOneBlueBarValuesOne = [5.85]
  const chartThreeOneGreyBarValuesOne = [0.92]

  const chartThreeTwoCtx = document.getElementById('chart_3_2').getContext('2d');
  const chartThreeTwoLabels = ["Brain cancer"]
  const chartThreeTwoBlueBarValuesTwo = [5.0]
  const chartThreeTwoGreyBarValuesTwo = [3.5]

  const chartThreeOneOption = {
    type: 'bar',
    data: {
        labels: chartThreeOneLabels,
        datasets: [{
            data: chartThreeOneBlueBarValuesOne,
            backgroundColor: "rgb(66, 135, 245)",
        },
        {
            data: chartThreeOneGreyBarValuesOne,
            backgroundColor: "rgb(158, 158, 158)",
        }
        ]
    },
    options: {
        scales: {
            xAxes: [
                {
                    categoryPercentage: 0.5,
                    barPercentage: 0.4,
                    gridLines: {
                        drawBorder: true,
                        drawOnChartArea: false
                    },
                    ticks:{
                      display: (screen.width <= 400)?false:true,
                    }
                }
            ],
            yAxes: [{
                position: 'right',
                gridLines: {
                    display: false,
                },
                ticks: {
                    display: false,
                    beginAtZero: true, 
                    max:10
                },
            }]
        },
        legend: {
            display: false,
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        tooltips: {
            enabled: false
        },
        events: [],
        responsive: true,
        onResize:(myChart, size)=>{
            if(screen.width <= 400){
              myChart.options.scales.xAxes[0].ticks.display = false
            }else{
              myChart.options.scales.xAxes[0].ticks.display = true
            }
          },
        maintainAspectRatio: true,
        animation: {
            onComplete: addDataValuesToBars(-5, '#000')
        }
    }
  }

  const chartThreeTwoOption = {
    type: 'bar',
    data: {
        labels: chartThreeTwoLabels,
        datasets: [{
            data: chartThreeTwoBlueBarValuesTwo,
            backgroundColor: "rgb(66, 135, 245)",
        },
        {
            data: chartThreeTwoGreyBarValuesTwo,
            backgroundColor: "rgb(158, 158, 158)",
        }
        ]
    },
    options: {
        scales: {
            xAxes: [
                {
                    categoryPercentage: 0.5,
                    barPercentage: 0.4,
                    gridLines: {
                        drawBorder: true,
                        drawOnChartArea: false
                    },
                    ticks:{
                      display: (screen.width <= 400)?false:true,
                }
              }
            ],
            yAxes: [{
                position: 'right',
                gridLines: {
                    display: false,
                },
                ticks: {
                    display: false,
                    beginAtZero: true,
                    max:10
                },
            }]
        },
        legend: {
            display: false,
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        tooltips: {
            enabled: false
        },
        events: [],
        responsive: true,
        onResize:(myChart, size)=>{
            if(screen.width <= 400){
              myChart.options.scales.xAxes[0].ticks.display = false
            }else{
              myChart.options.scales.xAxes[0].ticks.display = true
            }
          },
        onReady:()=>{
          console.log("runn>");
        },
        maintainAspectRatio: true,
        animation: {
            onComplete: addDataValuesToBars(-5, '#000')
        }
    }
  }

  function isScrolledIntoView(elem){
      var docViewTop = document.getScrollTop();
      var docViewBottom = docViewTop + window.innerHeight;
      var elemTop = elem.offsetTop
      var elemBottom = elemTop + elem.height;
      return ((elemTop >= docViewTop) && (elemBottom <= docViewBottom));
}

document.getScrollTop = function() {
    if (window.pageYOffset != undefined) {
        return pageYOffset;
    } else {
        var sx, sy, d = document,
            r = d.documentElement,
            b = d.body;
        sy = r.scrollTop || b.scrollTop || 0;
        return sy;
    }
}

function isHidden(el) {
    return (el.offsetParent === null)
}

let chartOneElm =document.getElementById('chart_1');
let chartTwoElm =document.getElementById('chart_2');
let chartThreeOneElm =document.getElementById('chart_3_1');
let chartThreeTwoElm =document.getElementById('chart_3_2');

let chartOne 
let chartTwo 
let chartThreeOne
let chartThreeTwo

let flag = true;

document.body.onscroll = (e)=>{
  if(isScrolledIntoView(chartOneElm) && !isHidden(chartOneElm)){
    if(!chartOne) chartOne = new Chart(chartOneCtx, chartOneOption);
  }else{
    chartOne = undefined;
  }

  if(isScrolledIntoView(chartTwoElm) && !isHidden(chartTwoElm)){
    if(!chartTwo) chartTwo = new Chart(chartTwoCtx, chartTwoOption);
  }else{
    chartTwo = undefined;
  }
  
  if(isScrolledIntoView(chartThreeOneElm) && !isHidden(chartThreeOneElm) && isScrolledIntoView(chartThreeTwoElm) && !isHidden(chartThreeTwoElm)){
    if(!chartThreeOne && !chartThreeTwo){
      chartThreeOne = new Chart(chartThreeOneCtx, chartThreeOneOption);
      chartThreeTwo = new Chart(chartThreeTwoCtx, chartThreeTwoOption);
     }
  } else{
    chartThreeOne = undefined;
    chartThreeTwo = undefined;
  }
}

function scrolldiv(elmId) { 
  var elem = document.getElementById(elmId); 
  elem.scrollIntoView(); 
}

  </script>


</article>