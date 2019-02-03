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
<!--          <img class="img-fluid" src="img/static-1.jpg" alt=""> -->
         <h4 style="color: #f26c21;">Admission Period</h4>
         <br>
         <div class="static_text">
            <p><b>1) College direct entry</b>&nbsp;<a href="<?= base_url(); ?>admission/howToApply"><b style="background-color: yellow; color: black;">Opening Now! <i class="fa fa-hand-pointer-o" aria-hidden="true"></i></b></a></p>
            <p>Thai and Non-Thai students can now apply to WUIC directly from now to April 5, 2019
            <br>Announcement of Successful Candidates on April 12, 2019</p>
            
         </div>
      </div>
      <table class="table table-bordered table-hover" style="height: 211px;" width="646">
         <tbody>
            <tr class="" style="text-align: center; background-color: #f38448bf;">
               <td><strong>Round</strong></td>
               <td><strong>Status</strong></td>
               <td><strong>Applicaiton period</strong></td>
            </tr>
            <tr class="" >
               <td style="text-align: center; vertical-align: top;">1</td>
               <td style="vertical-align: top;">Closed</td>
               <td>1 – 15 Dec 2018</td>
            </tr>
            <tr style="background-color: #e2ae91bf;">
               <td style="text-align: center;">2</td>
               <td>Opening</td>
               <td>1 Feb – 5 April 2019</td>
            </tr>
            <tr class="" style="">
               <td style="text-align: center;">3</td>
               <td>-</td>
               <td>13 April - 5 May 2019</td>
            </tr>
         </tbody>
      </table>
      <div class="static_text">
         <p><b>2) Fast Trade</b></p> 
         <p>For these who hold atleast </p>  
      </div>

      <div class="static_text">
			<p><b>3) TCAS 2019</b></p>
            <p>Admission Period follows Thai University Central Admission System (TCAS):</p>
      </div>
      <table class="table table-bordered table-hover" style="height: 211px;" width="646">
         <tbody>
            <tr class="" style="background-color: #f38448; text-align: center;">
               <td><strong>Round</strong></td>
               <td><strong>Type</strong></td>
               <td><strong>Applicaiton period</strong></td>
            </tr>
            <tr class="" style="background-color: rgba(0,0,0,.05);">
               <td style="text-align: center; vertical-align: top;">1</td>
               <td style="vertical-align: top;">Portfolios</td>
               <td>1 – 15 Dec 2018 <b style="background-color: yellow; color: black;">extended to 23 Dec 2018</b></td>
            </tr>
            <tr>
               <td style="text-align: center;">2</td>
               <td>Quota</td>
               <td>2 Feb – 23 Mar 2019</td>
            </tr>
            <tr class="" style="background-color: rgba(0,0,0,.05);">
               <td style="text-align: center;">3</td>
               <td>Joint Direct Admission</td>
               <td>17 – 29 Apr 2019</td>
            </tr>
            <tr>
               <td style="text-align: center;">4</td>
               <td>General Admission</td>
               <td>9 - 19 May 2019</td>
            </tr>
            <tr class="" style="background-color: rgba(0,0,0,.05);">
               <td style="text-align: center;">5</td>
               <td>Independent Direct Admission</td>
               <td>30 May – 10 Jun 2019</td>
            </tr>
         </tbody>
      </table>
   </div>
</div>