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
                        <p><b>การรับสมัคร</b></p>
                        <div class="col">
                            <p>1. สมัครผ่าน “ระบบการรับสมัครนักศึกษา” ทางอินเตอร์เน็ตที่  <a href="http://entry.wu.ac.th">http://entry.wu.ac.th</a></p>
                            <p>2. หลักฐานประกอบการสมัคร</p>
                            <br>
                            <div class="table-responsive table-bordered"  border-style: solid;border-color: coral;>
                                <table class="table">
                                    <tr class="table-danger">
                                        <td>ใบสมัครที่กรอกข้อมูลเรียนร้อยแล้ว พร้อมรูปถ่าย</td>
                                        <td>จำนวน 1 ชุด (รูปถ่ายหน้าตรงชุดนักเรียน ขนาด 1 นิ้ว ถ่ายไว้ไม่เกิน 6 เดือน)</td>
                                    </tr>
                                    <tr class="">
                                        <td>สำเนาเอกสารแสดงผลการเรียนเฉลี่ยสะสม*</td>
                                        <td>จำนวน 1 ชุด</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <td>สำเนาบัตรประจำตัวประชาชน/ สำเนาหนังสือเดินทาง</td>
                                        <td>จำนวน 1 ชุด</td>
                                    </tr>
                                    <tr class="">
                                        <td>สำเนาทะเบียนบ้าน</td>
                                        <td>จำนวน 1 ชุด</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <td>หลักฐานการชำระเงินค่าสมัคร จำนวน 300 บาท</td>
                                        <td>จำนวน 1 ชุด</td>
                                    </tr>
                                    <tr class="">
                                        <td>แฟ้มสะสมผลงาน (Portfolio) กรณีสมัครรอบ Portfolio</td>
                                        <td>จำนวน 1 ชุด</td>
                                    </tr>
                                </table>
                            </div>
                            <p>3. การส่งใบสมัครและหลักฐานประกอบการสมัคร</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. ส่งผ่านระบบอินเตอร์เน็ต ผู้สมัครจะต้องดำเนินการกรอกข้อมูลการสมัครผ่านระบบการรับ  สมัครนักศึกษาให้เรียบร้อย และ upload หลักฐานประกอบการสมัครผ่านระบบดังกล่าว</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. ส่งด้วยตนเอง หรือการส่งทางไปรษณีย์ เมื่อดำเนินการกรอกข้อมูลการสมัครผ่านระบบการรับสมัครนักศึกษาเรียบร้อยแล้ว ให้รวบรวมเอกสารทั้งหมดเพื่อจัดส่งให้มหาวิทยาลัยวลัยลักษณ์ ที่ ฝ่ายรับนักศึกษา ศูนย์บริการการศึกษา มหาวิทยาลัยวลัยลักษณ์ 222 ตำบลไทยบุรี อำเภอท่าศาลา จังหวัดนครศรีธรรมราช 80160</p>
                            <br>
                            <p> *นอกจากเอกสารแสดงผลการเรียนเฉลี่ยสะสมแล้ว ผู้สมัครจะต้องแสดงเอกสารเพิ่มเติม เช่น เอกสารการจบการศึกษา หรือใบเทียบวุฒิการศึกษา หรือใบรับรองจากโรงเรียน หรือใบ Predicted grade หรือผลการสอบการเทียบวุฒิ ดังรายละเอียดต่อไปนี้<p>
                            <div class="table-responsive table-bordered"  border-style: solid;border-color: coral;>
                                <table class="table">
                                    <tr class="table-danger ">
                                        <td>หากเป็นนักเรียนที่สำเร็จการศึกษาจากโรงเรียนนานาชาติในประเทศไทย</td>
                                        <td>หากเป็นนักเรียนที่กำลังศึกษาอยู่ในโรงเรียนนานาชาติในประเทศไทย</td>
                                    </tr>
                                    <tr class="">
                                        <td>→กรณีที่หลักสูตรได้รับการรับรองจากสำนักงานคณะกรรมการส่งเสริมการศึกษาเอกชน (สช.) ต้องมีเอกสารดังต่อไปนี้</td>
                                        <td>→กรณีที่หลักสูตรได้รับการรับรองจากสำนักงานคณะกรรมการส่งเสริมการศึกษาเอกชน (สช.) ต้องมีเอกสารดังต่อไปนี้</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <td>1.เอกสารการจบการศึกษา (Diploma หรือ Certificate of Secondary School Completion) จากโรงเรียน เช่น IB Diploma หรือ A Level Diploma หรือ High School Diploma เป็นต้น </td>
                                        <td>1.ใบรับรองจากโรงเรียน (ตามแบบฟอร์มของวิทยาลัยนานาชาติ) และ</td>
                                    </tr>
                                    <tr class="">
                                        <td>2.เอกสารแสดงผลการเรียน (Transcript) จากโรงเรีย</td>
                                        <td>2.ใบ Predicted grade</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <td>→กรณีที่หลักสูตรไม่ได้รับการรับรองจากสำนักงานคณะกรรมการส่งเสริมการศึกษาเอกเชน (สช.) หรือจากหลักสูตรนานาชาติในต่างประเทศ ต้องมีเอกสารเเช่นเดียวกับกรณีที่หลักสูตรได้รับการรองรับฯ ข้างต้น และ</td>
                                        <td>→กรณีที่หลักสูตรไม่ได้รับการรับรองจากสำนักงานคณะกรรมการส่งเสริมการศึกษาเอกเชน (สช.) หรือจากหลักสูตรนานาชาติในต่างประเทศ ต้องมีใบรับรองจากโรงเรียน (ตามแบบฟอร์มของวิทยาลัยนานาชาติ) เช่นเดียวกับกรณีที่หลักสูตรได้รับการรองรับฯ ข้างต้น และ</td>
                                    </tr>
                                    <tr class="">
                                        <td>1.ใบเทียบวุฒิการศึกษา ฉบับจริง ที่รับรองว่าเทียบวุฒิการศึกษาเท่าการศึกษาขั้นพื้นฐานตามหลักสูตรการศึกษาขั้นพื้นฐานที่ออกจากกระทรวงศึกษาธิการ (ในกรณีที่มี ก่อนประกาศระเบียบกระทรวงศึกษาธิการ ว่าด้วยการปรับปรุงระเบียบกระทรวงศึกษาธิการว่าด้วยการเทียบวุฒิการศึกษาในประเทศและต่างประเทศระดับการศึกษาขั้นพื้นฐาน พ.ศ. 2560 ลงวันที่ 15 กุมภาพันธ์ 2560) (ถ้ามี)</td>
                                        <td>1.ผลการสอบการเทียบวุฒิต่างๆ ตามระบบที่เรียนอยู่</td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                     </div>
                  </div>
               </div>
               