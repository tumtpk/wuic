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
                           <li><a href="https://twitter.com/intent/tweet?text=<?=$title ?>&url=<?=current_url()?>"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                     </div>
                     <div class="static_img">
<!--                         <img class="img-fluid" src="img/static-1.jpg" alt=""> -->
                        <h4 style="color: #f26c21;"><?=$title ?></h4>
						      <div class="news-date">
                     		<!-- <i class="fa fa-clock-o"></i>  -->
                     	</div>                     
                     </div>
                     <div class="media text-center">
                     	<div class="col-md-2"></div>
                     	<div class="col-md-8 text-center">
                            <img src="<?=$picture ?>" class="img-fluid">
                     	</div>
                     </div>
                     <div class="static_text2">
                        <?=$content ?>
                     </div>
                  </div>
               </div>
               