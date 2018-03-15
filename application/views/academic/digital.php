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
                        <img class="img-fluid" src="img/static-1.jpg" alt="">
                        <h4 style="color: #f26c21;">Digital Innovation Engineering</h4><br>
                     </div>
                     <div class="static_text2">
                        <p>This program aims to produce graduates who inspire to change the digital world through innovative designs of applications and how they interact with humans worldwide. Graduates will respond to problems while creating new opportunities from digital innovations.</p><br>
                        <div class="form-group row text-center">
                           	<div class="col-md">
                              	<img src="<?=base_url() ?>public/img/page/xIN-300x141.png.pagespeed.ic._qxOQntmBE.webp" class="img-fluid" alt="Responsive image"><br>
                            </div>
                      	</div>
                        <p><b style="color: #f26c21;">Careers</b></p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Computer Engineer</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Innovative Engineer</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Problem-solver in digital innovation</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Software developer/programmer</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Entrepreneur/startup founder in computer industry</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Digital products designer</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Academic/Researcher in the field of digital innovation</p>

                     </div>
                  </div>
               </div>
               