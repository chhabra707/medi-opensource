<!-- Section 3-6 (start) -->
<div class="flex-wrap">

	<div class="flex-wrap relative mt-5" style="background-image:url('<?php bloginfo('template_directory') ?>/img/static/p_himedi_1_m.jpg'); background-repeat:no-repeat; background-position:center top; background-size:cover; min-height:360px; margin-top:70px;">
		<!--<img class="w-full" src="<?php //bloginfo('template_directory') ?>/img/static/p_himedi_1_m.jpg" alt="">-->
		<div class="top-0 right-0  flex-wrap items-center justify-center content-center w-full h-full p-6"
			style="background-color: rgba(0, 0, 0, 0.4); padding-top:60px; padding-bottom:140px;">
			<h2 class="font-bold text-center px-6 font-size-24 leading-relaxed text-white" style="font-size:22px">
				<?php 
				if(ICL_LANGUAGE_CODE == 'en'){ 
					echo 'About Himedi';
				} 
				elseif(ICL_LANGUAGE_CODE == 'ru') { 
					echo 'О Хаймеди (Himedi)';
				} 
				elseif(ICL_LANGUAGE_CODE == 'mn') { 
					echo 'Himedi-ийн тухай';
				} 
				elseif(ICL_LANGUAGE_CODE == 'ar') { 
					echo 'عن هاي ميدي';
				}
				?>
				
			</h2>
			<p class="pt-4 px-2 text-gray-700 text-center text-2xl lg:font-size-24 leading-none text-white" style="color:white; line-height:1.2">
				<?php 
					if(ICL_LANGUAGE_CODE == 'en'){ 
						echo 'Himedi makes known excellent medical technology and service of
						Korea and address inconveniences in medical tourism so as to contribute to a happy and healthy life
						of foreign patients who need treatment as well as the development of Korea’s medical tourism
						industry.';
					} 
					elseif(ICL_LANGUAGE_CODE == 'ru') { 
						echo 'Himedi (Хаймеди), информирует о передовых корейских медицинских технологиях и услугах и устраняет неудобства медицинского туризма, чтобы подарить счастливую и здоровую жизнь иностранным пациентам, которые нуждаются в лечении, и вносит свой вклад в развитие индустрии медицинского туризма в Корее';
					} 
					elseif(ICL_LANGUAGE_CODE == 'mn') { 
						echo 'Himedi нь Солонгосын шилдэг эмнэлэгийн технологи,үйлчилгээг сурталчилах мөн эмнэлэгийн аялал жуучлалтай холбоотой хүндрэлийг шийдвэрлэснээр эмчилгээ шаардлагатай гадаад өвчтөнүүдэд эрүүл болон аз жаргалтай амьдрал бэлэглэснээр Солонгосын эмнэлэгийн аялал жуучлалын хөжилд хувь нэмрээ оруулж байна';
					} 
					elseif(ICL_LANGUAGE_CODE == 'ar') { 
						echo 'تُعرف هاي ميدي بالتكنولوجيا الطبية والخدمة الممتازة في كوريا وتقديم المضايقات في السياحة الطبية من أجل المساهمة في حياة سعيدة وصحية للمرضى الأجانب الذين يحتاجون إلى العلاج وكذلك تطويرمجال السياحة الطبية في كوريا.';
					}
				?>
				
			</p>
		</div>
	</div>

	<div class="flex justify-center content-center flex-wrap w-full">
		<img class=" m-6 mt-20" src="<?php bloginfo('template_directory') ?>/img/logo_h.png" alt="" style="width:195px">
	</div>

	<div class="flex flex-wrap m-2 mx-6">
		<p class="pt-4 px-2 text-gray-700 text-left text-3xl leading-none text-white" style="color:#5F5F5F; line-height:1.2" >
			<?php 
					if(ICL_LANGUAGE_CODE == 'en'){ 
						echo '\'Himedi\' is a combined word of \'Hi\' which is a friendly greeting and \'Medical\' which
						means medical science. <br><br> It reflects the intention to provide friendly service that wipes out fear from
						foreign patients coming from overseas';
					} 
					elseif(ICL_LANGUAGE_CODE == 'ru') { 
						echo 'Himedi (Хаймеди) - это составное слово от «Hi - Привет», дружеское приветствие, и «Medical - Медицинский»,  и призвано стать дружественным сервисом, который рассеивает страх перед иностранными пациентами, пересекающими границу';
					} 
					elseif(ICL_LANGUAGE_CODE == 'mn') { 
						echo 'Himedi гэдэг нь "Hi" буюу мэндлэх мэндчилгээ мөн "Medical" буюу анагаах ухаан гэсэн үгнүүдээс бүрдэнэ. Энэ нь гадаадаас ирсэн гадны өвчтөнүүдийн айдсыг найрсаг үйлчилгээгээрээ арилгах санааг тусгасан болно';
					} 
					elseif(ICL_LANGUAGE_CODE == 'ar') { 
						echo 'هاي ميدي هي كلمة مجمعة لكلمة "مرحبًا" وهي تحية ودية و "طبي" مما يعني العلوم الطبية. هذا الاسم يعكس النية في تقديم خدمة ودية تقضي على الخوف من المرضى الأجانب القادمين من الخارج';
					}
			?>
		</p>
	</div>

	<div class="flex flex-wrap w-full px-3 pt-10 mt-40" style="background-color: #f7f7f7;" id="history">
		<h3 class="text-center px-0 font-size-24 leading-relaxed" style="font-size:20px">
			History
		</h3>
		<p class="pt-4 px-2 text-gray-700 text-left text-2xl leading-none text-white" style="color:#5F5F5F; line-height:1.2" >
			<?php 
					if(ICL_LANGUAGE_CODE == 'en'){ 
						echo 'The path that Himedi has followed since 2011 as \'an enterprise of innovation that
						realizes easy and comfortable medical tourism.\'';
					} 
					elseif(ICL_LANGUAGE_CODE == 'ru') { 
						echo 'Путь, по которому Хаймеди, следует с 2011 года как «инновационное предприятие, обеспечивающее легкий и удобный медицинский туризм».';
					} 
					elseif(ICL_LANGUAGE_CODE == 'mn') { 
						echo '2011 оноос хойш Himedi нь " Эмнэлэгийн аялал жуучлалыг хялбар тохь тухтай байдлаар нэвтрүүлэх" замаар үйл ажиллагаагаа явуулж байгаа билээ.';
					} 
					elseif(ICL_LANGUAGE_CODE == 'ar') { 
						echo 'المسار الذي اتبعته هاي ميدي منذ عام 2011 "كمؤسسة ابتكارية تحقق سياحة طبية سهلة ومريحة."';
					}
			?>
			
		</p>
		<div class="flex mt-2 pb-4 border-solid border-b-2 border-gray-200 leading-relaxed text-base" style="color:#666!important;">
			<div class="text-sm font-bold mr-4" style="color:#333!important;">
				2020
			</div>

			<div class="flex flex-wrap ">
				<div class="flex mb-2">
					<div class="text-sm mr-4">
						04
					</div>
					<div class="text-sm ">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'Attracted Series B investment amounting to 6 billion won';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'В серии Б привлечены инвестиции в размере 6 миллиардов вон';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'B цуврал дээр 6 тэрбум воны хөрөнгө оруулалт авав';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'جذب استثمارات من الفئة ب تصل إلى 6 مليار وون';
							}
						?>
					</div>
				</div>
			</div>

		</div>


		<div class="flex mt-2 pb-4 border-solid border-b-2 border-gray-200">
			<div class="text-sm font-bold mr-4" style="color:#333!important;">
				2019
			</div>

			<div class="flex flex-wrap">
				<div class="flex mb-2">
					<div class="text-sm mr-4">
						04
					</div>
					<div class="text-sm">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'Himedi Korea Co., Ltd. Separated as an affiliate';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Himedi Korea Co. Ltd. (Хаймеди Корея) (компания с ограниченной ответственностью) Выделена как аффилированная компания';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Himedi Korea Co., Ltd. Нь охин компаниа тусгаарлав.';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'شركة هاي ميدي كوريا المحدودة منفصلة كشركة تابعة';
							}
							?>
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						04
					</div>
					<div class="text-sm">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'Changed the company name to Himedi Co., Ltd.';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Изменено название компании на Хаймеди (компания с ограниченной ответственностью)';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Компанийхаа нэрийг Himedi Co., Ltd. Болгон өөрчлөв';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'تم تغيير اسم الشركة إلى شركة Himedi المحدودة.';
							}
							?>
						
						
					</div>
				</div>
			</div>
		</div>

		<div class="flex mt-2 pb-4 border-solid border-b-2 border-gray-200 leading-relaxed">
			<div class="text-sm font-bold mr-4" style="color:#333!important;">
				2018
			</div>

			<div class="flex flex-wrap">
				<div class="flex mb-2">
					<div class="text-sm mr-4 ">
						10
					</div>
					<div class="text-sm">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'Attracted Series A investment amounting to 2 billion won from Murex Partners';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Привлечены инвестиции серии A в размере 2 миллиардов вон от компании "Murex Partners"';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Murex Partners-аас 2 тэрбум воны хөрөнгө оруулалт А цуврал дээр авав';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'اجتذبت استثمارات السلسلة A البالغة 2 مليار وون من Murex Partners';
							}
							?>
						
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						09
					</div>
					<div class="text-sm">
						<?php 
								if(ICL_LANGUAGE_CODE == 'en'){ 
									echo 'Concluded the concierge contract of Russian patients with Severance Check-up';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ru') { 
									echo 'Соглашение о предоставлении услуг консьержа для пациентов из России при окончательном осмотре';
								} 
								elseif(ICL_LANGUAGE_CODE == 'mn') { 
									echo 'Severance Check-up тай хамтран ОХУ-н өвчтөнүүдийн хамтын гэрээг байгуулав';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ar') { 
									echo 'إبرام عقد الكونسيرج للمرضى الروس الذين يخضعون لفحص سيفيرانس ';
								}
							?>
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						08
					</div>
					<div class="text-sm">
						<?php 
								if(ICL_LANGUAGE_CODE == 'en'){ 
									echo 'Founded the Uzbekistan corporation of Himedi';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ru') { 
									echo 'Основана корпорация Хаймеди в Узбекистане';
								} 
								elseif(ICL_LANGUAGE_CODE == 'mn') { 
									echo 'Узбекистаны Himedi корпорацийг байгуулав';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ar') { 
									echo 'تأسيس شركة هاي ميدي الأوزبكستانية';
								}
							?>	
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						08
					</div>
					<div class="text-sm">
						<?php 
								if(ICL_LANGUAGE_CODE == 'en'){ 
									echo 'Concluded the concierge operation/management contract of Arab Muslim patients with BOBATH
									Memorial Hospital';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ru') { 
									echo 'Заключен договор консьержа / управления арабскими мусульманскими пациентами с больницей BOBATH Memorial';
								} 
								elseif(ICL_LANGUAGE_CODE == 'mn') { 
									echo ' BOBATH-ын нэрэмжит эмнэлэгтэй хамтран  Арабын муслим өвчтөнүүдийн хамтын үйл ажиллагаа/менежментийн гэрээ байгуулав.';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ar') { 
									echo 'إبرام عقد تشغيل / إدارة خدمة كونسيرج للمرضى العرب المسلمين مع مستشفى بوباث التذكاري';
								}
							?>	
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						06
					</div>
					<div class="text-sm">
						<?php 
								if(ICL_LANGUAGE_CODE == 'en'){ 
									echo 'Concluded the concierge operation/management contract of Arab Muslim patients with Wooridul
									Hospital in Cheongdam';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ru') { 
									echo 'Заключение контракта на консьерж-обслуживание / управление пациентами-арабами-мусульманами в больнице Wooridul в Чхондаме';
								} 
								elseif(ICL_LANGUAGE_CODE == 'mn') { 
									echo 'Чёндам дах ҮРИДЫЛЬ эмнэлэгтэй хамтран  Арабын муслим өвчтөнүүдийн хамтын үйл ажиллагаа/менежментийн гэрээ байгуулав';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ar') { 
									echo 'إبرام عقد تشغيل / إدارة كونسيرج للمرضى العرب المسلمين مع مستشفى ووريدول تشونغ دام';
								}
						?>	
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						02
					</div>
					<div class="text-sm">
						<?php 
								if(ICL_LANGUAGE_CODE == 'en'){ 
									echo 'Concluded the concierge operation/management contract of Arab Muslim patients with Seoul National University Bundang Hospital';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ru') { 
									echo 'Заключен договор консьержа / управления пациентами-арабами-мусульманами с больницей Бунданг Сеульского национального университета';
								} 
								elseif(ICL_LANGUAGE_CODE == 'mn') { 
									echo 'Бундан дахь Сөүл их сургуулийн эмнэлэгтэй хамтран Арабын муслим өвчтөнүүдийн хамтын үйл ажиллагаа/менежментийн гэрээ байгуулав';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ar') { 
									echo 'إبرام عقد تشغيل / إدارة خدمة كونسيرج للمرضى العرب المسلمين مع مستشفى جامعة سيول الوطنية بوندانغ';
								}
						?>	
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						01
					</div>
					<div class="text-sm">
						<?php 
								if(ICL_LANGUAGE_CODE == 'en'){ 
									echo 'Concluded the concierge operation/management contract of Arab Muslim patients with Seoul National University Hospital (Main)';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ru') { 
									echo 'Заключен договор консьержа / управления арабскими мусульманскими пациентами в больнице Сеульского национального университета (главная).';
								} 
								elseif(ICL_LANGUAGE_CODE == 'mn') { 
									echo 'Сөүл их сургуулийн эмнэлэгтэй хамтран Арабын муслим өвчтөнүүдийн хамтын үйл ажиллагаа/менежментийн гэрээ байгуулав.';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ar') { 
									echo 'إبرام عقد تشغيل / إدارة خدمة كونسيرج للمرضى العرب المسلمين مع مستشفى جامعة سيول الوطنية (الرئيسي)';
								}
						?>	
						
					</div>
				</div>
			</div>
		</div>

		<div class="flex mt-2 pb-4 border-solid border-b-2 border-gray-200 leading-relaxed">
			<div class="text-sm font-bold mr-4" style="color:#333!important;">
				2015
			</div>

			<div class="flex flex-wrap">
				<div class="flex mb-2">
					<div class="text-sm mr-4">
						12
					</div>
					<div class="text-sm">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'Concluded the concierge operation/management contract of Arab Muslim patients with Cha University Gangnam Medical Center';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Заключил договор консьержа / управления арабскими мусульманскими пациентами с Медицинским центром Каннам при университете Ча';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Ча их сургууль Ганнам Medical Center-тэй хамтран Арабын муслим өвчтөнүүдийн хамтын үйл ажиллагаа/менежментийн гэрээ байгуулав';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'إبرام عقد تشغيل / إدارة خدمة كونسيرج للمرضى العرب المسلمين مع مركز كانغنام الطبي التابع لجامعة تشا';
							}
						?>	
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						11
					</div>
					<div class="text-sm">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'Concluded the concierge operation/management contract of Arab Muslim patients with Samsung Medical Center';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Заключил договор консьержа / управления арабскими мусульманскими пациентами с Медицинским центром Самсунг';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Samsung Medical Center-тэй хамтран Арабын муслим өвчтөнүүдийн хамтын үйл ажиллагаа/менежментийн гэрээ байгуулав';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'إبرام عقد تشغيل / إدارة خدمة كونسيرج للمرضى العرب المسلمين مع مركز سامسونغ الطبي';
							}
						?>	
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						09
					</div>
					<div class="text-sm">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'Concluded the UAE health insurance patient registration/billing service contract with Daman Health Insurance';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Заключил договор о предоставлении услуг по регистрации и выставлению счетов для пациентов медицинского страхования ОАЭ с компанией "Daman Health Insurance"';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Daman эрүүл мэндийн даатгалтай хамтран Арабын нэгдсэн Эмират улсын өвчтөнүүдийн бүртгэл болон тооцооны үйлчилгээний гэрээ байгуулав';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'إبرام عقد خدمة تسجيل / فواتير المرضى للتأمين الصحي الإماراتي مع مؤسسة ضمان للتأمين الصحي';	
							}
						?>	
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						03
					</div>
					<div class="text-sm">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'An internship program with Arabic Department of Chosun University';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Программа стажировки на арабском факультете Университета Чосун';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Чосун их сургуулийн Араб хэлний тэнхимтэй хамтран дадлага хийх хөтөлбөр';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'برنامج تدريب داخلي مع قسم اللغة العربية بجامعة تشوسون';	
							}
						?>	
						
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						03
					</div>
					<div class="text-sm">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'An internship program with Arabic Studies Department, Myongji University';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Программа стажировки на кафедре арабских исследований Университета Мёнджи';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Мёнжи их сургуулийн Араб бүс судлалын тэнхимтэй хамтран дадлага хийх хөтөлбөр.';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'برنامج تدريب داخلي مع قسم الدراسات العربية ، جامعة ميونغجي';	
							}
						?>	
						
					</div>
				</div>
				
			</div>
		</div>

		<div class="flex mt-2 pb-4 border-solid border-b-2 border-gray-200 leading-relaxed">
			<div class="text-sm font-bold mr-4" style="color:#333!important;">
				2014
			</div>

			<div class="flex flex-wrap">
				<div class="flex mb-2">
					<div class="text-sm mr-4">
						12
					</div>
					<div class="text-sm">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'Concluded the medical checkup service contract for the staff of the Russian airline Air Bridge Cargo';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Заключен договор на медицинское обследование сотрудников российской авиакомпании Air Bridge Cargo';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'ОХУ-ын агаарын тээврийн Air Bridge Cargo-н ажилтануудад эмнэлэгийн үзлэгт хамруулах гэрээ байгуулав';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'إبرام عقد خدمة الفحص الطبي لموظفي شركة الطيران الروسية Air Bridge Cargo';	
							}
						?>	
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						07
					</div>
					<div class="text-sm">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'Founded the corporation of Widers Korea';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Основание компании Widers';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Widers компанийг байгуулсан.';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'تأسست شركة Widers';	
							}
						?>	
						
					</div>
				</div>
				
			</div>
		</div>

		<div class="flex mt-2 pb-4 border-solid border-b-2 border-gray-200 leading-relaxed">
			<div class="text-sm font-bold mr-4" style="color:#333!important;">
				2011
			</div>

			<div class="flex flex-wrap">
				<div class="flex mb-2">
					<div class="text-sm mr-4">
						12
					</div>
					<div class="text-sm">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'Concluded the concierge operation/management contract of Arab Muslim patients with Severance Hospital';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Заключил договор консьержа / управления арабскими мусульманскими пациентами с больницей Северанс';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Severance эмнэлэгтэй хамтран Арабын муслим өвчтөнүүдийн хамтын үйл ажиллагаа/менежментийн гэрээ байгуулав';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'إبرام عقد تشغيل / إدارة كونسيرج للمرضى العرب المسلمين مع مستشفى سيفيرانس';	
							}
						?>	
						
						
					</div>
				</div>

				<div class="flex mb-2">
					<div class="text-sm mr-4">
						12
					</div>
					<div class="text-sm">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'Founded Widers Company';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Основание компании Widers';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Widers компанийг байгуулсан';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'تأسست شركة Widers';	
							}
						?>	
						
						
					</div>
				</div>
				
			</div>
		</div>

	</div>

	<div class="flex flex-wrap w-full px-6 py-5">
		<h3 class="font-bold text-center px-0 font-size-24 leading-relaxed" style="font-size:22px">
			<?php 
				if(ICL_LANGUAGE_CODE == 'en'){ 
					echo 'Location';
				} 
				elseif(ICL_LANGUAGE_CODE == 'ru') { 
					echo 'Локация ';
				} 
				elseif(ICL_LANGUAGE_CODE == 'mn') { 
					echo 'Байршил :';
				} 
				elseif(ICL_LANGUAGE_CODE == 'ar') { 
					echo 'الموقع';	
				}
			?>	
			</h3>

		<iframe class="w-full h-56 mb-4" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDgl81NrLLD43y1Qep_Dc8INyr8ilgvSwE
	&q=22+Seocho-daero+78-gil,+Seocho-dong,+Seocho-gu,+Seoul" allowfullscreen>
		</iframe>

		<h3 class="font-bold text-center px-0 font-size-24 leading-relaxed" style="font-size:22px">
			<?php 
				if(ICL_LANGUAGE_CODE == 'en'){ 
					echo 'Himedi Headquarters';
				} 
				elseif(ICL_LANGUAGE_CODE == 'ru') { 
					echo 'Штаб-квартира Химеди';
				} 
				elseif(ICL_LANGUAGE_CODE == 'mn') { 
					echo 'Himedi-н төв байр';
				} 
				elseif(ICL_LANGUAGE_CODE == 'ar') { 
					echo 'مقر هاي ميدي';	
				}
			?>	
						
			</h3>

		<div class="leading-relaxed">
			<table>
				<tr class="text-sm">
					<td class="pr-4 py-2" valign="top">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo 'Address';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo 'Адресс ';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo 'Хаяг';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'العنوان';	
							}
						?>	
					</td>
					<td class="py-2">
						<?php 
							if(ICL_LANGUAGE_CODE == 'en'){ 
								echo '7th Floor, Hongwu-2-Building, 78-gil 22, Seochodaero, Seocho-gu, Seoul';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ru') { 
								echo '7-й этаж, Здание Хонгву, 78ая дорога 22 Сочхо, Район Сочхо, Сеул ';
							} 
							elseif(ICL_LANGUAGE_CODE == 'mn') { 
								echo '7th Floor, Hongwu-2-Building, 78-gil 22, Seochodaero, Seocho-gu, Seoul';
							} 
							elseif(ICL_LANGUAGE_CODE == 'ar') { 
								echo 'الطابق السابع ، مبنى هونغ وو -2، 78 غيل 22، سوتشو ديه رو، حي سوتشو، سيول';	
							}
						?>	
					</td>
				</tr>

				<tr class="text-sm">
					<td class="pr-4 py-2" valign="top">Location</td>
					<td class="py-2">
						<?php 
								if(ICL_LANGUAGE_CODE == 'en'){ 
									echo '5 minutes from Exit No. 6 of Gangnam Station (Shinbundang subway line)';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ru') { 
									echo '5 минут от выхода № 6 со станции Гангнам (линия метро Шинбунданг)';
								} 
								elseif(ICL_LANGUAGE_CODE == 'mn') { 
									echo 'Ганнам метроны буудал 6р гарцаар гараад 5мин (Shinbundang метроны шугам)';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ar') { 
									echo 'خمس دقائق من المخرج رقم 6 لمحطة كانغنام (خط مترو أنفاق شينبوندانغ)';	
								}
							?>	
						</td>
				</tr>

				<tr class="text-sm">
					<td class="pr-4 py-2" valign="top">						
					<?php 
								if(ICL_LANGUAGE_CODE == 'en'){ 
									echo 'Tel';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ru') { 
									echo 'Телефонные номера (Тел)';
								} 
								elseif(ICL_LANGUAGE_CODE == 'mn') { 
									echo 'Утас';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ar') { 
									echo 'الهاتف';	
								}
							?>
							 :</td>
					<td class="py-2">+82 70-8146-8986</td>
				</tr>

				<tr class="text-sm">
					<td class="pr-4 py-2" valign="top">					
					<?php 
								if(ICL_LANGUAGE_CODE == 'en'){ 
									echo 'Fax';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ru') { 
									echo 'Факс';
								} 
								elseif(ICL_LANGUAGE_CODE == 'mn') { 
									echo 'Факс';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ar') { 
									echo 'الفاكس';	
								}
							?>
							 :</td>
					<td class="py-2">+82 2-545-0420</td>
				</tr>

				<tr class="text-sm">
					<td class="pr-4 py-2" valign="top">
					<?php 
								if(ICL_LANGUAGE_CODE == 'en'){ 
									echo 'E-mail ';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ru') { 
									echo 'Электронная почта ';
								} 
								elseif(ICL_LANGUAGE_CODE == 'mn') { 
									echo 'Цахим хаяг ';
								} 
								elseif(ICL_LANGUAGE_CODE == 'ar') { 
									echo 'البريد الإلكتروني ';	
								}
							?>
							 :</td>
					<td class="py-2">acc@himedi.com</td>
				</tr>

			</table>
		</div>

	</div>

</div>
<!-- Section 3-6 (end) -->
