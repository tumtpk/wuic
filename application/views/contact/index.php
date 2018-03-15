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

<!-- this is section for new -->
<!-- <div class="col-lg-9">
   <div class="static_main_content">
     
   </div>
</div> -->

<!-- end this is section for new -->
<section class="contact_us_area">
   <div class="container">
     
      <div class="contact_details_inner">
         <div class="row">
            <div class="col-lg-6">
               <div class="contact_text">
                  <div class="main_title">
                     <h2>Contact us</h2>
                     <p>Walailak University International College (WUIC)</p>
                     <div class="contact_d_list_item">
                        <p>Walailak University 222 Thaiburi, Thasala District,<br /> Nakhon Si Thammarat 80161, Thailand</p>
                     </div>
                  </div>
                  <div class="contact_d_list">
                     <div class="contact_d_list_item">
                        <span style="color: red;"><i class="fa fa-phone"></i></span> +66 75 672 426-7 <br/>
                        <span style="color: red;"><i class="fa fa-phone"></i></span> +66 96 998 3944 <br/>
                        <span style="color: #2bc0a4;"><i class="fa fa-envelope-o"></i></span> wuic@wu.ac.th
                     </div>
                     <!-- <div class="contact_d_list_item">
                        <p>Open hours: 8.00-18.00 Mon-Fri <br />Sunday: Closed</p>
                        </div> -->
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="contact_form">
                  <div class="main_title">
                     <h2>Drop us a line</h2>
                  </div>
                  <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                     <div class="form-group col-lg-12">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                     </div>
                     <div class="form-group col-lg-12">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                     </div>
                     <div class="form-group col-lg-12">
                        <textarea class="form-control" name="message" id="message" rows="4" placeholder="Message"></textarea>
                     </div>
                     <div class="form-group col-md-12">
                        <button type="submit" value="submit" class="btn submit_btn2 form-control">Send Messages</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

        </div>
         </div>
      </div>
   </section>
   <!--================End Static Area =================-->
</div>