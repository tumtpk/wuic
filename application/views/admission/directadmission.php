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
                        <h4 style="color: #f26c21;">Direct Admission</h4>
                     </div>
                     <div class="static_text2">
                        <p>Thai and Non-Thai students can now apply to WUIC directly from now to June 10, 2019<br>
                        Announcement of Successful Candidates on June 17, 2019</p>
                        <p>
                            <div class="row justify-content-around">
                                <div class="col-lg-5">
                                    <div class="card text-center" style="border: 0px;">
                                        <img class="card-img-top" src="<?=base_url() ?>public/img/icon/inter.png" alt="Card image cap">
                                        <div class="card-body" style="padding-top: 5px;height: auto;">
                                            <p class="card-text"><strong>International Students</strong></p>
                                            <a href="https://entry.wu.ac.th/inter/apply.asp" class="btn btn-warning btn-sm" style="color: #111 !important;width: 50%;" target="_blank">Apply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="card text-center" style="border: 0px;">
                                        <img class="card-img-top" src="<?=base_url() ?>public/img/icon/thai.png" alt="Card image cap">
                                        <div class="card-body" style="padding-top: 5px;height: auto;">
                                            <p class="card-text"><strong>Thai Students/Foreign Residents</strong></p>
                                            <a href="https://entry.wu.ac.th/new/apply1.asp" class="btn btn-warning btn-sm" style="color: #111 !important;width: 50%;" target="_blank">Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </p>
                     	<p><b>Qualifications and Requirements</b></p>
                     	<p>
                            1. Applicants must be graduated high school students or equivalent (or ongoing students who expected to graduate in academic year 2018)<br/><br/>
                        	2. Applicant must submit valid English Proficiency Test score: IELTS ≥6 or any other Standard English Test result. (Applicants without Standard English Test result must obtain GPA in English not less than 3.50)
                        	<br/><br/>
                        	3. Applicants must submit one of test scores such as New SAT I, O-NET, GAT/PAT, Common 9 Subjects with minimum required as presented below.
                     	</p>
                         <br>
                         <div class="table-responsive table-bordered">
                         <table class="table">
                            <tbody>
                                <tr style="background-color: #f38448; text-align: center;">
                                    <td rowspan="2" style="text-align: center;border: 1px solid #94999e;vertical-align: middle;">
                                        <strong>Program</strong>
                                    </td>
                                    <td rowspan="2" style="text-align: center;border: 1px solid #94999e;vertical-align: middle;">
                                        <strong>Secondary School Program Requirement</strong>
                                    </td>
                                    <td colspan="5" style="text-align: center;border: 1px solid #94999e;vertical-align: middle;">
                                        <strong>submit one of the test scores</strong>
                                    </td>
                                </tr>
                                <tr style="background-color: #f38448; text-align: center;">
                                    <td>
                                        <strong>New SAT I*<br><a href="#remark" style="color: #49382f !important;">or equivalent*</a></strong>
                                    </td>
                                    <td>
                                        <strong>O-NET</strong>
                                    </td>
                                    <td>
                                        <strong>GAT/ PAT</strong>
                                    </td>
                                    <td>
                                        <strong>Common 9 Subjects</strong>
                                    </td>
                                </tr>
                                <tr style="background-color: rgba(0,0,0,.05);">
                                    <td>
                                        <strong>B.Eng. in Digital Innovation Engineering</strong>
                                    </td>
                                    <td class="text-center">
                                        Science
                                    </td>
                                    <td class="text-center">
                                        Mathematics&ge; 620
                                        Evidence-Based Reading and Writing &ge;350
                                    </td>
                                    <td class="text-center">
                                        04 &ge;30 and
                                        05 &ge;30
                                    </td>
                                    <td class="text-center">
                                        GAT &ge;140 and
                                        PAT1 &ge;50 and PAT2 &ge;50
                                    </td>
                                    <td class="text-center">
                                        39 &ge;25 and
                                        49 &ge;25
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>LL.B. in Legal Applications</strong>
                                    </td>
                                    <td rowspan="3" class="text-center">
                                        &nbsp;
                                        &nbsp;
                                        All programs
                                    </td>
                                    <td class="text-center">
                                        Evidence-Based Reading and Writing &ge;350
                                    </td>
                                    <td class="text-center">
                                        02 &ge;30
                                        &nbsp;
                                    </td>
                                    <td class="text-center">
                                        GAT &ge;140
                                    </td>
                                    <td class="text-center">
                                        19 &ge;30
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr style="background-color: rgba(0,0,0,.05);">
                                    <td>
                                        <strong>B.B.A. in Logistics Analytics Supply Chain Management</strong>
                                    </td>
                                    <td rowspan="2" class="text-center">
                                        Mathematics&ge; 520
                                        Evidence-Based Reading and Writing &ge;350
                                    </td>
                                    <td rowspan="2" class="text-center">
                                        04 &ge;25
                                    </td>
                                    <td rowspan="2" class="text-center">
                                        GAT &ge;140 and
                                        PAT1 &ge;40
                                    </td>
                                    <td rowspan="2" class="text-center">
                                        39 &ge;20
                                    </td>
                                </tr>
                                <tr style="background-color: rgba(0,0,0,.05);">
                                    <td>
                                        <strong>B.B.A. in Accountancy</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <br>
                     	<p>
                     		<b>Remark : *International Standardized Test Scores</b><br/>
                     	</p>
                     	<div class="table-responsive table-bordered" style="display: block; max-height: 500px;" id="remark">
                            <table class="table">
                                <tbody>
                                    <tr class="" style="background-color: #f38448; text-align: center;">
                                        <td style="text-align: center; border: 1px solid #94999e; vertical-align: middle;" rowspan="3"><strong>Test</strong></td>
                                        <td style="text-align: center; border: 1px solid #94999e; vertical-align: middle;" rowspan="3"><strong>Subjects</strong></td>
                                        <td style="text-align: center; border: 1px solid #94999e;" colspan="3"><strong>Minimum Score</strong></td>
                                    </tr>
                                    <tr style="background-color: #f38448; text-align: center;">
                                        <td style="text-align: center; border: 1px solid #94999e;" rowspan="2"><strong>Digital Innovation Engineering</strong></td>
                                        <td style="text-align: center; border: 1px solid #94999e;" rowspan="2"><strong>Legal Applications</strong></td>
                                        <td style="text-align: center; border: 1px solid #94999e;"><strong>Logistic Analytics and Supply Chain Management </strong></td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center; background-color: #f38448 !important;"><strong>Accountancy</strong></td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" rowspan="3"><strong>SAT I</strong></td>
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">600</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">600</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Critical Reading</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">350</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">350</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">350</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Writing</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">350</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">350</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">350</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" rowspan="2"><strong>SAT II</strong></td>
                                        <td style="border: 1px solid #94999e;">Mathematics (Level 2)</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">600</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">600</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Physics</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">600</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" rowspan="4"><strong>ACT</strong></td>
                                        <td style="text-align: center; border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" rowspan="4">Composite Score 21.5 from 36 (Math &ge; 20 and Science &ge; 20)</td>
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" rowspan="4">Composite Score 21.5 from 36 (English &ge; 20 and Reading &ge; 20)</td>
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" rowspan="4">Composite Score 21.5 from 36 (Math &ge; 20 and English &ge; 20)</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center; border: 1px solid #94999e;">Science</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center; border: 1px solid #94999e;">English</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center; border: 1px solid #94999e;">Reading</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" rowspan="5"><strong>GED</strong></td>
                                        <td style="text-align: center; border: 1px solid #94999e;">Reasoning Through Language Arts</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">160</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">160</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center; border: 1px solid #94999e;">Mathematic Reasoning</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">160</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">160</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center; border: 1px solid #94999e;">Science</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">160</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center; border: 1px solid #94999e;">Social Studies</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">160</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" colspan="4">Composite Score at least 580 from 800</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" rowspan="2"><strong>IB (Higher or Standard Level)</strong></td>
                                        <td style="text-align: center; border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">&ge; 4</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">&ge; 4</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center; border: 1px solid #94999e;">Physics</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">&ge; 4</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" rowspan="8"><strong>GCSE, IGCSE, or &lsquo;O&rsquo; Level ( 5 Subjects) and GCE &lsquo;AS&rsquo;, or &lsquo;A&rsquo; level (3 Subjects)</strong></td>
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" colspan="4">Subjects of GCSE, IGCSE, or &lsquo;O&rsquo; Level</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">B</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">C</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">B</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Physics or Co. ,Sci.</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">B</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Any 3 other subjects</td>
                                        <td style="text-align: center; border: 1px solid #94999e;" colspan="3">C</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" colspan="4">Subjects of GCSE, IGCSE, or &lsquo;A&rsquo; Level</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center; border: 1px solid #94999e;" colspan="3">C</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Physics</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">C</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Any &lsquo;AS&rsquo; or &lsquo;A&rsquo; level subjects</td>
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" colspan="3">C</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" rowspan="3"><strong>Sixth Form<br />(5 Subjects)</strong></td>
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center; border: 1px solid #94999e;" colspan="3">&ge; 4</td>
                                    </tr>
                                    <tr class="">
                                        <td style="border: 1px solid #94999e;">Physics</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">&ge; 4</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="">
                                        <td style="border: 1px solid #94999e;">Any 3 other subjects</td>
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" colspan="3">&ge; 5</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" rowspan="4"><strong>CEA Level 2-3<br />(5 Subjects)</strong></td>
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center; border: 1px solid #94999e;" colspan="3">2.5</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Physics or Science</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">2.5</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="border: 1px solid #94999e;">Any 3 other subjects</td>
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" colspan="3">2</td>
                                    </tr>
                                    <tr class="" style="background-color: rgba(0,0,0,.05);">
                                        <td style="vertical-align: middle; border: 1px solid #94999e; text-align: left;" colspan="4"><strong>NOTE&nbsp;</strong>
                                            <br /> 1. Grade E (Excellence) = 4, Grade M (Merit) = 3, Grade A (Achieved) = 2, Grade N (Not Achieved) = 0
                                            <br /> 2. Multiply the value of each grade by the number of credits the course worth.
                                            <br />3. Divide the total value of all the grades you have received by the total number of credits you have completed.</td>
                                    </tr>
                                    <tr class="">
                                        <td style="text-align: center; vertical-align: middle; border: 1px solid #94999e;" rowspan="5"><strong>BHSEC<br />(Bhutan)<br />(5 Subjects)</strong></td>
                                        <td style="border: 1px solid #94999e;">Mathematics</td>
                                        <td style="text-align: center; border: 1px solid #94999e;" colspan="3">B</td>
                                    </tr>
                                    <tr class="">
                                        <td style="border: 1px solid #94999e;">Physics or Science</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">B</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="">
                                        <td style="border: 1px solid #94999e;">Physics or Science</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">B</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                        <td style="text-align: center; border: 1px solid #94999e;">-</td>
                                    </tr>
                                    <tr class="">
                                        <td style="border: 1px solid #94999e;">Any 3 other subjects</td>
                                        <td style="text-align: center; border: 1px solid #94999e;" colspan="3">C</td>
                                    </tr>
                                    <tr class="">
                                        <td style="border: 1px solid #94999e; text-align: left;" colspan="4">
                                            <strong>NOTE</strong> Grade 1 = A*, Grade 2 = A, Grade 3-5 = B, Grade 6-7 = C, Grade 8-9 = F
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                     </div>
                  </div>
               </div>
               