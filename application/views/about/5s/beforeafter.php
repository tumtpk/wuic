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
                        <h4 style="color: #f26c21;">Before-after</h4>
                     </div>
                     <div class="static_text">
                        <div class="row">
                           <div class="col-md-6">
                              <img src="<?=base_url("public/img/5s/1.jpg")?>" width="100%" class="rounded">
                           </div>
                           <div class="col-md-6">
                              <img src="<?=base_url("public/img/5s/2.jpg")?>" width="100%" class="rounded">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <img src="<?=base_url("public/img/5s/3.jpg")?>" width="100%" class="rounded">
                           </div>
                           <div class="col-md-6">
                              <img src="<?=base_url("public/img/5s/4.jpg")?>" width="100%" class="rounded">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               