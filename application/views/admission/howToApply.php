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
                        <p><b>Application Process</b></p>
                        <div class="col">
                            <p>1. Register via Admission system at </p>
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
                            <p>2. Submit your supporting documents to email wuic.admissions@mail.wu.ac.th</p>
                            <div class="col-md-10 offset-md-1"><p>2.1. A photocopy of official transcript*  </p></div>
                            <div class="col-md-10 offset-md-1"><p>2.2. A photocopy of English proficiency test scores: IELTS (≥6) or any other Standard English test</p></div>                            
                            <div class="col-md-10 offset-md-1"><p>2.3. A photocopy of the Thai national identity card or passport (Non-Thai applicant)</p></div>
                            <div class="col-md-10 offset-md-1"><p>2.4. A photocopy of one’s current residency document</p></div>

                            <br>
                           
                           

                            <!-- <p>3. Submission of Application Documents</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.1. On-line submission: application information and all supporting documents must be uploaded to the Admission System website by the deadline.</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2. Off-line submission: submit application documents by yourself or by post to Center for Educational Services (Admission) Walailak University 222 Thaiburi, Thasala District, Nakhon Si Thammarat 80161 Thailand. All application documents have to be delivered by the deadline (postmark date considered).</p>
                            <br> -->
                            <p>Remark: *In additional to transcript from school, applicant must provide educational documents according to cases below. <p>
                            <div class="table-responsive table-bordered"  border-style: solid;border-color: coral;>
                                <table class="table">
                                    <tr style="background-color: #f38448;text-align: center;">
                                        <td width="312"><strong>Case 1: Graduated from International School in Thailand</strong></td>
                                        <td width="312"><strong>Case 2: Studying in International School in Thailand </strong></td>
                                        </tr>
                                        <tr>
                                        <td width="312"><strong>1)</strong><strong> Education programs certified by Office of the Private Education Commission (OPEC),</strong><br/>
                                        
                                        please provide<br/>
                                        
                                        - Diploma or Certificate of Secondary School Completion
                                        </td>
                                        <td width="312"><strong>1) Education programs certified by Office of the Private Education Commission (OPEC),</strong><br/>
                                        
                                        please provide<br/>
                                        
                                        - Recommendation Letter (<a href="<?=base_url("public/file/Recommendation_Letter.pdf")?>">WUIC form</a>)<br/>
                                        
                                        - Predicted Grades</td>
                                        </tr>
                                        <tr>
                                        <td width="312"><strong>2) </strong><strong>Education programs not certified by Office of the Private Education Commission (OPEC) or International Program from other countries</strong>,<br/>
                                        
                                        please provide<br/>
                                        
                                        - Diploma or Certificate of Secondary School Completion<br/>
                                        
                                        - Original official of High School Certification Equivalence issued by the Thai Ministry of Education. (If applicable)</td>
                                        <td width="312"><strong>2) Education programs not certified by Office of the Private Education Commission (OPEC) or International Program from other countries, </strong><br/>
                                        
                                        must provide<br/>
                                        
                                        - Recommendation Letter (<a href="<?=base_url("public/file/Recommendation_Letter.pdf")?>">WUIC form</a>) and<br/>
                                        
                                        - Original official of High School Certification Equivalence</td>
									</tr>
                                </table>
                            </div>

                            <p>Remark: * If supporting documents are issued in a language other than Thai or English, official translations of them to English are required. Officially certified copies of the original documents must also be submitted.<p>


                        </div>
                     </div>
                  </div>
               </div>
               