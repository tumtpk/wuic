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
<!--                         <img class="img-fluid" src="img/static-1.jpg" alt=""> -->
                        <h4 style="color: #f26c21;">Bachelor of Arts in Public Affairs</h4><br>
                     </div>
                     <div class="static_text2">
                        <div class="form-group row text-center">
                           	<div class="col-md">
                              	<img src="<?=base_url() ?>public/img/page/PAre-300x128.png" class="img-fluid" alt="Responsive image"><br>
                            </div>
                      	</div>
                        <p>This program aims to produce graduates with a globalization mindset. Able to quickly respond to the global changes consciously and through positive thinking. Commitment to self-development and transformational leadership through creative innovation in order to provide a competitive advantage in public affairs.</p><br>
                        <h6>Majors</h6>
                        <p>1. Public Policy and Global Affairs</p>
                        <p>2. Public Governance</p><br>
                        <p><b style="color: #f26c21;">Careers</b></p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> International organization/overseas officer</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Independent organization officers</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Diplomat</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Politicians</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Local and international private organization officers</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Research and development Projects officers</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Academic officers</p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Administrative officers</p>
                    </div>
                  </div>
               </div>
               