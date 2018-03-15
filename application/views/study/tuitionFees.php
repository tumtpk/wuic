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
                        <img class="img-fluid" src="img/static-1.jpg" alt="">
                        <h4 style="color: #f26c21;">Tuition Fees</h4>
                     </div>
                     <div class="static_text">
                     	<span style="color: #f26c21;">Bachelor’s Degree (Academic Year 2018)</span>
                        <table class="table table-responsive table-striped table-bordered text-center">
                          <thead>
                            <tr class="" style="background-color: #f38448; text-align: center;">
                              <th rowspan="3" style="vertical-align:  top !important;">Degree</th>
                              <th rowspan="3" style="vertical-align:  top !important;">Academic Program</th>
                              <th colspan="4">Fees / Semester (Baht)</th>
                            </tr>
                            <tr style="background-color: #f38448; text-align: center;">
                              <th colspan="2">Thai Students</th>
                              <th colspan="2">International Students</th>
                            </tr>
                            <tr  style="background-color: #f38448; text-align: center;">
                              <th>Tuition Fees</th>
                              <th>Extra Fees</th>
                              <th>Tuition Fees</th>
                              <th>Extra Fees</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-left">B.Eng.</td>
                              <td class="text-left">Digital Innovation Engineering</td>
                              <td>52,500</td>
                              <td>72,500</td>
                              <td>52,500</td>
                              <td>97,500</td>
                            </tr>
                            <tr>
                              <td class="text-left">B.Eng.</td>
                              <td class="text-left">Public Affairs</td>
                              <td>45,000</td>
                              <td>17,500</td>
                              <td>45,000</td>
                              <td>36,250</td>
                            </tr>
                            <tr>
                              <td class="text-left">B.B.A.</td>
                              <td class="text-left">Logistics Analytics and Supply Chain Management</td>
                              <td>45,000</td>
                              <td>61,250</td>
                              <td>45,000</td>
                              <td>80,000</td>
                            </tr>
                          </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               