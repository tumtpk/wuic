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
         <h4 style="color: #f26c21;">Round 3 - Joint Direct Admission</h4>
      </div>
      <div class="static_text2">
         <p>Application Submission Period: 9-13 May 2018</p>
         <p>Admission is based upon result of national educational examinations (NIETS - National Institute of Educational Testing Service) with the following criteria and details of selection.</p>
         <div class="table-responsive table-bordered"  border-style: solid;border-color: coral;>
            <table class="table">
               <tr class="" style="background-color: #f38448; text-align: center;">
                  <td style="text-align: center;border: 1px solid #94999e;vertical-align: middle;"rowspan="2">Programs</td>
                  <td style="text-align: center;border: 1px solid #94999e;vertical-align: middle;"rowspan="2">Number of accepted students</td>
                  <td style="text-align: center;border: 1px solid #94999e;vertical-align: middle;"rowspan="2">Secondary School Program Requirement</td>
                  <td style="text-align: center;border: 1px solid #94999e;"colspan="3"  style="text-align: center;">Admission Requirement: National Test Scores with the ratio as following</td>
                  <td style="text-align: center;border: 1px solid #94999e;vertical-align: middle; padding-right: 30px;padding-left: 30px;"rowspan="2">Remark</td>
               </tr>
               <tr style="background-color: #f38448;text-align: center;">
                  <td style="text-align: center;border: 1px solid #94999e;padding-right: 40px;padding-left: 40px;">O&#150NET</td>
                  <td style="text-align: center;border: 1px solid #94999e; padding-right: 45px;padding-left: 45px;">GAT/PAT </td>
                  <td style="text-align: center;border: 1px solid #94999e;padding-right: 40px;padding-left: 40px;">Common 9 Subjects</td>
               </tr>
               <tr class="" style="background-color: rgba(0,0,0,.05);">
                  <td style="text-align: center;border: 1px solid #94999e;">B.Eng. in Digital Innovation Engineering</td>
                  <td style="text-align: center;border: 1px solid #94999e;">30</td>
                  <td style="text-align: center;border: 1px solid #94999e;">Science</td>
                  <td style="text-align: center;border: 1px solid #94999e;">03-05=30 <br><u>Ratio</u><br>03=30%<br>04=40%<br>05=40%</td>
                  <td cellspacing="60" style="text-align: center;border: 1px solid #94999e;">GAT ≥ 160<br>
                     GAT + PAT1 ≥50<br>
                     GAT + PAT1, 2 ≥80<br>
                     GAT + PAT1, 3 ≥90<br>
                     <u>Ratio</u><br>
                     GAT =40%<br>
                     PAT1= 30%<br>
                     GAT + PAT1,2= 30%<br>
                     GAT + PAT1,3 =30%
                  </td>
                  <td style="text-align: center;border: 1px solid #94999e;"><u>Minimum</u><br>
                     Physics ≥ 25%<br>
                     English ≥ 30%<br>
                     Math 1≥ 25%<br>
                     <u>Ratio</u><br>
                     Physics 30%<br>
                     English 30%<br>
                     Math 1 40%
                  </td>
                  <td style="text-align: center;border: 1px solid #94999e;">Applicants can select and submit one of the test scores; O-NET, GAT/PAT or Common 9 Subjects.</td>
               </tr>
               <tr class="">
                  <td style="text-align: center;border: 1px solid #94999e;">B.A. in Public Affairs</td>
                  <td style="text-align: center;border: 1px solid #94999e;">40</td>
                  <td style="text-align: center;border: 1px solid #94999e;">All programs</td>
                  <td style="text-align: center;border: 1px solid #94999e;">01-03=30<br>
                     <u>Ratio</u><br>
                     01= 30%<br>
                     02= 30%<br>
                     03=40%
                  </td>
                  <td style="text-align: center;border: 1px solid #94999e;">GAT ≥180<br>
                     <u>Ratio</u><br>
                     GAT 100%
                  </td>
                  <td style="text-align: center;border: 1px solid #94999e;">Thai ≥ 55<br>
                     Social ≥35<br>
                     English ≥35<br>
                     <u>Ratio</u><br>
                     Thai 30%<br>
                     Social 30%<br>
                     English 40%
                  </td>
                  <td style="text-align: center;border: 1px solid #94999e;">Applicants can select and submit one of the test scores; O-NET, GAT/PAT or Common 9 Subjects.</td>
               </tr>
               <tr  class="" style="background-color: rgba(0,0,0,.05);">
                  <td style="text-align: center;border: 1px solid #94999e;">B.B.A. in Logistics Analytics Supply Chain Management</td>
                  <td style="text-align: center;border: 1px solid #94999e;">30</td>
                  <td style="text-align: center;border: 1px solid #94999e;">Science or Arts-math</td>
                  <td style="text-align: center;border: 1px solid #94999e;">03-04=30<br>
                     <u>Ratio</u><br>
                     50% each
                  </td>
                  <td style="text-align: center;border: 1px solid #94999e;">GAT ≥160<br>
                     PAT1 ≥ 50<br>
                     <u>Ratio</u><br>
                     GAT 50%<br>
                     PAT1 50%
                  </td>
                  <td style="text-align: center;border: 1px solid #94999e;">English ≥30%<br>
                     Math 1 ≥25%<br>
                     <u>Ratio</u><br>
                     English 50%<br>
                     Math 1 50%
                  </td>
                  <td style="text-align: center;border: 1px solid #94999e;">Applicants can select and submit one of the test scores; O-NET, GAT/PAT or Common 9 Subjects.</td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>