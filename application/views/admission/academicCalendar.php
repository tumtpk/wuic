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
         <h4 style="color: #f26c21;">Academic calendar</h4>
      </div>
      <div class="entry">
      <br>
         <p style="font-size:16px"><b>Academic Year 2018/2019</b></p>
         <br>
         <table  class="table table-bordered" style="height: 273px;" width="800" cellspacing="0" cellpadding="0">
            <tbody>
               <tr>
                  <td style="width: 200px; background-color: #c868e88a; text-align: left;" width="125"><strong>First Semester</strong></td>
                  <td style="width: 200px; background-color: #c868e88a; text-align: left;" colspan="2" width="250"><strong>20 Aug 2018 – 12 Dec 2018</strong></td>
               </tr>
               <tr>
                  <td style="width: 200px; text-align: left;">First day of class</td>
                  <td style="width: 250px; text-align: left;" colspan="2">20 August 2018</td>
               </tr>
               <tr>
                  <td style="width: 200px; text-align: left;">Last day of class</td>
                  <td style="width: 250px; text-align: left;" colspan="2">30 November 2018</td>
               </tr>
               <tr>
                  <td style="width: 200px; background-color: #c868e88a; text-align: left;"><strong>Second Semester&nbsp;</strong></td>
                  <td style="width: 250px; background-color: #c868e88a; text-align: left;" colspan="2"><strong>7 Jan 2019 – 1 May 2019</strong></td>
               </tr>
               <tr>
                  <td style="width: 200px; text-align: left;">First day of class</td>
                  <td style="width: 250px; text-align: left;" colspan="2">7 January 2019</td>
               </tr>
               <tr>
                  <td style="width: 200px; text-align: left;">Last day of class</td>
                  <td style="width: 250px; text-align: left;" colspan="2">19 April 2019</td>
               </tr>
               <tr>
                  <td style="width: 200px;background-color: #f26b2194;text-align: left;">&nbsp;<strong>Summer Session</strong></td>
                  <td style="width: 200px;background-color: #f26b2194;text-align: left;" colspan="2"><strong>&nbsp;21 May – 19 July 2019</strong></td>
               </tr>
               <tr>
                  <td style="width: 200px; text-align: left;">&nbsp;First day of class</td>
                  <td style="width: 250px; text-align: left;" colspan="2">&nbsp;21 May 2019</td>
               </tr>
               <tr>
                  <td style="width: 200px; text-align: left;">Last day of class</td>
                  <td style="width: 250px; text-align: left;" colspan="2">12 July 2019</td>
               </tr>
            </tbody>
         </table>
         <p>&nbsp;</p>
      </div>
   </div>
</div>