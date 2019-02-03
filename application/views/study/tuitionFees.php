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
                        <h4 style="color: #f26c21;">Tuition Fees*</h4>
                     </div>
                     <div class="static_text">
                        <p>
                          <strong style="color: #f26c21;">Academic Year 2018/2019</strong>
                        </p>
                        <table class="table table-responsive table-striped table-bordered text-center">
                          <thead>
                            <tr class="" style="background-color: #f38448; text-align: center;">
                              <th style="vertical-align:  middle !important;">Program</th>
                              <th>Thai Students<br>(Per Semester)</th>
                              <th>International Students<br>(Per Semester)</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left" style="vertical-align:  middle !important;">B.Eng. (Digital Innovation Engineering)</td>
                              <td style="vertical-align:  middle !important;">125,600 THB</td>
                              <td>150,600 THB<br> (approx. USD 4,592)</td>
                            </tr>
                            <tr>
                              <td class="text-left" style="vertical-align:  middle !important;">B.A. (Public Affairs)</td>
                              <td style="vertical-align:  middle !important;">63,100 THB</td>
                              <td>81,850 THB<br> (approx. USD 2,495)</td>
                            </tr>
                            <tr>
                              <td class="text-left" style="vertical-align:  middle !important;">LL.B. (Legal Applications)</td>
                              <td style="vertical-align:  middle !important;">90,600 THB</td>
                              <td>90,600 THB<br> (approx. USD 2,762)</td>
                            </tr>
                            <tr>
                              <td class="text-left" style="vertical-align:  middle !important;">B.B.A. (Logistics Analytics and Supply Chain Management)</td>
                              <td style="vertical-align:  middle !important;">106,850 THB</td>
                              <td>125,600 THB<br> (approx. USD 3,829)</td>
                            </tr>
                            <tr>
                              <td class="text-left" style="vertical-align:  middle !important;">B.B.A. (Acountancy)</td>
                              <td style="vertical-align:  middle !important;">75,600 THB</td>
                              <td>90,600 THB<br> (approx. USD 2,762)</td>
                            </tr>
                          </tbody>
                        </table>
                        <p>
                            * This fee include charges for Extra-curricular activities, laboratories, library, computer facilities, sport center, In-campus transportation and group accident insurance.
                        </p><br>
                        <p>
                            <strong style="color: #f26c21;">Additional Fees</strong><br>
                            - Damage Deposit (refundable after graduation or dismissal) 5,000 Baht <br>
                            - Dormitory Fees <br>
                            - Late enrollment penalty 25 baht/day <br>
                            - Late payment penalty (tuition fee) 10 baht/day
                        </p>
                        <p>
                        Remark: <br>
                            <small> - Fees do not cover meals.</small><br>
                            <small> - Foreign Exchange Rates as of 28 December 2018: 32.8 Baht/US Dollar.</small><br/>
                            <small> - All fees are subject to change due to currency exchange rates.</small>
                        </p>
                        
                     </div>
                  </div>
               </div>
               