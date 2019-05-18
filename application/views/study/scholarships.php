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
                        <h4 style="color: #f26c21;">Undergraduate Excellence Scholarships</h4>
                     </div>
                     <br>
                     <div class="static_text2">
                     	<p>Walailak University International College (WUIC) offers full and partial Tuition Waiver Scholarships for the admission of students with excellent academic records.</p>
                        <p>The scholarship scheme is for students to study for their 4-year Bachelor’s Degree in the following international programs, starting from the 1<sup>st</sup> semester, Academic Year 2019 (August 2019 – May 2020).</p>
                     	<p style="margin-left: 30px"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Digital Innovation Engineering (B.Eng.)</p>
                        <p style="margin-left: 30px"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Logistic Analytics and Supply Chain Management (B.B.A.) </p>
                        <p style="margin-left: 30px"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Laws and Legal Applications (LL.B.)</p>
                        <p style="margin-left: 30px"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Accountancy (B.B.A.)</p>
                     	
                     	<p>The deadline for the applications for scholarship is on 10<sup>th</sup> May 2019.  Interested person, can submit the application and required documents online directly to Walailak University International College (WUIC) via E-mail: <strong>wuic.scholarship@mail.wu.ac.th</strong></p>
                     	<p><b>Download :</b> <br/><span style="font-size: 14px">
                     	
                     	WUIC Scholarships <a href="https://drive.google.com/file/d/1ykK4_BRV8_8OCX20rfOnmx9k_Xj95Rhc/view?usp=sharing" target="_blank">Click</a><br/>
                     	Scholarship Application Form <a href="<?=base_url("public/file/WUICScholarshipform.pdf") ?>">Click</a></span></p>
                        
                        <p><b>Sent your documents to email : wuic.scholarship@mail.wu.ac.th</b></p>
                     </div>
                     
                  </div>
               </div>
               