<!--================Search Area =================-->
        <section class="search_area">
            <div class="search_inner">
                <input type="text" placeholder="Enter Your Search...">
                <i class="ti-close"></i>
            </div>
        </section>
        <!--================End Search Area =================-->

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="<?= base_url(); ?>public/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
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
                            
                        </li>
                        
                        <li class="nav-item">
                            <div class="dropdown show" href="#">
                                <a class="dropdown-toggle" href="#" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academic</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li class="dropdown-submenu"><a class="dropdown-item lineheight dropdown-toggle" href="#" style="min-width: 280px" >Bachelor of Engineering </a>
                                    <ul class="dropdown-menu">
                                      <a class="dropdown-item lineheight" href="<?= base_url(); ?>academic/digital"><li>Program in Digital Innovation Engineering</li></a>
                                    </ul>
                                  </li>
                                  <li class="dropdown-submenu"><a class="dropdown-item lineheight dropdown-toggle" href="#" style="min-width: 280px">Bachelor of Arts</a>
                                    <ul class="dropdown-menu">
                                      <a class="dropdown-item lineheight" href="<?= base_url(); ?>academic/publicAffairs"><li>Program in Public Affairs</li></a>
                                    </ul>
                                  </li>
                                  <li class="dropdown-submenu"><a class="dropdown-item lineheight dropdown-toggle" href="#" style="min-width: 280px">Bachelor of Business Administration</a>
                                    <ul class="dropdown-menu">
                                      <a class="dropdown-item lineheight" href="<?= base_url(); ?>academic/logistic"><li>Program in Logistics Analytics and Supply Chain Management</li></a>
                                    </ul>
                                  </li>
                                </ul>
                            
                            </div>
                            
                        </li>
                    
                        <li class="nav-item">
                            <div class="dropdown show" href="#">
                                <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admission</a>

                                <div class="dropnav dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item lineheight" href="#">TCAS System's applications</a>
                                    <a class="dropdown-item lineheight" href="#">International & non TCAS system's applicants</a>
                                    <a class="dropdown-item lineheight" href="#">Applicant Qualification</a>
                                    <a class="dropdown-item lineheight" href="#">How to apply?</a>

                                </div>
                            
                            </div>
                           

                        </li>
                        <li class="nav-item">
                            <div class="dropdown show" href="#">
                            <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Study at WUIC</a>

                                <div class="dropnav dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item lineheight" href="#">Tuition Fees</a>
                                    <a class="dropdown-item lineheight" href="#">Exchange Programs</a>
                                    <a class="dropdown-item lineheight" href="#">Scholarships</a>
                                    <a class="dropdown-item lineheight" href="#">Internship Courses</a>

                                </div>
                            
                            </div>
                            
                        
                        </li>
                        <li class="nav-item">
                            <div class="dropdown show" href="#">
                                <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Life on Campus</a>

                                <div class="dropnav dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item lineheight" href="#">Dormitories</a>
                                    <a class="dropdown-item lineheight" href="#">Facilities</a>
                                    <a class="dropdown-item lineheight" href="#">Transportation on Campus</a>
                                    <a class="dropdown-item lineheight" href="#">Academic Support Centres</a>
                                    <a class="dropdown-item lineheight" href="#">Resource Centres</a>
                                    <a class="dropdown-item lineheight" href="#">Divisions</a>
                                    <a class="dropdown-item lineheight" href="#">Reseach Centres</a>
                                    <a class="dropdown-item lineheight" href="#">FAQs</a>
                                    <a class="dropdown-item lineheight" href="#">Map</a>


                                </div>
                            
                            </div>
                        
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
                       
                        <!-- <?= base_url(); ?>main/about -->

                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li><a href="#"><i class="icon_search"></i></a></li>
                        <li><a href="#"><i class="icon_bag_alt"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->