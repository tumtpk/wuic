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
                        <h4 style="color: #f26c21;">International Students and Non TCAS applicants</h4>
                     </div>
                     <div class="static_text2">
                        <p ><b>Admission Criteria</b></p>
                        <p>Please select and submit one of standardized test scores with minimum required as presented below.</p>
                        <div class="table-responsive table-bordered"  border-style: solid;border-color: coral;>
                            <table class="table">
                                    <tr class="" style="background-color: #f38448; text-align: center;">
                                        <td style="text-align: center;border: 1px solid #94999e;vertical-align: middle;" rowspan="2"><b>Test</b></td>
                                        <td style="text-align: center;border: 1px solid #94999e;vertical-align: middle;" rowspan="2"><strong>Subjects</strong></td>
                                        <td style="text-align: center;border: 1px solid #94999e;" colspan="3"><strong>Minimum Score</strong></td>
                                    </tr>
                                    <tr style="background-color: #f38448;text-align: center;">
                                        <td style="text-align: center;border: 1px solid #94999e;"><strong>Digital Innovation Engineering</strong></td>
                                        <td style="text-align: center;border: 1px solid #94999e;"><strong>Public Affairs</strong></td>
                                        <td style="text-align: center;border: 1px solid #94999e;"><strong>Logistic Analytics and Supply Chain Management </strong></td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" rowspan="3"> <strong>SAT I</strong></td>
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">600</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">600</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Critical Reading</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">350</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">350</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">350</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Writing </td>
                                        <td style="text-align: center;border: 1px solid #94999e;">350</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">350</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">350</td>
                                    </tr>
                                    <tr class="">
                                        <td   style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" rowspan="2"> <strong>New SAT I</strong></td>
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">620</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">620</td>
                                    </tr>
                                    <tr class="">
                                        <td style="border: 1px solid #94999e;">Evidence-Based Reading and Writing</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">350</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">350</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">350</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td   style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" rowspan="2"> <strong>SAT II</strong></td>
                                        <td style="border: 1px solid #94999e;">Mathematics (Level 2)</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">600</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">600</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Physics</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">600</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="">
                                        <td   style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" rowspan="4"> <strong>ACT</strong></td>
                                        <td style="text-align: center;border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" rowspan="4">Composite Score 21.5 from 36 (Math ≥ 20 and Science ≥ 20)</td>
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" rowspan="4">Composite Score 21.5 from 36 (English ≥ 20 and Reading ≥ 20)</td>
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" rowspan="4">Composite Score 21.5 from 36 (Math ≥ 20 and English ≥ 20)</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center;border: 1px solid #94999e;">Science</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center;border: 1px solid #94999e;">English</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center;border: 1px solid #94999e;">Reading</td>
                                    </tr>

                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td   style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" rowspan="5"> <strong>GED</strong></td>
                                        <td style="text-align: center;border: 1px solid #94999e;">Reasoning Through Language Arts</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">160</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">160</td>
                                       
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center;border: 1px solid #94999e;">Mathematic Reasoning</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">160</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">160</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center;border: 1px solid #94999e;">Science</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">160</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center;border: 1px solid #94999e;">Social Studies</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">160</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td   style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" colspan="4">Composite Score at least 580 from 800</td>
                                    </tr>

                                    <tr class="">
                                        <td   style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" rowspan="2"> <strong>IB (Higher or Standard Level)</strong></td>
                                        <td style="text-align: center;border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">≥ 4</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">≥ 4</td>
                                       
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center;border: 1px solid #94999e;">Physics</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">≥ 4</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                    </tr>

                                     <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td   style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" rowspan="8"> <strong>GCSE, IGCSE, or ‘O’ Level ( 5 Subjects) and GCE ‘AS’, or ‘A’ level (3 Subjects)</strong></td>
                                        <td   style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" colspan="4">Subjects of GCSE, IGCSE, or ‘O’ Level</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">B</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">C</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">B</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Physics or Co. ,Sci.</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">B</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Any 3 other subjects</td>
                                        <td style="text-align: center;border: 1px solid #94999e;" colspan="3">C</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td   style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" colspan="4">Subjects of GCSE, IGCSE, or ‘A’ Level</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center;border: 1px solid #94999e;" colspan="3">C</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;border: 1px solid #94999e;">Physics</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">C</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Any ‘AS’ or ‘A’ level subjects</td>
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" colspan="3">C</td>
                                    </tr>

                                    <tr class="">
                                        <td   style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" rowspan="3"> <strong>Sixth Form<br/>(5 Subjects)</strong></td>
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center;border: 1px solid #94999e;" colspan="3">≥ 4</td>
                                    </tr>
                                    <tr class="">
                                        <td style="border: 1px solid #94999e;">Physics</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">≥ 4</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="">
                                        <td style="border: 1px solid #94999e;">Any 3 other subjects</td>
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" colspan="3">≥ 5</td>
                                    </tr>
                                    
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td   style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" rowspan="10"> <strong>CEA Level 2-3<br/>(5 Subjects)</strong></td>
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center;border: 1px solid #94999e;" colspan="3">2.5</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Physics or Science</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">2.5</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Any 3 other subjects</td>
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" colspan="3">2</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" colspan="4">How to calculate NCEA to GPA (min. 7 credits/subject)</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" colspan="4"> – Grade E (Excellence) = 4</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" colspan="4"> – Grade M (Merit) = 3</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" colspan="4"> – Grade A (Achieved) = 2</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" colspan="4">– Grade N (Not Achieved) = 0</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" colspan="4">– Multiply the value of each grade by the number of credits the course worth.</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center;vertical-align: middle;border: 1px solid #94999e;" colspan="4">– Divide the total value of all the grades you have received by the total number of credits you have completed.</td>
                                    </tr>

                                     <tr class="">
                                        <td   style="text-align: center; vertical-align: middle;border: 1px solid #94999e;" rowspan="9"> <strong>BHSEC<br/>(Bhutan)<br/>(5 Subjects)</strong></td>
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center;border: 1px solid #94999e;" colspan="3">B</td>
                                    </tr>
                                    <tr class="">
                                        <td style="border: 1px solid #94999e;">Physics or Science</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">B</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="">
                                        <td style="border: 1px solid #94999e;">Physics or Science</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">B</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center;border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="">
                                        <td style="border: 1px solid #94999e;">Any 3 other subjects</td>
                                        <td style="text-align: center;border: 1px solid #94999e;" colspan="3">C</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center;border: 1px solid #94999e;" colspan="4">Grade 1 = A*</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center;border: 1px solid #94999e;" colspan="4">Grade 2 = A</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center;border: 1px solid #94999e;" colspan="4">Grade 3-5 = B</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center;border: 1px solid #94999e;" colspan="4">Grade 6-7 = C</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center;border: 1px solid #94999e;" colspan="4">Grade 8-9 = F</td>
                                    </tr>
                            </table>
                        </div>
                     </div>
                  </div>
               </div>
               