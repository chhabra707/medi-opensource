
<div class="pt-20">
<style type="text/css" scoped>
    .hide_scrollBar::-webkit-scrollbar { background-color:transparent; width:0px; } 
</style>

  <!-- Popup Up start -->
          <div id="bms_popup" class="content-affiliate flex flex-col items-center p-4 m-4 sm:p-10 fixed hidden z-40 " style="max-width: 635px; ; background-color: white; top: 50%;transform: translateY(-50%); max-height:100vh">
            <div class="w-full overflow-hidden content-affiliate" >
                <img id="bms_back_image" class="w-full bg-white" alt="" srcset="">
            </div>
            <div class="w-32 h-32 sm:w-40 sm:h-40 absolute border-solid border-4 sm:border-8 border-gray-600 rounded-full overflow-hidden content-affiliate-avatar" style="transform: translateY(-60%);">
                <img id="bms_avatar_image" class="w-full bg-white" alt="" srcset="">
            </div>
            <div class="w-full overflow-auto mt-24 hide_scrollBar" style="flex:60%;">
                <p id="bms_heading" class="font-size-22 text-b80 text-center mb-5 text-center" style="margin-top: 10px;">Text</p>
                <p id="bms_about_text" class="text-base lg:text-2xl leading-normal text-center text-gray-600">#Text</p>
                <p id="bms_tags" class="font-size-16 lg:text-xl text-b50 text-center margin-28 h-line-1-4 font-light keep-direction leading-none text-base">#Text</p>
            </div>
        </div>
        <div id="bms_popup_cancel_btn" class="fixed top-0 right-0 p-2 m-2 sm:p-4 sm:m-4 text-2xl sm:text-3xl cursor-pointer z-40 font-bold text-white hidden"></div>
        <div id="bms_pop_up_bg" class="fixed w-screen h-screen top-0 left-0 z-20 hidden" style="background-color: rgba(0, 0, 0, 0.5);"></div>
  <!-- Pop Up End -->

  <div style="margin-top:70px;">
    
    
    <div class="border-gray-700 border w-16 h-16 rounded-full py-2 px-2 flex items-center justify-center text-gray-700" style="margin:0 auto">
        <img class="mx-auto lg:h-8 h-8 w-8 lg:w-8"  src="<?php bloginfo('template_directory') ?>/img/hospital-alt-light.svg" >
      </div>
    
  </div>
  <div class="w-full mb-32 ">
    <h2 class="font-bold text-center px-6 font-size-24 leading-relaxed " style="font-size:22px">
     <?php 
          if(ICL_LANGUAGE_CODE == 'en'){ 
              echo 'Check out Korea’s <br class="lg:hidden">best medical staff';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ru') { 
              echo 'Просмотреть лучших <br class="lg:hidden"> мед работников кореии ';
          } 
          elseif(ICL_LANGUAGE_CODE == 'mn') { 
              echo 'Солонгосын шилдэг эмнэлэгийн <br class="lg:hidden"> ажилтануудтай танилцана уу';
          } 
          elseif(ICL_LANGUAGE_CODE == 'ar') { 
              echo 'تعرف على أفضل  <br class="lg:hidden">الطواقم الطبية الكورية.';
          }
         ?>	
      
    </h2>
  </div>
  <!-- logo --> 
  <div id="best_medical_staffs" class="mt-20 ">
    <div class="flex">
      <img id="best_medical_staff_1"  class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/01-logo.png" >
      <img id="best_medical_staff_2" class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/02-logo.png" >
      <img id="best_medical_staff_3" class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/03-logo.png" >
    </div>
    <div class="flex">
      <img id="best_medical_staff_4" class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/04-logo.png" >
      <img id="best_medical_staff_5" class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/05-logo.png" >
      <img id="best_medical_staff_6"  class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/06-logo.png" >
    </div>
    <div class="flex">
      <img id="best_medical_staff_7"  class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/07-logo.png" >
      <img id="best_medical_staff_8"  class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/08-logo.png" >
      <img id="best_medical_staff_9"  class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/09-logo.png" >
    </div>
    <div class="flex">
      <img id="best_medical_staff_10"  class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/10-logo.png" >
      <img id="best_medical_staff_11"  class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/11-logo.png" >
      <img id="best_medical_staff_12"  class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/12-logo.png" >
    </div>
    <div class="flex">
      <img id="best_medical_staff_13"  class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/13-logo.png" >
      <img id="best_medical_staff_14"  class="mx-auto mb-24 lg:h-40 h-24 lg:w-40 w-24" src="<?php bloginfo('template_directory') ?>/img/partners/14-logo.png" >
    </div>
  </div>
  <!-- logo end -->
          
          <!-- <div id="popup_cancel_btn2" class="absolute top-0 right-0 p-4 m-4 text-3xl cursor-pointer z-40 font-bold text-white hidden" style="top:10%">X</div> -->
          <!-- <div id="pop_up_bg2" class="absolute w-screen h-screen top-0 right-0 z-20 hidden" style="background-color: rgba(0, 0, 0, 0.5);"></div> -->
      <!--Hidden-popup better (start)  -->
      <script>
        console.log("affiliatePageJS>>>");
        let popUp = document.getElementById("bms_popup");
        let popUpCancelBtn = document.getElementById("bms_popup_cancel_btn");
        let popUpBg = document.getElementById("bms_pop_up_bg");

        let avatarImg = document.getElementById("bms_avatar_image");
        let backImg = document.getElementById("bms_back_image");
        let headingText = document.getElementById("bms_heading");
        let aboutText = document.getElementById("bms_about_text");
        let tagsElm = document.getElementById("bms_tags");

        let isPopUpShowing = false;
        //** Popup handler */

        const getPopupHandler = (meta)=>{
          return ()=>{
            if(meta){
              //** Init meta */
              avatarImg.src = meta.avatarImage
              backImg.src = meta.backImage
              headingText.innerText = meta.headingText
              aboutText.innerText = meta.aboutText
              tagsElm.innerText = meta.tags
            }
            isPopUpShowing = !isPopUpShowing;
            console.log("run>>", isPopUpShowing);
            if(isPopUpShowing){
              popUpBg.classList.remove("hidden");
              popUp.classList.remove("hidden");
              popUpCancelBtn.classList.remove("hidden");
            }else{
              popUpBg.classList.add("hidden");
              popUp.classList.add("hidden");
              popUpCancelBtn.classList.add("hidden");
            }
          }
        }


        //** Events */
        popUpCancelBtn.addEventListener('click', getPopupHandler());
        popUpBg.addEventListener('click', getPopupHandler());

        const affiliateLoboClickHandler = ({btnId, meta={avatarImage, backImage, headingText, aboutText}}) => {
          let loboBtn = document.getElementById(btnId);
          loboBtn.addEventListener('click', getPopupHandler(meta));
        }

        affiliateLoboClickHandler({btnId: "best_medical_staff_1", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/01-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/01.jpg",
          headingText: "CHA Gangnam Medical Center",
          tags:"#IVF #Infertilityspecialtyhospital #Infertilitycounseling",
          aboutText: "IVF, Additional treatments for IVF, IUI, Male Infertility, Fertility Tests for Men and Women",
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_2", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/02-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/02.jpg",
          headingText: "MizMedi Hospital",
          tags:"#Women'sHospital #IVF",
          aboutText: "Polycystic Ovary Syndrome/Ovulation Disorder, Ovarian Dysfunction, Male Infertility, IUI, IVF, Selection of Best Embryo, Creating the Optimum Condition for Implantation, Recurrent Miscarriage/Recurrent Implantation Failure, Preimplantation Genetic Diagnosis, Fertility Preservation (Egg Freezing), Laparoscopy, Hysteroscopy",
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_3", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/03-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/03.jpg",
          headingText: "Seoul National University Bundang Hospital",
          tags:"#Women'sHospital #IVF",
          aboutText: `Test: Spine X-rays, Spine MRI, Spine CT, Dexa bone densitometry, Pre-operative tests, Knee X-rays (knee series & teleradiogram), Knee MRI, Shoulder X-rays, Rotator cuff X-rays, Dexa bone densitometry, Shoulder CT, Shoulder MRI, Ultrasound Extremity, GU Kidney & bladder CT, Kidney SPECT/CT, Chest CT, Bone scan, Mammography, Breast ultrasound, breast gun biopsy, other types of biopsy (needle or punch)
          Tests for metastasis: Breast MRI, chest CT, abdomen & pelvis CT, PET scan, bone scan, pre-op labs

          Surgery: Interbody fusion, C-spine or L-spine, Posterior fusion, Total Knee Replacement Arthroplasty and other arthroscopic, Total shoulder arthroplasty, Robot-assisted Partial Nephrectomy or Radical Nephrectomy, Total mastectomy, In Vitro Fertilization`,
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_4", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/04-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/04.jpg",
          headingText: "The Catholic Univ. of Korea Seoul St.Mary's Hospital",
          tags:"#state-of-the-art-systems",
          aboutText: `Robotic-assisted myomectomy and reconstructive surgery, Robotic-assisted total laparoscopic hysterectomy, Preoperative examination(MRI)`,
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_5", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/05-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/05.jpg",
          headingText: "Seoul National University Hospital",
          tags:"#besthospital #famous-in-Korea #international&arabic",
          aboutText: `Laparoscopy or open surgery or etc. Holmium laser or etc. Endoscopy, surgery, chemotherapy, radiation
          (The treatment is decided according to the clinical stage and medical condition)
          Determine the surgical method depending on the metastasis, Laparoscopy surgery or da Vinci surgery or open surgery, Determination of treatment method and duration of treatment, such as chemotherapy or surgery, based on test results
          Interview & physical exam, 1st~2nd work up(donor), recipient work up, operation(donor/recipient)
          Blood test & pre-examination, Kidney transplantation surgery
          `,
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_6", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/06-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/06.jpg",
          headingText: "CHA Ilsan Women's & Children's Hospital",
          tags:"#Women'sHospital #Cervicalcancer #Breastcancer",
          aboutText: `Drug Therapy, Surgical Treatment, Surgical Treatments (Conization, LEEP, Simple Hysterectomy, Radical Hysterectomy), Radiation Therapy, Chemotherapy, Targeted Therapy, Cancer Immunotherapy`,
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_7", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/07-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/07.jpg",
          headingText: "Jaseng Hospital of Korean Medicine",
          tags:"#acupuncture #herbalmedicine #backpainspecialist",
          aboutText: `Consultation, Chuna manipulation, acupuncture, herbal injection(pharmacopuncture), cupping, physio-manual therapy, herbal medicine for a month`,
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_8", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/08-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/08.jpg",
          headingText: "Wooridul Spine Hospital",
          tags:"#EndoscopySpineSpecialty #minimally-invasive-spine-surgery #CausalTreatment",
          aboutText: `Consultation, Diagnostic exams (spinal imaging studies, blood test, etc.), Pre&post-operative exams`,
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_9", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/09-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/09.jpg",
          headingText: "Medrex Hospital",
          tags:"#joint&spine #non-surgery&surgery #1:1service",
          aboutText: `MRI, X-ray, blood test, CT, DT, urine test, ECG, PFT, ultrasonography, Coronyzer  and more`,
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_10", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/10-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/10.jpg",
          headingText: "Nanoori Hospital",
          tags:"#spine&joint_specialist #SpineSurgery #OrthorpedicSurgery",
          aboutText: `Test: X-ray, MRI, pre-op exams(a day before or on the day of the operation)

          Surgery: RACZ(Lumbar), Micro Lumbar Discectomy, Percutaneous Endoscopic Lumbar Discectomy, Anterior Lumbar Interbody Fusion, Posterior Lumbar Interbody Fusion, Transforaminal Lumbar Lateral Interbody Fusion, Hip Arthroscopy, Total Hip Replacement, Shoulder Arthroscopy, Arthroscopic Decompression(Shoulder), Arthroscopic Rotator Cuff Repair`,
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_11", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/11-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/11.jpg",
          headingText: "Korea University Anam Hospital",
          tags:"#cancer #SeriousAcuteCondition #JCI-accredited",
          aboutText: `Test: Spine MRI, X-ray, Basic blood tests, Urine test, EKG, Blood analysis, Urine analysis, X-ray, EKG, PFT, Colonoscopy, Abdomen CT, Chest CT, TTE, PET-CT(If necessary)

          Surgery: Spinal fusion/Discectomy, Lapa, Hemicolectomy`,
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_12", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/12-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/12.jpg",
          headingText: "Gachon Univ. Gil Medical Center",
          tags:"#cancer&spine #state-of-the-art-facility #FastTrack-for-foreigners",
          aboutText: `ACL/PCL Reconstruction(one side), Total Knee Arthroplasty(one side), Total Hip Replacement(one side), Colectomy(partial), Multi-disciplinary consultation using the AI ​​Watson program(if required), Nephrectomy(one side), Hysterectomy(laparoscopic)
            Liver transplantation from living donor
            Kidney transplantation from living donor`,
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_13", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/13-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/13.jpg",
          headingText: "Samsung Medical Center",
          tags:"#GeneralHospital #state-of-the-art-facility #SurgerySpecialist",
          aboutText: `Blood test, ultrasonography, CT, MRI, PET, bone scan, bone marrow exam, Hematopoietic Stem Cell transplantation, Chemotherapy, Targeted therapy, Immunotherapy, Proton therapy, Radiation therapy, Surgery`,
        }})

        affiliateLoboClickHandler({btnId: "best_medical_staff_14", meta:{
          avatarImage: "<?php bloginfo('template_directory') ?>/img/partners/14-logo.png",
          backImage: "<?php bloginfo('template_directory') ?>/img/partners/14.jpg",
          headingText: "Asan Medical Center",
          tags:"#largest-hospital-in-Korea #OrganTransplantation #AAHRPP-accredited",
          aboutText: `Evaluation tests (donor/recipient), Operation (living donor liver transplantation, Hepatectomy)`,
        }})
      </script>
</div>
  

  

  