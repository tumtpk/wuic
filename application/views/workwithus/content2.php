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
                        <p><strong>Walailak University International College (WUIC), Walailak University, Nakhon Si Thammarat, Thailand, is currently seeking faculty members with the following qualifications:</strong></p>
                        <p> 1. Any nationalities who can communicate verbal/written in English fluently and</p>
                        <p> 2. Hold a doctoral degree from countries that use English as a main language in the areas stated in each group of positions as following:</p>
                           <ul style="padding-left:20px">
                           <li><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Group 1: 2 Lecturers for Logistics Analytics and Supply Chain Management Program: Business, Engineering, Science or related fields with specialty in logistics and supply chain.</li>
                           <li><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Group 2: 4 Lecturers for Digital Innovation Engineering Program: Engineering, Science or related field of computer including Innovation Design and Digital Technology, and Entrepreneurship.</li>
                           <li><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Group 3: 4 Lecturers for Tourism and Hospitality Management Program: Tourism and Hospitality Management, Business Management or related fields.</li>
                           <li><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Group 4: 2 Lecturers for Accounting Program: Accounting, International Accounting.</li>
                           <li><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Group 5: 2 Lecturers for the Law and Legal Studies Program: Law.</li>
                           </ul>
                        <p>3. Salary rate is commensurate with level of education and experience. The salary for PhD is 40,000-80,000 THB depending on experience. Some top-up money, up to 12,000 THB, may be considered.</p>
                        <p>4. Medical and other benefits including provident fund, housing provided.<br /> <br /> <strong>Please fill out the Application Form (</strong><strong><a href="<?=base_url("public/file/WUIC-APPLICATION-FORM.DOCX") ?>">click</a></strong><strong>) and send it to our email: </strong><strong>wuic@wu.ac.th</strong></p>
                        <p>Further information, please contact us at wuic@wu.ac.th or Tel. +66 (0)7567-2426 Fax. +66 (0)7567-2424</p>
                        <p>Application Deadline: Applications and nominations will be considered until the positions are filled</p>
                        <br>
                        <p>
                           *รายละเอียดการรับสมัครพนักงานสายวิชาการ<br>
                           <iframe src="https://drive.google.com/file/d/1Bp6rN_9qE6TZLQXRaRMeXgSF9yIef6O_/preview" style="width:100%; height:1000px"></iframe>
                        </p>
                     </div>
                  </div>
               </div>
               