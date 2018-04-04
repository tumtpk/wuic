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
                     	<p>The WUIC Undergraduate Excellent Scholarships program aims to encourage the admission of students possessing excellent academic records and also to encourage scholarship recipients to make satisfactory academic progress towards the completion of their 4 years degree.</p>
                        <p>WUIC offers a number of full and partial scholarships to qualified students. </p>
                     	<p><b>Download :</b> <br/><span style="font-size: 14px">
                     	
                     	WUIC Scholarships <a href="<?=base_url("public/file/2018-02-21WUICScholarships.pdf") ?>">Click</a><br/>
                     	WUIC Scholarship Recommendation Letter <a href="<?=base_url("public/file/WUIC Scholarship Recommendation Letter.pdf") ?>">Click</a><br/>
                     	Scholarship Application Form <a href="<?=base_url("public/file/WUIC Scholarship form.pdf") ?>">Click</a></span></p>
                        
                        <p><b>Sent your documents to email : wuic@wu.ac.th</b></p>
                     </div>
                     
                  </div>
               </div>
               