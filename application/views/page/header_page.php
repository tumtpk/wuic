<section class="banner_area">
   <div class="container">
      <div class="banner_text_inner">
         <h4>Walailak</h4>
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