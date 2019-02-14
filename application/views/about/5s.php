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
               <div class="col-lg-12">
                  <div class="static_main_content">
                     <div class="static_social">
                        <ul>
                           <li><a href="http://www.facebook.com/sharer.php?u=<?=current_url()?>"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="https://twitter.com/intent/tweet?text=Program+in+Logistics+Analytics+and+Supply+Chain+Management&url=<?=current_url()?>"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                     </div>
                     <div class="static_img">
                        <h4 style="color: #f26c21;">5s International College</h4>
                     </div>
                     <div class="static_text">
                        <div style="background-color: cornsilk;border-radius: 5px;">
                           <div class="row" style="padding-top: 50px;">
                              <div class="col-lg-3 text-center">
                                 <a href="<?=base_url("about/committee") ?>"><span style="font-size: 80px;"><i class="fa fa-users" aria-hidden="true"></i></span><br><br>
                                 <h5>คณะกรรมการ 5ส</h5></a>
                              </div>
                              <div class="col-lg-3 text-center">
                                 <a href="<?=base_url("about/areadivision") ?>"><span style="font-size: 80px;"><i class="fa fa-map-o" aria-hidden="true"></i></span><br><br>
                                 <h5>การแบ่งพื้นที่ 5ส</h5></a>
                              </div>
                              <div class="col-lg-3 text-center">
                                 <a href="<?=base_url("about/goal") ?>"><span style="font-size: 80px;"><i class="fa fa-bullseye" aria-hidden="true"></i></span><br><br>
                                 <h5>เป้าหมายการดำเนินงาน</h5></a>
                              </div>
                              <div class="col-lg-3 text-center">
                                 <a href="#" style="pointer-events: none;"><span style="font-size: 80px;"><i class="fa fa-calendar" aria-hidden="true"></i></span><br><br>
                                 <h5>แผนปฏิบัติการ 5ส</h5></a>
                              </div>
                           </div>
                           <div class="row" style="padding-top: 20px;padding-bottom: 50px;">
                              <div class="col-lg-3 text-center">
                                 <a href="<?=base_url("about/standard") ?>"><span style="font-size: 80px;"><i class="fa fa-star-o" aria-hidden="true"></i></span><br><br>
                                 <h5>มาตรฐานกลาง</h5></a>
                              </div>
                              <div class="col-lg-3 text-center">
                                 <a href="<?=base_url("about/audit") ?>"><span style="font-size: 80px;"><i class="fa fa-check-square-o" aria-hidden="true"></i></span><br><br>
                                 <h5>Self audit</h5></a>
                              </div>
                              <div class="col-lg-3 text-center">
                                 <a href="#" style="pointer-events: none;"><span style="font-size: 80px;"><i class="fa fa-paint-brush" aria-hidden="true"></i></span><br><br>
                                 <h5>Before-after</h5></a>
                              </div>
                              <div class="col-lg-3 text-center">
                                 <a href="#" style="pointer-events: none;"><span style="font-size: 80px;"><i class="fa fa-line-chart" aria-hidden="true"></i></span><br><br>
                                 <h5>ผลประเมิน 5ส หน่วยงาน</h5></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
   </section>
   <!--================End Static Area =================-->
</div>
               