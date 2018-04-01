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
         <h4 style="color: #f26c21;">Round 4 - General Admission</h4>
      </div>
      <div class="static_text2">
         <p>Application Submission Period: 6-10 June 2018</p>
         <p>Admission is based upon result of National Test Scores and GPAX with the following criteria and details of selection.</p>
         <div class="table-responsive table-bordered"  border-style: solid;border-color: coral;>
            <table class="table">
               <tr class="" style="background-color: #f38448; text-align: center;">
                  <td style="text-align: center;border: 1px solid #94999e;vertical-align: middle;"rowspan="3">Programs</td>
                  <td style="text-align: center;border: 1px solid #94999e;"colspan="6"  style="text-align: center;">Admission Requirement: GPAX and National Test Scores with the ratio as following</td>
                  <td style="text-align: center;border: 1px solid #94999e;vertical-align: middle;"rowspan="3">English Proficiency Test(IELT)*</td>
               </tr>
               <tr style="background-color: #f38448;text-align: center;">
                  <td style="text-align: center;border: 1px solid #94999e;"rowspan="2">GPAX</td>
                  <td style="text-align: center;border: 1px solid #94999e;"rowspan="2">O-NET</td>
                  <td style="text-align: center;border: 1px solid #94999e;"rowspan="2">GAT</td>
                  <td style="text-align: center;border: 1px solid #94999e;"colspan="3">PAT</td>
               </tr>
               <tr style="background-color: #f38448;text-align: center;">
                  <td style="text-align: center;border: 1px solid #94999e;">PAT 1</td>
                  <td style="text-align: center;border: 1px solid #94999e;">PAT 2</td>
                  <td style="text-align: center;border: 1px solid #94999e;">PAT 3</td>
               </tr>
               <tr class="" style="background-color: rgba(0,0,0,.05);">
                  <td style="text-align: center;border: 1px solid #94999e;">B.Eng. in Digital Innovation Engineering</td>
                  <td style="text-align: center;border: 1px solid #94999e;">20</td>
                  <td style="text-align: center;border: 1px solid #94999e;">30</td>
                  <td style="text-align: center;border: 1px solid #94999e;">15</td>
                  <td style="text-align: center;border: 1px solid #94999e;"></td>
                  <td style="text-align: center;border: 1px solid #94999e;">15</td>
                  <td style="text-align: center;border: 1px solid #94999e;">20</td>
                  <td style="text-align: center;border: 1px solid #94999e;"rowspan="4">6.0</td>
               </tr>
               <tr class="">
                  <td style="text-align: center;border: 1px solid #94999e;">B.A. in Public Affairs (Secondary School students from Science Program)</td>
                  <td style="text-align: center;border: 1px solid #94999e;">20</td>
                  <td style="text-align: center;border: 1px solid #94999e;">30</td>
                  <td style="text-align: center;border: 1px solid #94999e;">30</td>
                  <td style="text-align: center;border: 1px solid #94999e;">20</td>
                  <td style="text-align: center;border: 1px solid #94999e;"></td>
                  <td style="text-align: center;border: 1px solid #94999e;"></td>
               </tr>
               <tr  class="" style="background-color: rgba(0,0,0,.05);">
                  <td style="text-align: center;border: 1px solid #94999e;">B.A. in Public Affairs (Secondary School students from Social Science Program)</td>
                  <td style="text-align: center;border: 1px solid #94999e;">20</td>
                  <td style="text-align: center;border: 1px solid #94999e;">30</td>
                  <td style="text-align: center;border: 1px solid #94999e;">50</td>
                  <td style="text-align: center;border: 1px solid #94999e;"></td>
                  <td style="text-align: center;border: 1px solid #94999e;"></td>
                  <td style="text-align: center;border: 1px solid #94999e;"></td>
               </tr>
               <tr class="">
                  <td style="text-align: center;border: 1px solid #94999e;">B.A. in Public Affairs (Secondary School students from Science Program)</td>
                  <td style="text-align: center;border: 1px solid #94999e;">20</td>
                  <td style="text-align: center;border: 1px solid #94999e;">30</td>
                  <td style="text-align: center;border: 1px solid #94999e;">30</td>
                  <td style="text-align: center;border: 1px solid #94999e;">20</td>
                  <td style="text-align: center;border: 1px solid #94999e;"></td>
                  <td style="text-align: center;border: 1px solid #94999e;"></td>
               </tr>
            </table>
         </div>
         <p><strong>Remark</strong></p>
         <p>* English Proficiency Test Score: IELTS ≥6 or any other Standard English test result. Applicants without Standard English test must obtain GPAX in English not less than 3.50</p>
      </div>
   </div>
</div>