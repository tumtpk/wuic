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
         <h4 style="color: #f26c21;">Round 1 - Portfolio</h4>
      </div>
      <div class="static_text2">
         <p>Application Submission Period: 1 – 15 Dec 2018 <b style="background-color: yellow; color: black;">extended to 23 Dec 2018</b></p><br>
         <div class="table-responsive table-bordered"  border-style: solid;border-color: coral;>
         <table class="table">
            <tbody>
               <tr style="background-color: #f38448; text-align: center;">
                  <td  rowspan="2">Programs</td>
                  <td  rowspan="2">Number of accepted students</td>
                  <td rowspan="2">Secondary School Program Requirement</td>
                  <td colspan="3">Admission Requirement</td>
               </tr>
               <tr style="background-color: #f38448; text-align: center;">
                  <td style="width:100px;">GPAX*</td>
                  <td>Portfolio</td>
                  <td><span>English Proficiency Test (IELT)**</span></td>
               </tr>
               <tr style="background-color: rgba(0,0,0,.05);">
                  <td><span>B.Eng. in Digital Innovation Engineering</span></td>
                  <td class="text-center">20</td>
                  <td class="text-center">Science</td>
                  <td class="text-center" rowspan="5" style="vertical-align: middle;">&ge; 2.50</td>
                  <td class="text-center" rowspan="5" style="vertical-align: middle;">✓</td>
                  <td class="text-center" rowspan="5" style="vertical-align: middle;">✓<br> Except for international students and students from native English-speaking countries</td>
               </tr>
               <tr>
                  <td><span>B.A. in Public Affairs</span></td>
                  <td class="text-center">20</td>
                  <td class="text-center"><span>All programs</span></td>
               </tr>
               <tr class="" style="background-color: rgba(0,0,0,.05);">
                  <td>LL.B. in Legal Applications</td>
                  <td class="text-center">20</td>
                  <td class="text-center"><span>All programs</span></td>
               </tr>
               <tr>
                  <td><span>B.B.A. in Logistic Analytics and Supply Chain Management</span></td>
                  <td class="text-center">20</td>
                  <td class="text-center"><span>Science/Arts-math</span></td>
               </tr>
               <tr class="" style="background-color: rgba(0,0,0,.05);">
                  <td>B.B.A. in Acountancy</td>
                  <td class="text-center">20</td>
                  <td class="text-center">Science/Arts-math</td>
               </tr>
            </tbody>
         </table>
         <br>
         <p>Remark: </p>
         <p>* <strong>GPAX</strong><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Applicants who are currently studying in senior high school must attain GPA of 5 semesters (Mattayom 4-6).<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. In case that applicants use a system different from the GPA system, WUIC may ask for a detailed method of evaluation of the scores with their scales.
         </p>
         <p>** <strong>English Proficiency Test</strong> All applicants are required to prove that they can use English to a standard that will allow them to study their programme. Applicants can do this in a number of ways:<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Applicants must submit valid English Proficiency Test score: TOEFL IBT 61 or IELTS 6.0 or any other Standard English Test result.<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. If Applicants are not a national of a majority English-speaking country, but have graduated from an institution in a majority English-speaking country, you can use your degree certificate to prove your English language ability.<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Applicants without Standard English Test result must obtain GPAX in English not less than 3.50
         </p>
         </div>
      </div>
   </div>
</div>