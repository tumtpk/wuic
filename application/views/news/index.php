<div class="container">
   <!--================Static Area =================-->
   <section class="static_area">
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
                        <h4>Activities</h4>
                     </div><br>
                     <div class="static_text2">
                        <?php foreach ($news as $key => $rows) { if($key != 0){?>
                        <div class="row">
                           <div class="col-md">
                              <div class="row card flex-md-row box-shadow h-md-250" style="padding: 10px 0px 10px 0px;">
                                 <div class="col-md-3 text-center">
                                    <img src="<?=$rows['picture'] ?>" width="200" class="rounded">
                                 </div>
                                 <div class="col-md-9">
                                    <h5><?=title($rows['title']) ?></h5>
                                    <div class="news-date">
                                       <?=$rows['create_date'] ?>
                                    </div>
                                    <div>
                                       <?=news($rows['content']) ?>
                                       <a href="<?=base_url()."news/".$key ?>">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php }} ?>
                      </div>
                  </div>
               </div>
               