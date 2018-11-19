<!--================Header Menu Area =================-->
<header class="no-border main_menu_area" style="position:  absolute;background-color: #ffffffff;">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url(); ?>public/img/logo3.png" style="width : 200px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 32px;text-align:  left;margin-left: 100px;">
         <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item">
               <div class="dropdown show" href="#">
                  <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                  <div class="dropnav dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>main/history">History</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>main/philosophy">Philosophy</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>main/vision">Vision/Mission</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>main/messageFromDean">Message from the Dean</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>main/organizasional">Organizational Structure</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>main/wuicCouncil">WUIC Council</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>main/visiting">Visiting Professors</a>
                  </div>
               </div>
               </li> -->
            <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>" style="font-size: 16px;color: #f96712;">About WUIC</a></li>
            <li class="nav-item">
               <div class="dropdown show" href="#">
               <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px;color: #f96712;">Study at WUIC</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <li class="dropdown-submenu">
                        <a class="dropdown-item lineheight dropdown-toggle" href="#" style="min-width: 270px;color:white !important;" >Undergraduate</a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item lineheight" href="<?= base_url(); ?>academic/digital" style="color:white !important;">B.Eng. (Digital Innovation Engineering)</a>
                     		<a class="dropdown-item lineheight" href="<?= base_url(); ?>academic/publicAffairs" style="color:white !important;">B.A. (Public Affairs)</a>
                     		<a class="dropdown-item lineheight" href="<?= base_url(); ?>academic/logistic" style="color:white !important;">B.B.A. (Logistics Analytics and Supply Chain Management)</a>
                     		<a class="dropdown-item lineheight" href="<?= base_url(); ?>academic/laws" style="color:white !important;">LL.B. (Bachelor of Laws)</a>
                        </ul>
                     </li>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/academicCalendar" style="color:white !important;">Academic calendar</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>study/scholarships" style="color:white !important;">Undergraduate Excellent Scholarship</a>
                  </ul>
               </div>
            </li>
            
            <li class="nav-item">
               <div class="dropdown show" href="#">
                  <a class="dropdown-toggle" href="#" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px;color: #f96712;">Admission</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/overall" style="color:white !important;">Admission Period</a>
                     <li class="dropdown-submenu">
                        <a class="dropdown-item lineheight dropdown-toggle" href="#" style="min-width: 100px;color:white !important;" >Admission Criteria</a>
                     	<ul class="dropdown-menu">
                            <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/directadmission" style="color:white !important;">Direct Admission</a>
                            <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/quota" style="color:white !important;">TCAS Quota</a>
                            <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/round3" style="color:white !important;">TCAS Round 3 - Joint Direct Admission</a>
                            <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/round4" style="color:white !important;">TCAS Round 4 - General Admission</a>
                        </ul>
                     </li>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/howToApply" style="color:white !important;">How to apply</a>
                  </ul>
               </div>
            </li>
            
            <li class="nav-item">
               <div class="dropdown show" href="#">
                  <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px;color: #f96712;">Life on Campus</a>
                  <div class="dropnav dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <!-- <a class="dropdown-item lineheight" href="#">Dormitories</a> -->
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>life/facilities" style="color:white !important;">Facilities</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>life/transportation" style="color:white !important;">Transportation on Campus</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>life/academicSupport" style="color:white !important;">Academic Support Centres</a>
                     <!-- <a class="dropdown-item lineheight" href="#">Resource Centres</a> -->
                     <!-- <a class="dropdown-item lineheight" href="#">Divisions</a> -->
                     <!-- <a class="dropdown-item lineheight" href="#">Reseach Centres</a> -->
                     <!-- <a class="dropdown-item lineheight" href="#">FAQs</a> -->
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>life/map" style="color:white !important;">Map</a>
                  </div>
               </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>contact/index" style="font-size: 16px;color: #f96712;">Contact us</a></li>
            <!-- <?= base_url(); ?>main/about -->
         </ul>
      </div>
   </nav>
</header>
<!--================End Header Menu Area =================-->