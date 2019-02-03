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
         <h4 style="color: #f26c21;">Academic Support Centres</h4>
         <br>
      </div>
      <div class="static_text2">
         <!-- <div class="form-group row text-center">
            <div class="col-md">
              	<img src="<?=base_url() ?>public/img/page/PAre-300x128.png" class="img-fluid" alt="Responsive image"><br>
            </div>
            </div> -->
         <aside class="right_widget r_cat_widget">
            <div class="r_w_title" style="padding-bottom: 0px;">
               <span style="font-size: 18px">Student Support Centres</span>
            </div>
               <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/4544/Individual-Counseling" target="_blank" style="color: #000;">Individual Counseling</a></p>
               <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/4545/Telephone-Counseling" target="_blank" style="color: #000;">Telephone Counseling</a></p>
               <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/4546/Group-Counseling" target="_blank" style="color: #000;">Group Counseling</a></p>
               <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/4547/Learning-Assistance-" target="_blank" style="color: #000;">Learning Assistance</a></p>
               <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/4548/Academic-and-Career-Counseling-" target="_blank" style="color: #000;">Academic and Career Counseling</a></p>
               <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> <a href="https://www.wu.ac.th/en/campuslife/4549/Self-Access-Information-Service-" target="_blank" style="color: #000;">Self-Access Information Service</a></p>
         </aside>
      </div>
   </div>
</div>