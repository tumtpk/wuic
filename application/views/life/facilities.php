<div class="container">
<!--================Static Area =================-->
<section class="static_area">
<p class="pblade">
			<?php 
            if(isset($breadcrumb)){
                if(sizeof($breadcrumb) > 0){
                     foreach ($breadcrumb as $array){
                         echo '<a href="'.$array['url'].'"><i class="'.$array['icon'].'" aria-hidden="true"></i> '.$array['page'].'</a> ';
                     }
                }
             }
         ?>
	</p>
<div class="container">
<div class="static_inner">
<div class="row">
<div class="col-lg-9">
   <div class="static_main_content">
      <div class="static_social">
         <ul>
            <li><a href="http://www.facebook.com/sharer.php?u=<?=current_url()?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/intent/tweet?text=Program+in+Logistics+Analytics+and+Supply+Chain+Management&url=<?=current_url()?>"><i class="fa fa-twitter"></i></a></li>
         </ul>
      </div>
      <div class="static_img">
<!--          <img class="img-fluid" src="img/static-1.jpg" alt=""> -->
         <h4 style="color: #f26c21;">Facilities</h4>
         <br>
      </div>
      <div class="static_text2">
         
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="<?= base_url(); ?>public/img/li1.jpg" alt="First slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="<?= base_url(); ?>public/img/li2.jpg" alt="Second slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="<?= base_url(); ?>public/img/li3.jpg" alt="Third slide">
               </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="<?= base_url(); ?>public/img/li4.jpg" alt="Third slide">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="<?= base_url(); ?>public/img/li5.jpg" alt="Third slide">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="<?= base_url(); ?>public/img/fit1.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?= base_url(); ?>public/img/fit2.jpg" alt="Third slide">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="<?= base_url(); ?>public/img/farm1.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <aside class="right_widget r_cat_widget">
            <br>
            <div class="r_w_title">
               <h3 style="color: #f26c21;">Facilities</h3>
            </div>
            <div class="row">
               <div class="col-6">
                  <ul>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/4551/Green-Campus" target="_blank" style="color:#000000;">Green Campus</a></p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/13280/Dormitory" target="_blank" style=" color:#000000;">Hall of Residences</a></p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/13273/Library-Resources-and-Educational-Media-Center" target="_blank" style=" color:#000000;">University Library and Learning Center</a></p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/4554/Laboratories-and-Lecture-Rooms" target="_blank" style="color:#000000;">Laboratories and Lecture Rooms</a></p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/4556/Sports-Facilities" target="_blank" style="color:#000000;">Sports Facilities</a></p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/13272/WU-book-center" target="_blank" style=" color:#000000;">WU Book Center</a></p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/4558/Cooperative-Education" target="_blank" style=" color:#000000;">Cooperative Education</a></p>
                  </ul>
               </div>
               <div class="col-6">
                  <ul>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://whc.wu.ac.th/" target="_blank" style=" color:#000000;">Walailak Hospitality Center</a></p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/4560/University-Farm" target="_blank" style="color:#000000;">University Farm</a></p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/13277/Health-Service" target="_blank" style="color:#000000;">Walailak University Hospital</a></p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/13276/Bank-Services" target="_blank" style="color:#000000;">Bank Services</a></p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/13278/Food-and-Shops" target="_blank" style="color:#000000;">Food and Shops</a></p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/14275/WU-Electric-Shuttle-Car-Service" target="_blank" style="color:#000000;">WU Electric Shuttle Car Service</a></p>
                     <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/13281/Public-transportation-Train" target="_blank" style="color:#000000;">Public transportation-Train</a></p>
                  </ul>
               </div>
            </div>
         </aside>
      </div>
   </div>
</div>