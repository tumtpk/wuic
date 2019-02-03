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
                        <h4 style="color: #f26c21;">Transpotation on Campus</h4>
                     </div>
                     <div class="static_text">
                        <h5>WU Electric Shuttle Car Service</h5>
                        <br>
                        <img src="<?= base_url(); ?>public/img/trans.jpg" style="width : 90%" alt="">
                        <p>WU electric shuttle car service team introduces you the shuttle car stop usage guidelines for WU students to reach destination faster and safer</p>
                     </div>
                     <div class="static_text2">
                     <div class="page-newsDetail">
                    <p>
<img src="https://www.wu.ac.th/walaiweb/images/editor/images/electrain/WUshuttlebussystem.png" width="100%">
</p>

<p align="center">
	<strong>Travelling from Activity Canteen to the following Buildings</strong></p>
<p style="font-weight: 500;">
	1.&nbsp;&nbsp;&nbsp;To Lecture Buildings, Canteen 4, Digital Center, Library, WU Hospital, and area in front of campus, please use the shuttle service at Larn Sai station (opposite to Activity Canteen)</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Lecture Buildings (1, 3, 4, 5, and 7), please take Line 1 (Blue Line) to Thaiburi station and continue to walk under the covered walkways to the desired lecture building.</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Canteen 4, Digital Center, and Library, please take Line 1 (Blue Line) to Thaiburi station and continue with Line 2 (Red Line) to your destination.</p>
<p style="margin-left:72pt;">
	Note: During weekdays’ rush hour from 7.00 - 8.30 am and after 5 pm, and throughout the day on holidays, students can take Blue/Red Line to the Library station.</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To WU Hospital and area in front of campus, please take Line 5 (Green Line)&nbsp;</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To shorten the travelling time during the rush hour while you are at Larn Sai station, please line up in 3 lines as suggested per below:&nbsp;</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 1 Travel to Thaiburi station</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 2 Travel to Canteen 4, Digital Center, and Library (During the rush hour and in late afternoon)&nbsp;</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 3 Travel to the area in front of campus</p>
<p style="font-weight: 500;">
	2.&nbsp;&nbsp;&nbsp;To Architect Building, Scientific Lab Buildings, Innovation Building, and Academic Buildings, please use the shuttle service at ATM station (ATM area near Activity Canteen)</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Architect Building, please take Line 1 (Blue Line) to Architect station</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Scientific Lab Buildings, Innovation Building, and Academic Buildings, please tale Line 1 (Blue Line) to Architect station and continue with Line 4 (Purple Line) to your destination.</p>
<p style="font-weight: 500;">
	3.&nbsp;&nbsp;&nbsp;To Dormitories (1, 2, 3, 11, 13, and 14), please use the shuttle service at Larn Sai station (exclude the rush hour)&nbsp;</p>
<p style="font-weight: 500;">
	4.&nbsp;&nbsp;&nbsp;To Dormitories (4, 5, 7, 10, 16, 17, and 18), please use the shuttle service at ATM station (exclude the rush hour)</p>
<p align="center">
	<strong>Travelling from Thaiburi and Lecture Buildings (1, 3, 5, and 7) to the following Buildings</strong></p>
<p style="font-weight: 500;">
	1.&nbsp;&nbsp;&nbsp;To Dormitory, please wait at the opposite side of the building to get into Line 1 (Blue Line) to Larn Sai station (Students can tell the driver to drop you off in front of your dormitory except during the rush hour)</p>
<p style="font-weight: 500;">
	2.&nbsp;&nbsp;&nbsp;To Canteen 4, Digital Center, and Library, please use the service at the opposite side of the building to get into Line 2 (Red Line)&nbsp;</p>
<p style="font-weight: 500;">
	3.&nbsp;&nbsp;&nbsp;To Architect Building, Scientific Lab Buildings, Innovation Building, and Academic Buildings</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Architect Building, please wait for shuttle car at the same side of the building to get into Line 2 (Red Line) to Architect station</p>
<p style="margin-left:72pt;">
	Note: During the class-switching hours, students can use the shuttle service at Lecture Building 1-3 station (The station is between lecture building 1 and lecture building 3) in order to travel to Architect Building</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Scientific Lab Buildings, Innovation Building, and Academic Buildings, please wait for shuttle car at the same side of the building to get into Line 2 (Red Line) to Architect station and continue with Line 4 (Purple Line) to your destination</p>
<p style="margin-left:72pt;">
	Note: Shuttle cars to Architect Building are only available from 8.30 am – 5.00 pm</p>
<p style="font-weight: 500;">
	4.&nbsp;&nbsp;&nbsp;To WU Hospital and area in front of campus, please wait at the opposite side of the building to get into Line 5 (Green Line)</p>
<p>
	To shorten the travelling time during the rush hour while you are at Thaiburi station, please line up in 4 lines as suggested per below:&nbsp;</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 1 Travel to Larn Sai station</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 2 Travel to Architect station</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 3 Travel to Canteen 4, Digital Center, and Library&nbsp;</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 4 Travel to the area in front of campus</p>
<p align="center">
	<strong>Travelling from Architect Building to the following Buildings</strong></p>
<p style="font-weight: 500;">
	1.&nbsp;&nbsp;&nbsp;To Activity Canteen and Dormitory Area, please take Line 1 (Blue Line) at Architect station (facing the dormitory side) to ATM station (Students can tell the driver to drop you off in front of your dormitory except during the rush hour)</p>
<p style="font-weight: 500;">
	2.&nbsp;&nbsp;&nbsp;To Lecture Buildings, Canteen 4, Digital Center, Library, Scientific Lab Buildings, Innovation Building, and Academic Buildings, please use the shuttle service at Architect station 2 (facing the lab building side)</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Lecture Buildings, please take Line 2 (Red Line) to Thaiburi station and continue to walk under the covered walkways to the desired lecture building. (During the class-switching hours, shuttle cars will also go to Lecture Building 1-3 station)</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Canteen 4, Digital Center, and Library, please take Line 2 (Red Line) to your destination.</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Scientific Lab Buildings, please take Line 4 (Purple Line) to Lab 8 station and continue to walk to the desired building.</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Innovation Building, please take Line 4 (Purple Line)</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Academic Buildings, please take Line 4 (Purple Line) to Academic Building 5 station and continue to walk under the covered walkways to desired building.</p>

<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To shorten the travelling time during the rush hour while you are at Architect station 2, please line up in 4 lines as suggested per below:&nbsp;</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 1 Travel to Thaiburi station, Digital Center, Canteen 4, and Library</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 2 Travel to Lecture Building 1-3 station (Only during the class-switching hours)&nbsp;</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 3 Travel to Lab Buildings</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 4 Travel to Innovation Building and Academic Buildings</p>

<p align="center">
	<strong>Travelling from Canteen 4, Digital Center, and Library by Red Line to the Architect station</strong></p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;During the rush hour, please only use shuttle car service at Canteen 4 station.&nbsp;</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;During normal working hours, shuttle cars will depart from the Library station every 10 minutes.</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shuttle car service is available at the Library station until 8.45 pm.&nbsp;</p>
<p align="center">
	<strong>Travelling from Lab 8 station, Innovation Building, and Academic Building 5 by Purple Line to the Architect station</strong></p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;During the rush hour, shuttle car service will operate from and to above stations.</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;During normal working hours, shuttle cars will depart from Academic Building 5 every 10 minutes.</p>
<p style="margin-left:72pt;">
	·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shuttle car service is not available after the last class at above buildings.</p>                </div>
                     </div>
                  </div>
               </div>
               