<section class="banner_area">
   <div class="container">
      <div class="banner_text_inner">
         <h4><span style="font-family:'Bodoni Ornaments';"><span style="color: #8551a1;text-shadow: rgba(255, 255, 255, 0.85) 3px -2px;">We build </span><span style="color: #f27027;text-shadow: rgba(255, 255, 255, 0.85) 3px -2px;">“Next Generation<br /> Global leaders”</span></span></h4>
         <?php 
            if(isset($breadcrumb)){
                if(sizeof($breadcrumb) > 0){
                     echo " <ul>";
                     foreach ($breadcrumb as $array){
                         echo '<li><a href="'.$array['url'].'"><i class="'.$array['icon'].'" aria-hidden="true"></i>'.$array['page'].'</a></li>';
                     }
                     echo " </ul>";
                }
             }
         ?>
      </div>
   </div>
</section>