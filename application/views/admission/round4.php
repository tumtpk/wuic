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
         <h4 style="color: #f26c21;">Round 4 - Admission</h4>
      </div>
      <div class="static_text2">
         <p>Application Submission Period: 9 – 19 May 2019</p>
         <p>Admission is based upon the result of National Test Scores and GPAX with the ratio as follows.</p><br/>
         
         <div class="table-responsive table-bordered">
            <table class="table">
               <tbody>
                     <tr style="background-color: #f38448; text-align: center;">
                        <td rowspan="2">
                           <strong>Programs</strong>
                        </td>
                        <td colspan="4">
                           <strong>Proportion of scores calculated</strong>
                        </td>
                     </tr>
                     <tr style="background-color: #f38448; text-align: center;">
                        <td>
                           <strong>GPAX</strong>
                        </td>
                        <td>
                           <strong>O-NET</strong>
                        </td>
                        <td>
                           <strong>GAT</strong>
                        </td>
                        <td>
                           <strong>PAT</strong>
                        </td>
                     </tr>
                     <tr style="background-color: rgba(0,0,0,.05);">
                        <td>
                           B.Eng. in Digital Innovation Engineering
                           &nbsp;
                        </td>
                        <td class="text-center">
                           20%
                        </td>
                        <td class="text-center">
                           30%
                        </td>
                        <td class="text-center">
                           15%
                        </td>
                        <td class="text-center">
                           PAT 2 - 15%
                           PAT 3 - 20%
                        </td>
                     </tr>
                     <tr>
                        <td>
                           B.B.A. in Logistics Analytics Supply Chain Management
                           &nbsp;
                        </td>
                        <td class="text-center">
                           20%
                        </td>
                        <td class="text-center">
                           30%
                        </td>
                        <td class="text-center">
                           30%
                        </td>
                        <td class="text-center">
                           PAT 1 - 20%
                        </td>
                     </tr>
                     <tr style="background-color: rgba(0,0,0,.05);">
                        <td>
                           LL.B. in Legal Applications
                           &nbsp;
                        </td>
                        <td class="text-center">
                           20%
                        </td>
                        <td class="text-center">
                           30%
                        </td>
                        <td class="text-center">
                           50%
                        </td>
                        <td class="text-center">
                           -
                        </td>
                     </tr>
                     <tr>
                        <td>
                           B.B.A. in Accountancy
                           &nbsp;
                        </td>
                        <td class="text-center">
                           20%
                        </td>
                        <td class="text-center">
                           30%
                        </td>
                        <td class="text-center">
                           30%
                        </td>
                        <td class="text-center">
                           PAT 1 - 20%
                        </td>
                     </tr>
               </tbody>
            </table>
         </div>
         
      </div>
   </div>
</div>