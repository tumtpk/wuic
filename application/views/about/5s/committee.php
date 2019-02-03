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
               <div class="col-lg-12">
                  <div class="static_main_content">
                     <div class="static_social">
                        <ul>
                           <li><a href="http://www.facebook.com/sharer.php?u=<?=current_url()?>"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="https://twitter.com/intent/tweet?text=Program+in+Logistics+Analytics+and+Supply+Chain+Management&url=<?=current_url()?>"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                     </div>
                     <div class="static_img">
                        <h4 style="color: #f26c21;">โครงสร้างคณะกรรมการ 5ส</h4>
                     </div>
                     <div class="static_text">
                        <div class="row text-center">
                           <div class="col-lg-3">
                              <img src="<?=base_url("public/img/page/5s/01.jpg") ?>" class="rounded" width="150"><br>
                              นางสาวนิธิวรรณ พรมแก้ว <br>
                              <span style="color: #f26c21;font-weight: 600;">ประธานกรรมการ 5 ส วิทยาลัยนานาชาติ</span>
                           </div>
                           <div class="col-lg-2">
                              <img src="<?=base_url("public/img/page/5s/02.jpg") ?>" class="rounded" width="130"><br>
                              Mr. Sotharorth Keo <br>
                              <span style="color: #f26c21;">กรรมการ</span>
                           </div>
                           <div class="col-lg-2">
                              <img src="<?=base_url("public/img/page/5s/03.png") ?>" class="rounded" width="130"><br>
                              อาจารย์สุชิตา มานะจิตต์ <br>
                              <span style="color: #f26c21;">กรรมการ</span>
                           </div>
                           <div class="col-lg-2">
                              <img src="<?=base_url("public/img/page/5s/04.jpg") ?>" class="rounded" width="130"><br>
                              นางสาวปานฤทัย ไชยสิทธิ์  <br>
                              <span style="color: #f26c21;">กรรมการ</span>
                           </div>
                           <div class="col-lg-2">
                              <img src="<?=base_url("public/img/page/5s/05.jpg") ?>" class="rounded" width="130"><br>
                              นางสาวนัฎญาพร สิทธิสุวรรณ  <br>
                              <span style="color: #f26c21;">กรรมการและเลขานุการ</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
   </section>
   <!--================End Static Area =================-->
</div>