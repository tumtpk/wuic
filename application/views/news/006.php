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
                        <h4 style="color: #f26c21;">Second Call for Full Fees Waiver Scholarships</h4><br/>
                        <div class="col-md-12"></div>
                     </div>
                     <div class="static_text2">
                        <div class="form-group row text-center">
                           	<div class="col-md-12">
                           		<iframe src="https://docs.google.com/viewer?url=<?=base_url() ?>public/file/Call for Full Tuition Waiver Scholarships_13062018.pdf&embedded=true" style="width:100%; height:600px" frameborder="0"></iframe>
<!--                               	<img src="public/img/2nd call1.jpg" class="img-fluid" alt="Responsive image"><br> -->
                            </div>
                      	</div>
                      	
                      	<p><b>Download :</b> <br/><span style="font-size: 14px">
                     	
                     	Second Call for Full Fees Waiver Scholarships <a href="<?=base_url("public/file/Call for Full Tuition Waiver Scholarships_13062018.pdf") ?>">Click</a></span></p>
                        
                    </div>
                  </div>
               </div>
               