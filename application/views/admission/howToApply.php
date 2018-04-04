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
                        <h4 style="color: #f26c21;">How To Apply</h4>
                     </div>
                     <div class="static_text2">
                        <p><b style="background-color: yellow;">Apply Now !</b></p>
                        <p><b>Qualifications and Requirements</b></p>
                        <div class="col">
                            <p>1. Applicants must be high school graduate students or equivalent <br>(or ongoing students who expected to graduate in academic year 2017)</p>
                            <p>2. Applicants must submit <b>one</b> of the national test scores such as O-NET,<br>GAT/PAT, and Common 9 Subjects.</p>
                            <p>or</p>
                            <p>3. Applicants must submit <b>one</b> of the standardize test scores such as SAT I, <br>New SAT I, SAT II, GCSE, IGCSE, or ‘O’ Level ( 5 Subjects) and GCE ‘AS’, or ‘A’ level (3 Subjects) <br>or “A” Level, IB, Sixth Form, and etc.</p>
                           </div>

                        <p><b>Application Process</b></p>
                        <div class="col">
                            <p>1. Register via Admission system at  <a href="https://entry.wu.ac.th/inter/">https://entry.wu.ac.th/inter/</a></p>
                            <p>2. Submit your supporting documents to email wuic@wu.ac.th</p>
                            <div class="col-md-10 offset-md-1"><p>2.1. 1”x1” photograph (School/University uniform, taken in the last 6 months)</p></div>
                            <div class="col-md-10 offset-md-1"><p>2.2. A photocopy of official transcript*  </p></div>
                            <div class="col-md-10 offset-md-1"><p>2.3. A photocopy of the Thai national identity card or passport (Non-Thai applicant)</p></div>
                            <div class="col-md-10 offset-md-1"><p>2.4. A photocopy of one’s current residency document</p></div>
                            <div class="col-md-10 offset-md-1"><p>2.5 A photocopy of English proficiency test scores: IELTS (≥6) or any other Standard English test</p></div>
                            <div class="col-md-10 offset-md-1"><p>2.6. A photocopy of pay-in slip for application fee of 300 THB </p></div>


                            <br>
                           
                           

                            <!-- <p>3. Submission of Application Documents</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.1. On-line submission: application information and all supporting documents must be uploaded to the Admission System website by the deadline.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2. Off-line submission: submit application documents by yourself or by post to Center for Educational Services (Admission) Walailak University 222 Thaiburi, Thasala District, Nakhon Si Thammarat 80161 Thailand. All application documents have to be delivered by the deadline (postmark date considered).</p>
                            <br> -->
                            <p>Remark: *In additional to transcript from school, applicant must provide educational documents according to cases below. <p>
                            <div class="table-responsive table-bordered"  border-style: solid;border-color: coral;>
                                <table class="table">
                                    <tr class="table-danger ">
                                        <td>Graduated from International School in Thailand </td>
                                        <td>Studying in International School in Thailand </td>
                                    </tr>
                                    <tr class="">
                                        <td>1) Education programs certified by Office of the Private Education Commission (OPEC), please provide</td>
                                        <td>1) Education programs certified by Office of the Private Education Commission (OPEC), please provide</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <td>Diploma or Certificate of Secondary School Completion</td>
                                        <td>a) Recommendation Letter (WUIC form) <br> b) Predicted Grades </td>
                                    </tr>
                                    
                                    <tr class="table-danger">
                                        <td>Education programs not certified by Office of the Private Education Commission (OPEC) or International Program from other countries, please provide</td>
                                        <td>Education programs not certified by Office of the Private Education Commission (OPEC) or International Program from other countries, must provide Recommendation Letter (WUIC form) and </td>
                                    </tr>
                                    <tr class="">
                                        <td>- Diploma or Certificate of Secondary School Completion <br> 
- Original official of High School Certification Equivalence issued by the Thai Ministry of Education. (If applicable) </td>
                                        <td>c) Original official of High School Certification Equivalence </td>
                                    </tr>
                                </table>
                            </div>

                            <p>Remark: * If supporting documents are issued in a language other than Thai or English, official translations of them to English are required. Officially certified copies of the original documents must also be submitted.<p>


                        </div>
                     </div>
                  </div>
               </div>
               