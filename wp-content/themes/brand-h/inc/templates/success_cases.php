<!-- Section 3-5 (start) -->
<section class="items-center pt-20">
<div class="flex justify-center flex-wrap mx-10" style="margin-top:70px;">
        <div class="border-gray-700 border w-16 h-16 rounded-full py-2 px-2 flex items-center justify-center text-gray-700"> 
            <svg viewBox="0 0 384 512" class="w-8 h-8" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M336 64H247.4C247.8 61.4 248 58.7 248 56C248 25.1 222.9 0 192 0C161.1 0 136 25.1 136 56C136 58.7 136.2 61.4 136.6 64H48C21.5 64 0 85.5 0 112V464C0 490.5 21.5 512 48 512H336C362.5 512 384 490.5 384 464V112C384 85.5 362.5 64 336 64ZM192 32C205.3 32 216 42.7 216 56C216 69.3 205.3 80 192 80C178.7 80 168 69.3 168 56C168 42.7 178.7 32 192 32ZM352 464C352 472.8 344.8 480 336 480H48C39.2 480 32 472.8 32 464V112C32 103.2 39.2 96 48 96H96V116C96 122.6 101.4 128 108 128H276C282.6 128 288 122.6 288 116V96H336C344.8 96 352 103.2 352 112V464ZM280 288H224V232C224 227.6 220.4 224 216 224H168C163.6 224 160 227.6 160 232V288H104C99.6 288 96 291.6 96 296V344C96 348.4 99.6 352 104 352H160V408C160 412.4 163.6 416 168 416H216C220.4 416 224 412.4 224 408V352H280C284.4 352 288 348.4 288 344V296C288 291.6 284.4 288 280 288Z"
                    fill="black" />
            </svg>
        </div>
    
        <div class="w-full mb-32 ">
            <h2 class="font-bold text-center px-6 font-size-24 leading-relaxed " style="font-size:22px">
             <?php 
                if(ICL_LANGUAGE_CODE == 'en'){ 
                    echo 'Check out these diagnosis examples and methods best suitable for you.';
                } 
                elseif(ICL_LANGUAGE_CODE == 'ru') { 
                    echo 'Ознакомьтесь с примерами диагностики и методами, которые лучше всего подходят для вас.';
                } 
                elseif(ICL_LANGUAGE_CODE == 'mn') { 
                    echo 'Оношлогооны жишээнүүд болон танд тохирсон эмчилгээний аргуудтай танилцана уу';
                } 
                elseif(ICL_LANGUAGE_CODE == 'ar') { 
                    echo 'تعرف على هذه الأمثلة التشخيصية والطرق الأنسب لك.';
                }
            ?>

            </h2>
        </div>

        <div class="flex justify-center flex-wrap w-8/12 lg:w-5/12 lg:text-3xl">
        <button id="choleithiasis_button"
                class="relative flex items-center justify-center content-center bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-3 lg:py-3 border border-blue-500 hover:border-transparent rounded-full m-2 min-w-full">
                Cholelithiasis
                <svg class="w-10 lg:w-10 absolute right-0 mr-5 lg:mr-5" viewBox="0 0 640 512" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M227 417C216 417 207 408 207 397V333C207 322 216 313 227 313C238 313 247 322 247 333V397C247 408 238 417 227 417ZM480.5 -4.11593e-05C392 -0.300041 320 71.6 320 160V224H48C21.5 224 0 245.5 0 272V464C0 490.5 21.5 512 48 512H400C426.5 512 448 490.5 448 464V272C448 245.5 426.5 224 400 224H352V161.4C352 90.7 408.7 32.4 479.3 32C550.2 31.6 608 89.2 608 160V244C608 250.6 613.4 256 620 256H628C634.6 256 640 250.6 640 244V161.5C640 73.1 568.9 0.299959 480.5 -4.11593e-05ZM400 256C408.8 256 416 263.2 416 272V464C416 472.8 408.8 480 400 480H48C39.2 480 32 472.8 32 464V272C32 263.2 39.2 256 48 256H400Z"
                        fill="#2b6cb0" />
                </svg>

            </button>

            <button
			class="relative flex items-center justify-center content-center bg-transparent hover:bg-blue-500 text-gray-500 py-3 lg:py-3 border border-gray-500 pointer-events-none rounded-full m-4 min-w-full">
                Breastcancer
                <svg class="w-8 lg:w-8 absolute right-0 mr-5 lg:mr-5" viewBox="0 0 448 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 420C213 420 204 411 204 400V336C204 325 213 316 224 316C235 316 244 325 244 336V400C244 411 235 420 224 420ZM448 272V464C448 490.5 426.5 512 400 512H48C21.5 512 0 490.5 0 464V272C0 245.5 21.5 224 48 224H64V160C64 71.6 136 -0.300041 224.5 -4.11593e-05C312.9 0.299959 384 73.1 384 161.5V224H400C426.5 224 448 245.5 448 272ZM96 224H352V160C352 89.4 294.6 32 224 32C153.4 32 96 89.4 96 160V224ZM416 464V272C416 263.2 408.8 256 400 256H48C39.2 256 32 263.2 32 272V464C32 472.8 39.2 480 48 480H400C408.8 480 416 472.8 416 464Z"
                        fill="currentcolor" />
                </svg>
            </button>

            <button
			class="relative flex items-center justify-center content-center bg-transparent hover:bg-blue-500 text-gray-500 py-3 lg:py-3 border border-gray-500 pointer-events-none rounded-full m-4 min-w-full">
                Cervicalcancer
                <svg class="w-8 lg:w-8 absolute right-0 mr-5 lg:mr-5 " viewBox="0 0 448 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 420C213 420 204 411 204 400V336C204 325 213 316 224 316C235 316 244 325 244 336V400C244 411 235 420 224 420ZM448 272V464C448 490.5 426.5 512 400 512H48C21.5 512 0 490.5 0 464V272C0 245.5 21.5 224 48 224H64V160C64 71.6 136 -0.300041 224.5 -4.11593e-05C312.9 0.299959 384 73.1 384 161.5V224H400C426.5 224 448 245.5 448 272ZM96 224H352V160C352 89.4 294.6 32 224 32C153.4 32 96 89.4 96 160V224ZM416 464V272C416 263.2 408.8 256 400 256H48C39.2 256 32 263.2 32 272V464C32 472.8 39.2 480 48 480H400C408.8 480 416 472.8 416 464Z"
                        fill="currentcolor" />
                </svg>
            </button>

            <button
			class="relative flex items-center justify-center content-center bg-transparent hover:bg-blue-500 text-gray-500 py-3 lg:py-3 border border-gray-500 pointer-events-none rounded-full m-4 min-w-full">
                Cancer&spine
                <svg class="w-8 lg:w-8 absolute right-0 mr-5 lg:mr-5" viewBox="0 0 448 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 420C213 420 204 411 204 400V336C204 325 213 316 224 316C235 316 244 325 244 336V400C244 411 235 420 224 420ZM448 272V464C448 490.5 426.5 512 400 512H48C21.5 512 0 490.5 0 464V272C0 245.5 21.5 224 48 224H64V160C64 71.6 136 -0.300041 224.5 -4.11593e-05C312.9 0.299959 384 73.1 384 161.5V224H400C426.5 224 448 245.5 448 272ZM96 224H352V160C352 89.4 294.6 32 224 32C153.4 32 96 89.4 96 160V224ZM416 464V272C416 263.2 408.8 256 400 256H48C39.2 256 32 263.2 32 272V464C32 472.8 39.2 480 48 480H400C408.8 480 416 472.8 416 464Z"
                        fill="currentcolor" />
                </svg>
            </button>
        </div>
    </div>

    <!-- <div id="pop_up_bg" class="fixed w-screen h-screen top-0 right-0" style="background-color: rgba(0, 0, 0, 0.6);"></div>
    <div id="main_pop_up" class="w-full absolute top-0" 
        style="height: 70vh; background-image: url(<?php bloginfo('template_directory') ?>/img/static/chart.png);background-repeat: no-repeat;background-size:cover;top:50%; transform: translateY(-50%);">
    
    </div> -->

    <div id="successCase_popup_bg" class="fixed w-screen h-screen top-0 right-0 z-40 hidden" style="background-color: rgba(0, 0, 0, 0.6);"></div>
    <div id="successCase_popup" class=" w-full sm:w-1/2 md:w-2/3 fixed top-0 z-50 p-4 pt-16 overflow-hidden  hidden" style="max-width: 635px;height: 70vh;top:50%; left: 50%; transform: translate(-50%, -50%);">
            <!-- PopUp Content goes here. -->
            <img class="absolute top-0 left-0 w-full h-full z-40" src="<?php bloginfo('template_directory') ?>/img/static/chart2.png" alt="" style="pointer-events:none">
           <div class="w-full h-full overflow-auto hide_scrollBar" style="height:100%"> 
               <img src="<?php bloginfo('template_directory') ?>/img/case/case-01.jpg" alt="">
               <img src="<?php bloginfo('template_directory') ?>/img/case/case-02.jpg" alt="">
               <img src="<?php bloginfo('template_directory') ?>/img/case/case-03.jpg" alt="">
               <img src="<?php bloginfo('template_directory') ?>/img/case/case-04.jpg" alt="">
               <img src="<?php bloginfo('template_directory') ?>/img/case/case-05.jpg" alt="">
               <img src="<?php bloginfo('template_directory') ?>/img/case/case-06.jpg" alt="">
               <img src="<?php bloginfo('template_directory') ?>/img/case/case-07.jpg" alt="">
           </div>
    </div>
    <script>
        let successCasePopUp = document.getElementById("successCase_popup");
        let successCasePopUpBg = document.getElementById("successCase_popup_bg");
        let successCaseCholeithiasisBtn = document.getElementById("choleithiasis_button");
        let isSuccessCasePopUpShowing = false;

        const successCasePopUpHandeler = ()=>{
            console.log("run>>>");
            isSuccessCasePopUpShowing = !isSuccessCasePopUpShowing;
            if(isSuccessCasePopUpShowing){
                successCasePopUpBg.classList.remove("hidden");
                successCasePopUp.classList.remove("hidden");
            }else{
                successCasePopUpBg.classList.add("hidden");
                successCasePopUp.classList.add("hidden");
            }
        }

        //** Events */
        successCaseCholeithiasisBtn.addEventListener('click', successCasePopUpHandeler);
        successCasePopUpBg.addEventListener('click', successCasePopUpHandeler);
    </script>
</section>
<!-- Section 3-5 (end) -->

