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
                        <h4 style="color: #f26c21;">Work with Us</h4>
                     </div>
                     <div class="static_text2">
                        <p>Open Faculty Positions</p>
                        <ul>
                           <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Logistics Analytics and Supply Chain Management Program</p>
                           <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Digital Innovation Engineering Program</p>
                           <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Public Affairs Program</p>
                           <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Tourism and Hospitality Management Program</p>
                           <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Accounting Program</p>                        	
                        </ul>
                        <p><b>Download :</b> <br/><span style="font-size: 14px">
                        
                        Job Description <a href="<?=base_url("public/file/Academic Job Announcement.pdf"); ?>">Click</a><br/>
                        Application Form <a href="https://hr.wu.ac.th/JU/application%20_academic_en.pdf">Click</a><br/>
                     	</span></p></br>
                     	<span style="font-size: 14px;">
                     		Further information, please contact us at wuic@wu.ac.th or Tel. +66 (0)7567 2426, +66 (0)7567 2427 Fax. +66 (0)7567 2424<br/>
                     		Application Deadline: Applications and nominations will be considered until the positions are filled
                     	</span>
                     </div>
                  </div>
               </div>
               