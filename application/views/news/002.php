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
                        <h4 style="color: #f26c21;"><?=$title ?></h4>
						<div class="news-date">
                     		<i class="fa fa-clock-o"></i> <?=$date ?>
                     	</div>                     
                     </div>
                     <div class="static_text2">
                     	<p class="text-center"><iframe width="560" height="315" src="https://www.youtube.com/embed/iK5i3tgY1d8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
                        <p>รายการ บ่ายนี้มีคำตอบ ตอน "ผงาด 3 วิทยาลัยนานาชาติ มหาวิทยาลัยวลัยลักษณ์ พร้อม!!!" ออกอากาศสด เมื่อวันจันทร์ที่ 29 มกราคม 2561 เวลา 13.00 -13.35 น. ทางสถานีโทรทัศน์ไทยทีวีสี ช่อง 9 อสมท. โดยมี ศาสตราจารย์ ดร.สมบัติ ธำรงธัญวงศ์ อธิการบดี ศาสตราจารย์ ดร.ทพ.สิทธิชัย ขุนทองแก้ว รักษาการแทนคณบดีวิทยาลัยทันตแพทยศาสตร์นานาชาติ ผู้ช่วยศาสตราจารย์ น.สพ.ดร.พีรศักดิ์ สุทธิโยธิน รักษาการแทนคณบดีวิทยาลัยสัตวแพทยศาสตร์อัครราชกุมารี และอาจารย์ ดร.จิตติมา ศังขมณี รักษาการแทนคณบดีวิทยาลัยนานาชาติ มหาวิทยาลัยวลัยลักษณ์ ร่วมรายการ</p>
                     	
                     </div>
                  </div>
               </div>
               