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
                        <h4 style="color: #f26c21;"><?=$title ?></h4>
						<div class="news-date">
                     		<i class="fa fa-clock-o"></i> <?=$date ?>
                     	</div>                     
                     </div>
                     <div class="media text-center">
                     	<div class="col-md-2"></div>
                     	<div class="col-md-8 text-center">
                            <img src="<?=base_url("public/img/news/1.jpg") ?>" class="img-fluid">
                     	</div>
                     </div>
                     <div class="static_text2">
                     	<p>On March 13, 2018, Assoc. Prof. Dr. Surin Maisrikrod, Vice-President for Global Engagement and Faculty Development, Walailak University (WU) and Dr. Jidtima Sunkhamani, Acting Dean of Walailak University International College (WUIC), welcomed delegates led by Prof. Dr. Kiyota Hashimoto, Vice President of International Institute of Applied Informatics (IIAI), Japan, in signing of the Memorandum of Understanding. </p>
						<p>The memorandum aims to initiate joint educational and research cooperation as well as academic collaboration in various areas: (1) ICT Human Resource Development Program in the South-East Asian Countries, (2) Participation in, and co-hosting of International Conferences, Workshops, Symposia, and other education and research-based events, (3) Promotion and collaboration of research and publications, and (4) Other activities on the basis of equality and mutual benefits.</p>                     
                     	<p>“Established in November 2017, Walailak University International College (WUIC) aims to provide courses that are conducted entirely in English equipping students with knowledge and comprehensive global vision as well as to generate new knowledge through research, academic and technical services, and to conserve and promote the traditional arts and culture of the region and the nation” said Dr. Jidtima Sunkhamani, Acting Dean of WUIC. “Working to reach those objectives, international collaboration has been set. The purpose of MOU with IIAI is to provide a framework by which the parties may in future undertake joint activities together in order to constantly develop ICT Human Resource in the South-East Asian Countries.  After the signing ceremony, the agreement become effective immediately and remain valid for a period of five years.”</p>
                     	<p>After the MOU signing ceremony, seminar on “Teaching Research” and “Fundamental of Optimization Technique” also held by IIAI delegates at Rabienbun 1 Meeting Room, Library Building 1st Floor, Walailak University, Nakhon Si Thammarat.</p>
                     	<hr/>
                     	<small><i>About IIAI</i></small><br/>
                     	<small>International Institute of Applied Informatics (IIAI) is a non-profit academic institute in Japan, aiming at international contributions to advancement and prevalence of achievements in the area of applied informatics for better life and society. IIAI is the academic and educational institute and delivers to promote applied informatics research, to enhance social life, and to support students who specialize in computer science and engineering. The Office of Applied Information Science was set up to prepare for founding IIAI in 2008. Formally, the office was dissolved with announce of its plan to launch on September 31, 2010. IIAI was founded with the help of some advisors, universities, companies and established committee on October 1st, 2010.</small>
                     </div>
                  </div>
               </div>
               