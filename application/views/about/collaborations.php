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
                        <p style="line-height: normal;"><strong><span>&nbsp;</span></strong></p>
                        <p style="line-height: normal;"><strong><span><h4 style="color: #f26c21;">International Collaborations</h4></span></strong></p>
                        <p><span style=" ">WUIC has numerous partnerships with renowned universities and institutions across the globe to expand academic collaborations ranging from student experience, teaching partnerships to research collaborations.</span></p>
                        <br>
                        <p><strong><span style=" ">Memorandums of Understanding (MoU)</span></strong></p>
                        <ul>
                        <li style="margin-left: .5in; text-indent: -.25in;">- <span style=" ">University of Information Science and Technology &ldquo;St. Paul the Apostle&rdquo;, Ohrid, Macedonia <a href="<?=base_url("public/file/MoU.pdf") ?>">Click</a></span></li>
                        <li style="margin-left: .5in; text-indent: -.25in;">- <span style=" ">Coventry University London, UK</span></li>
                        <li style="margin-left: .5in; text-indent: -.25in;">- <span style=" ">Middlesex University London, UK</span></li>
                        <li style="margin-left: .5in; text-indent: -.25in;">- <span style=" ">International Institute of Applied Informatics, Japan</span></li>
                        <li style="margin-left: .5in; text-indent: -.25in;">- <span style=" ">University of Essex, UK</span></li>
                        <li style="margin-left: .5in; text-indent: -.25in;">- <span style=" ">Macquarie Education Group Australia</span></li>
                        </ul>
                        <br>
                        <p><strong><span style=" ">Erasmus+ and International Exchange</span></strong></p>
                        <ul>
                        <li style="margin-left: .5in; text-indent: -.25in;">- <span style=" ">University of Information Science and Technology &ldquo;St. Paul the Apostle&rdquo;, Ohrid, Macedonia <a href="<?=base_url("public/file/IIA.pdf") ?>">Click</a></span></li>
                        </ul>
                        <p>
                        <div class="row justify-content-md-center">
                           <div class="col-md-4">
                              <a href="http://www.mdx.ac.uk/" target="_blank">
                              <div class="card" style="height: 200px;border: 0px;">
                                 <div class="card-body">
                                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                                    <div class="text-center">
                                          <img src="<?= base_url("public/img/news/u1.jpg"); ?>" class="img-thumbnail" style="width: 100%;border: 0px solid #ddd;"></img>
                                    </div>
                                 </div>
                              </div>
                              </a>
                           </div>
                           <div class="col-md-4">
                              <a href="https://www.essex.ac.uk/" target="_blank">
                              <div class="card" style="height: 200px;border: 0px;">
                                 <div class="card-body">
                                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                                    <div class="text-center">
                                          <img src="<?= base_url("public/img/news/u2.jpg"); ?>" class="img-thumbnail" style="width: 100%;border: 0px solid #ddd;"></img>
                                    </div>
                                 </div>
                              </div>
                              </a>
                           </div>
                           <div class="col-md-4">
                              <a href="http://www.coventry.ac.uk/london" target="_blank">
                              <div class="card" style="height: 200px;border: 0px;">
                                 <div class="card-body">
                                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                                    <div class="text-center">
                                          <img src="<?= base_url(); ?>public/img/news/u3.jpg" style="width: 60%;border: 0px solid #ddd;" alt="">
                                    </div>
                              </div>
                              </div>
                              </a>
                           </div>
                        </div>
                        <div class="row justify-content-md-center">
                           <div class="col-md-4">
                              <a href="http://www.iaiai.org/top" target="_blank">
                              <div class="card" style="height: 200px;border: 0px;">
                                 <div class="card-body">
                                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                                    <div class="text-center">
                                       <img src="<?= base_url("public/img/news/u4.png"); ?>" class="img-thumbnail" style="width: 60%;background-color: #ff000000;border-radius: 0rem;border-color: #ffffff00;">
                                    </div>
                                 </div>
                              </div>
                              </a>
                           </div>
                           <div class="col-lg-4">
                              <a href="http://uist.edu.mk/" target="_blank">
                              <div class="card" style="height: 200px;border: 0px;">
                                 <div class="card-body">
                                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                                    <div class="text-center">
                                       <img src="<?=base_url("public/img/about/UIST.png"); ?>" class="img-thumbnail" style="width: 60%;background-color: #ff000000;border-radius: 0rem;border-color: #ffffff00;">
                                    </div>
                                 </div>
                              </div>
                              </a>
                           </div>
                           <div class="col-lg-4">
                              <a href="http://www.mega.edu.au/" target="_blank">
                              <div class="card" style="height: 200px;border: 0px;">
                                 <div class="card-body">
                                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                                    <div class="text-center">
                                       <img src="<?=base_url("public/img/about/Mega.png"); ?>" class="img-thumbnail" style="width: 60%;background-color: #ff000000;border-radius: 0rem;border-color: #ffffff00;">
                                    </div>
                                 </div>
                              </div>
                              </a>
                           </div>
                        </div>
                        </p>
                  </div>
               </div>
               