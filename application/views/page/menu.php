<!--================Header Menu Area =================-->
<header class="no-border main_menu_area">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url(); ?>public/img/logo3.png" style="width : 200px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
            
            <li class="nav-item">
               <div class="dropdown show" href="#">
                  <a class="dropdown-toggle" href="#" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admission</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/overall">Overall of submission</a>
                     <li class="dropdown-submenu">
                        <a class="dropdown-item lineheight dropdown-toggle" href="#" style="min-width: 280px" >Admission Criteria</a>
                        <ul class="dropdown-menu">
                           <li class="dropdown-submenu">
                              <a class="dropdown-item lineheight dropdown-toggle" href="#" style="min-width: 280px">TCAS system’s applicants</a>
                              <ul class="dropdown-menu">
                                 <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/portfolio">
                                    <li>Portfolio</li>
                                 </a>

                                  <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/quota">
                                    <li>Quota</li>
                                 </a>
                              </ul>
                           </li>
                          
                           <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/internationalStudents">
                              <li>International Students and Non TCAS system’s applicants</li>
                           </a>
                        </ul>
                     </li>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/fees">Admission & Fees</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/howToApply">How to apply?</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>admission/academicCalendar">Academic calendar</a>

                     
                  </ul>
               </div>
            </li>
          
             <li class="nav-item">
               <div class="dropdown show" href="#">
                  <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programs Offered</a>
                  <div class="dropnav dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>academic/digital">Program in Digital Innovation Engineering</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>academic/publicAffairs">Program in Public Affairs</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>academic/logistic">Program in Logistics Analytics and Supply Chain Management</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>study/scholarships">Scholarships</a>
                  </div>
               </div>
            </li>

            <li class="nav-item">
               <div class="dropdown show" href="#">
                  <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Study at WUIC</a>
                  <div class="dropnav dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>study/tuition">Tuition Fees</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>study/exchange">Exchange Programs</a>
                     <!-- <a class="dropdown-item lineheight" href="<?= base_url(); ?>study/scholarships">Scholarships</a> -->
                     <!-- <a class="dropdown-item lineheight" href="<?= base_url(); ?>study/intership">Internship Courses</a> -->
                  </div>
               </div>
            </li>
            <li class="nav-item">
               <div class="dropdown show" href="#">
                  <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Life on Campus</a>
                  <div class="dropnav dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <!-- <a class="dropdown-item lineheight" href="#">Dormitories</a> -->
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>life/facilities">Facilities</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>life/transportation">Transportation on Campus</a>
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>life/academicSupport">Academic Support Centres</a>
                     <!-- <a class="dropdown-item lineheight" href="#">Resource Centres</a> -->
                     <!-- <a class="dropdown-item lineheight" href="#">Divisions</a> -->
                     <!-- <a class="dropdown-item lineheight" href="#">Reseach Centres</a> -->
                     <!-- <a class="dropdown-item lineheight" href="#">FAQs</a> -->
                     <a class="dropdown-item lineheight" href="<?= base_url(); ?>life/map">Map</a>
                  </div>
               </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>contact/index">Contact us</a></li>
            <!-- <?= base_url(); ?>main/about -->
         </ul>
      </div>
   </nav>
</header>
<!--================End Header Menu Area =================-->