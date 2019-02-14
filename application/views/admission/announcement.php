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
<!--          <img class="img-fluid" src="img/static-1.jpg" alt=""> -->
         <h4 style="color: #f26c21;">Admission Announcement</h4>
         <br>
         <div class="static_text">
            <a name="01"></a>
            <h5 style="color: #f26c21;">Announcement of Successful Applicants Admitted to 2019 Academic year (1<sup>st</sup> Round)</h5>
            <img src="<?=base_url("public/img/news/announcement/01.png") ?>">
            <a name="02"></a>
            <h5 style="color: #f26c21;">Announcement of Successful Applicants for 4 Years Scholarships for 2019-2022 (1<sup>st</sup> Round)</h5>
            <img src="<?=base_url("public/img/news/announcement/02.png") ?>">
         </div>
      </div>
   </div>
</div>