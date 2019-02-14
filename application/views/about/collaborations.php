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
                        </ul>
                        <br>
                        <p><strong><span style=" ">Erasmus+ and International Exchange</span></strong></p>
                        <ul>
                        <li style="margin-left: .5in; text-indent: -.25in;">- <span style=" ">University of Information Science and Technology &ldquo;St. Paul the Apostle&rdquo;, Ohrid, Macedonia <a href="<?=base_url("public/file/IIA.pdf") ?>">Click</a></span></li>
                        </ul>
                        <p>
                           <div class="row justify-content-md-center">
                              <div class="col-lg-3">
                                 <a href="http://uist.edu.mk/" target="_blank">
                                    <img src="<?=base_url("public/img/about/UIST.png"); ?>" style="width:100%">
                                 </a>
                              </div>
                           </div>
                        </p>
                  </div>
               </div>
               