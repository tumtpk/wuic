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
                        <h4 style="color: #f26c21;">Bachelor of Engineering in Digital Innovation Engineering</h4><br>
                     </div>
                     <div class="static_text2">
                        <!-- <p>This program aims to produce graduates who inspire to change the digital world through innovative designs of applications and how they interact with humans worldwide. Graduates will respond to problems while creating new opportunities from digital innovations.</p><br> -->
                        <div class="form-group row text-center">
                           	<div class="col-md">
                              	<img src="<?=base_url() ?>public/img/page/pic.png" class="img-fluid" alt="Responsive image"><br>
                            </div>
                      	</div>
                        <p><b style="color: #f26c21;">Degree</b></p>
                        <p>Bachelor of Engineering (Digital Innovation Engineering)<br>B. Eng. (Digital Innovation Engineering)</p>
                        
                        <p><b style="color: #f26c21;">Philosophy</b></p>
                        <p>This program aims to produce graduates who inspire to change the digital world through innovative designs of applications and how they interact with humans worldwide. Graduates will respond to problems while creating new opportunities from digital innovations. Especially in areas such as industry 4.0 where digital innovations based on knowledge of computer engineering will be at the forefront of global change. Graduates will be aware of technology’s impact on society in both positive and negative factors. Graduates will understand the moral and ethical aspects of digital technologies as well as their potential to effect long-life learning and skill development. Graduates will understand digital entrepreneurship and will be encouraged to launch startup ventures for products and services in the global marketplace.</p>
                        
                        <p><b style="color: #f26c21;">Desired graduate</b></p>
                        <p>Graduates posses of lateral thinking and graduates will be able to solve the problems by using digital technology to creat innovation products.</p>
                        
                        <p><b style="color: #f26c21;">Career path</b></p>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Computer Engineer
                           <br><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Innovative Engineer
                           <br><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Problem-solver in digital innovation
                           <br><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Software developer/programmer
                           <br><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Entrepreneur/startup founder in computer industry
                           <br><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Digital products designer
                           <br><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> Academic/Researcher in the field of digital innovation
                        </p>

                        <p><b style="color: #f26c21;">Study path</b></p>
                        <p>Used as a base for a Master and Doctural degree in digital engineering  or related fields</p>
                        
                        <p><b style="color: #f26c21;">Fees</b></p>
                        <p>
                           <i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> For Thai graduate per semester 125,600 THB
                           <br><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> For Thai graduate per 1 course (8 semesters) 1,004,800 THB
                           <br><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> For International graduate per semester 150,600 THB
                           <br><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #f26c21;"></i> For International graduate per 1 course (8 semesters) 1,204,800 THB
                        </p>

                        <p><b style="color: #f26c21;">Program structure</b></p>
                        <p><iframe src="https://drive.google.com/file/d/1_KLmQniBv9td8QFa_FjJqLu7G1TO-VE0/preview" style="width:100%; height:500px"></iframe></p>

						<br>
						<hr style="color: #f26c21;">
						<br>
						<p class="text-center"><b style="color: #f26c21; font-size:20px">Teaching Team</b></p>
						<div class="row text-center" style="font-size: 12px">
                            <div class="col-lg-4">
                            	<a class="wplightbox" href="http://www0.cs.ucl.ac.uk/staff/A.Finkelstein/" data-width="1200" data-height="1200"><br>
                            	<img class="image" src="<?=base_url() ?>public/img/lecturer/DIN/01.Anthony Finkelstein.jpg" width="150px"><br>
                            		Visiting Professor<br>
                            		Professor Dr. Anthony Finkelstein</a><br>
                            		University College London and The Alan Turing Institute<br>
                            		<i class="fa fa-envelope-o"></i> a.finkelstein@ucl.ac.uk or afinkelstein@turing.ac.uk<br>
                            </div>
                            <div class="col-lg-4">
                            	<a class="wplightbox" href="http://profiles.murdoch.edu.au/myprofile/lance-fung/" data-width="1200" data-height="1200"><br>
                            	<img class="image" src="<?=base_url() ?>public/img/lecturer/DIN/02.Dr.Lance.png" width="150px"><br>
                            		Visiting Professor<br>
                            		Emeritus Professor Lance Fung</a><br>
                            		Murdoch University<br>
                            		<i class="fa fa-envelope-o"></i> L.Fung@murdoch.edu.au<br>
                            </div>
                            <div class="col-lg-4">
                            	<a class="wplightbox" href="https://www.mdx.ac.uk/about-us/our-people/staff-directory/profile/raimondi-franco" data-width="1200" data-height="1200"><br>
                            	<img class="image" src="<?=base_url() ?>public/img/lecturer/DIN/03.Dr.Raimondi_franco.jpg" width="150px"><br>
                            		Visiting Professor<br>
                            		Professor Dr. Franco Raimondi</a><br>
                            		Middlesex University<br>
                            		<i class="fa fa-envelope-o"></i> F.Raimondi@mdx.ac.uk<br>
                            </div>
                        </div>
                        <div class="row text-center" style="font-size: 12px">
                            <div class="col-lg-4">
                            	<a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=5600000048" data-width="1200" data-height="1200"><br>
                            	<img class="image" src="<?=base_url() ?>public/img/lecturer/DIN/04.jpg" width="150px"><br>
                            		Asst. Prof. Dr. Anurak Thungtong</a><br>
                            		<i class="fa fa-envelope-o"></i> anurak.th@wu.ac.th<br>
                            </div>
                            <div class="col-lg-4">
                            	<a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=4120950322" data-width="1200" data-height="1200"><br>
                            	<img class="image" src="<?=base_url() ?>public/img/lecturer/DIN/05.ดร.จิตติมา.png" width="150px"><br>
                            		Dr. Jidtima Sunkhamani</a><br>
                            		<i class="fa fa-envelope-o"></i> sjidtima@wu.ac.th<br>
                            </div>
                            <div class="col-lg-4">
                            	<a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=4700000072" data-width="1200" data-height="1200"><br>
                            	<img class="image" src="<?=base_url() ?>public/img/lecturer/DIN/06.aj-suratt-copy.png" width="150px"><br>
                            		Asst. Prof. Dr. Suratsavadee Koonlaboon Korkua</a><br>
                            		<i class="fa fa-envelope-o"></i> ksuratsa@wu.ac.th<br>
                            </div>
                        </div>
                        <div class="row text-center" style="font-size: 12px">
                            <div class="col-lg-4">
                            	<a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=4010530312" data-width="1200" data-height="1200"><br>
                            	<img class="image" src="<?=base_url() ?>public/img/lecturer/DIN/07.png" width="150px"><br>
                            		Assoc. Prof. Dr. Wattanapong Kurdthongmee</a><br>
                            		<i class="fa fa-envelope-o"></i> kwattana@wu.ac.th<br>
                            </div>
                            <div class="col-lg-4">
                            	<a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=6100000339" data-width="1200" data-height="1200"><br>
                            	<img class="image" src="<?=base_url() ?>public/img/lecturer/DIN/oscar.jpg" width="150px"><br>
                                 Mr. Oscar Andrew Zongo</a><br>
                            		<i class="fa fa-envelope-o"></i> oscar.zo@wu.ac.th<br>
                            </div>
                            <div class="col-lg-4">
                            	<a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=5600000049" data-width="1200" data-height="1200"><br>
                            	<img class="image" src="<?=base_url() ?>public/img/lecturer/DIN/Aj.Rasimeth.jpg" width="150px"><br>
                                 Asst. Prof. Dr. Rasimate Maungchang</a><br>
                            		<i class="fa fa-envelope-o"></i> rasimate.ma@wu.ac.th<br>
                            </div>
                       	</div>
                        <div class="row text-center" style="font-size: 12px">
                           <div class="col-lg-4">
                              <a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=5600000072" data-width="1200" data-height="1200"><br>
                              <img class="image" src="<?=base_url() ?>public/img/lecturer/ALL/Aj_Theerawat.jpg" width="150px"><br>
                                 Mr. Theerawat Klaokliang </a><br>
                                 <i class="fa fa-envelope-o"></i> theerawat.kl@wu.ac.th<br>
                           </div>
                           <div class="col-lg-4">
                              <a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=4020510312" data-width="1200" data-height="1200"><br>
                              <img class="image" src="<?=base_url() ?>public/img/lecturer/GEN/Mullica.jpg" width="150px"><br>
                                 Assoc. Prof. Dr. Mullica Jaroensutasinee </a><br>
                                 <i class="fa fa-envelope-o"></i> jmullica@wu.ac.th<br>
                           </div>
                           <div class="col-lg-4">
                              <a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=4010630312" data-width="1200" data-height="1200"><br>
                              <img class="image" src="<?=base_url() ?>public/img/lecturer/ALL/Assoc.Prof.Dr.Krisanadej.jpg" width="150px"><br>
                                 Assoc. Prof. Dr. Krisanadej Jaroensutasinee </a><br>
                                 <i class="fa fa-envelope-o"></i> jkrisana@wu.ac.th<br>
                           </div>
                        </div>
                        <div class="row text-center" style="font-size: 12px">
                           <div class="col-lg-4">
                              <a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=4320540323" data-width="1200" data-height="1200"><br>
                              <img class="image" src="<?=base_url() ?>public/img/lecturer/ALL/Dr.Visaka.jpg" width="150px"><br>
                                 Dr. Visaka Anantawat </a><br>
                                 <i class="fa fa-envelope-o"></i> pvisaka@wu.ac.th<br>
                           </div>
                           <div class="col-lg-4">
                              <a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=4620070322" data-width="1200" data-height="1200"><br>
                              <img class="image" src="<?=base_url() ?>public/img/lecturer/GEN/Suthanya.jpg" width="150px"><br>
                                 Asst. Prof. Dr. Suthanya Doung-In</a><br>
                                 <i class="fa fa-envelope-o"></i> dsuthany@wu.ac.th<br>
                           </div>
                           <!-- <div class="col-lg-4">
                              <a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=6100000340" data-width="1200" data-height="1200"><br>
                              <img class="image" src="<?=base_url() ?>public/img/lecturer/ACC/empty.jpg" width="150px"><br>
                                 Miss Emma Faye Robdale</a><br>
                                 <i class="fa fa-envelope-o"></i> emma.ro@wu.ac.th<br>
                           </div> -->
                           <div class="col-lg-4">
                              <a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=5600000068" data-width="1200" data-height="1200"><br>
                              <img class="image" src="<?=base_url() ?>public/img/lecturer/ACC/Dr.Supaporn.jpg" width="150px"><br>
                                 Asst. Prof. Dr. Supaporn Chairungsee</a><br>
                                 <i class="fa fa-envelope-o"></i> supaporn.ch@wu.ac.th<br>
                           </div>
                           <div class="col-lg-4">
                              <a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=5600000004" data-width="1200" data-height="1200"><br>
                              <img class="image" src="<?=base_url() ?>public/img/lecturer/ALL/Dr.Chuthamat.jpg" width="150px"><br>
                                 Dr. Chuthamat Rattikansukha</a><br>
                                 <i class="fa fa-envelope-o"></i> chuthamat.ra@wu.ac.th<br>
                           </div>
                           <div class="col-lg-4">
                              <a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=4700000013" data-width="1200" data-height="1200"><br>
                              <img class="image" src="<?=base_url() ?>public/img/lecturer/ALL/Dr.Wipawee.jpg" width="150px"><br>
                                 Asst. Prof. Dr. Wipawee Khamwichit</a><br>
                                 <i class="fa fa-envelope-o"></i> kwipawee@wu.ac.th<br>
                           </div>
                           <div class="col-lg-4">
                              <a class="wplightbox" href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=6100000116" data-width="1200" data-height="1200"><br>
                              <img class="image" src="<?=base_url() ?>public/img/lecturer/ALL/Dr.Hareesol.jpg" width="150px"><br>
                                 Dr. Hareesol Khun-inkeeree</a><br>
                                 <i class="fa fa-envelope-o"></i> hareesol.kh@wu.ac.th<br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               