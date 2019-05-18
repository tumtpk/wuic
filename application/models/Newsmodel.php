<?php 

class Newsmodel extends CI_Model {

    public function getLNews($newId=null){
        $imagePath = base_url("public/img/news/");
        $news = [
            [],
            [
                "title" => "WUIC organised First Year End and Exchange Student Farewell Party.",
                "picture" => $imagePath."/firstyearend/1.jpg",
                "create_date" => "", 
                "content" => '
                    <p>To celebrate the end of academic year 2018, “First Year End and Exchange Student Farewell Party” was held on 01 May 2019. After the long examination period, it was the time for party but it was the time to say good bye to our first exchange student, Miss Della Maudy Mahardika, as well.</p>
                    <p>The function begins with the Thank you speech & report about the operation in the academic year 2018 by Dr. Jidtima Sunkhamani, Acting Dean of Walailak University International College (WUIC) and the speech by the exchange student (Miss Della Maudy Mahardika) who spent a semester at WUIC’s Digital Innovation Engineering program. Before the dinner started, a speech by Assoc. Prof. Dr. Surin Maisrikrod, Honorable Vice President for Global Engagement and Faculty Development also delivered to the first cohort of WUIC students.</p>
                    <p>During the event at Walailak Guest House, the students also had the opportunity to reflect on their experiences during the past academic year, followed by the introducing of WUIC College Students Committee.</p>
                    <p>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/firstyearend/2.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/firstyearend/3.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/firstyearend/4.jpg'.'" style="width: 100%;" />
                            </div>
                        </div>
                    </p>
                ' 
            ],
            [
                "title" => "WUIC won 3<sup>rd</sup> prize at the Startup Thailand League 2019 (South Region)",
                "picture" => $imagePath."/startup2/startup1.jpg",
                "create_date" => "", 
                "content" => '
                    <p>During April 20-21, 2019 at Prince of Songkla University, WUIC Students won third place at Startup Thailand League 2019 - Pitching round.</p>
                    <p>The Startup Thailand League 2019 has been running in 4 regions of Thailand. The competition opens opportunities for undergraduate students to create business models that can generate profits and make changes to society. At the competition at Prince of Songkla University, hundreds of students from universities in southern Thailand joined the event.  Sean Pastorfide, Chelsea Yimaye and Tachi Wangmo, students from WUIC participated with project "Errund" or Run for errands and won the third prize at the competition.</p>
                    <p>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/startup2/startup2.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/startup2/startup3.jpg'.'" style="width: 100%;" />
                            </div>
                        </div>
                    </p>
                ' 
            ],
            [
                "title" => "WUIC visited International School Ho Chi Minh City in Vietnam",
                "picture" => $imagePath."/vietnam/01.jpg",
                "create_date" => "", 
                "content" => '
                    <p>On Wednesday, 17 April, Asst. Prof. Dr. Marcin Drobnik, representative of Walailak University International College (WUIC) visited the International School Ho Chi Minh City in Vietnam. Graduates of this famous school join the best universities in the world, so we are pleased that our innovative programs have aroused considerable interest there! </p>
                    <p>If you\'re applying for WUIC for August 2019 entry, remember the application deadline for the new academic year is due on May 10, 2019.</p>
                    <p>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/vietnam/02.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/vietnam/03.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/vietnam/04.jpg'.'" style="width: 100%;" />
                            </div>
                        </div>
                    </p>
                ' 
            ],
            [
                "title" => "WUIC signed MOU with MEGA and AIEC",
                "picture" => $imagePath."/mou/MEGA.jpg",
                "create_date" => "", 
                "content" => '
                    <p>28 March 2019, Walailak University - Walailak University International College (WUIC) signed a Memorandum of Understanding (MOU) with Macquarie Education Group Australia (MEGA) and AIEC Student Services from Australia. Under this collaboration, prospective students of WUIC will have chance to take intensive English courses at MEGA in Sydney, Australia with special discount price.</p>
                    <p>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/mou/MEGA1.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/mou/MEGA2.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/mou/MEGA3.jpg'.'" style="width: 100%;" />
                            </div>
                        </div>
                    </p>
                ' 
            ],
            [
                "title" => "Special Seminar on “Global Leadership” by Prof. Peter P. Yuen",
                "picture" => $imagePath."/seminar/1.jpg",
                "create_date" => "", 
                "content" => '
                    <p>On 28 March 2019, Walailak University International College (WUIC) hosted a special seminar on “Global Leadership” for students, presented by Professor Dr. Peter P. Yuen, Dean of College of Professional and Continuing Education (CPCE), The Hong Kong Polytechnic University (PolyU). The lecture constituted a comprehensive guide for the 21st Century Leadership and how to merge leadership and innovation.</p>
                    <p>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/seminar/2.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/seminar/3.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/seminar/4.jpg'.'" style="width: 100%;" />
                            </div>
                        </div>
                    </p>
                ' 
            ],
            [
                "title" => "WUIC visits Panyadee - The British International School of Samui",
                "picture" => $imagePath."/Panyadee/1.jpg",
                "create_date" => "", 
                "content" => '
                    <p>Friday, March 8, representatives of Walailak University International College (WUIC) led by the Dean, Dr. Jidtima  Sunkhamani, visited the excellent Panyadee, the British International School of Samui. The school is an approved University of Cambridge International Centre and as such follows the Cambridge International Curriculum. “It was a real pleasure to talk with the outstanding students!” the team said after spending a couple hours with the students.</p>
                    <p>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/Panyadee/2.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/Panyadee/3.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/Panyadee/4.jpg'.'" style="width: 100%;" />
                            </div>
                        </div>
                    </p>
                ' 
            ],
            [
                "title" => "WUIC attended the \"UK visit-Academic Partnerships Workshop\" in London",
                "picture" => $imagePath."/partnerships/1.jpg",
                "create_date" => "", 
                "content" => '
                    <p>Walailak University International College (WUIC) led by Dean Jidtima Sunkhamani, and Associate Dean Ivan Bimbilovski, together with its UK partner, Coventry University London attended the “UK visit-Academic Partnerships Workshop”  in London during 24<sup>th</sup> February - 1<sup>st</sup> March 2019.</p>
                    <p>The Thai-UK Higher Education Partnerships Programme is funded and supported by the Office of the Higher Education Commission (OHEC) of Thailand and the British Council. It aims at strenghtening academic links between Thai and UK universities as a means to providing solutions to national policy and market challenges as well as to contributing to an internationalised environment and economic benefits for both Thailand and the UK.</p>
                    <p>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/partnerships/2.jpg'.'" style="width: 100%;" />
                            </div>
                        </div>
                    </p>
                ' 
            ],
            [
                "title" => "WUIC Students won Second Place at Walailak Startup Coaching Camp #1 Competition",
                "picture" => $imagePath."/Startup/01_o.jpg",
                "create_date" => "", 
                "content" => '
                    <p>On March 9-10, Walailak Startup Coaching Camp took place. During the camp, students from all faculties and all degrees competed in creating innovative business projects. The competition was furious but, of course, in the spirit of fair play.</p>
                    <p>We are pleased to inform you that our BBA students from Logistics Analytics and Supply Chain Management program, Chelsea Yimaye and Sean Pastorfide, took second place in the competition.</p>
                    <p>In April the next competition will be held in Songkhla. With the rate at which our students develop their talents only sky is their limit!</p>
                    <p>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/Startup/02_o.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/Startup/03_o.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-4">
                                <img src="'.$imagePath.'/Startup/04_o.jpg'.'" style="width: 100%;" />
                            </div>
                        </div>
                    </p>
                ' 
            ],
            [
                "title" => "WUIC visits International Schools in Bangkok",
                "picture" => $imagePath."/visit/1.jpg",
                "create_date" => "", 
                "content" => '
                    <p>Dr. Jidtima Sunkhamani, Dean of Walailak University International College (WUIC), Prof. Dr. Ivan Bimbilovski, Associate Dean and Asst. Prof. Dr. Marcin Drobnik visited International School Bangkok (ISB) and Ekamai International School. On this occasion, WUIC representatives also met Khun Usa Somboon, President of the International Schools Association of Thailand (ISAT) which is also the director of International School Bangkok, to introduce about undergraduate programs available at WUIC.</p>
                    <p>
                    During this visit, the representatives provided various information about International College as well as Walailak University, in order to create awareness among international schools in Bangkok. In additional, it was also a good opportunity for the college to get to know the needs of student from international schools and adjust the public relations strategy accordingly.
                    </p>

                    <p>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <img src="'.$imagePath.'/visit/2.jpg'.'" style="width: 100%;" />
                            </div>
                        </div>
                    </p>
                ' 
            ],
            [
                "title" => "WUIC have been selected to participate in
                Thailand-UK Higher Education Partnerships Programme",
                "picture" => $imagePath."/participate/1.jpg", 
                "create_date" => "", 
                "content" => '
                    <p>We are proud to announce that WUIC, together with its UK partner, Coventry
                    University London, have been selected to participate in the highly prestigious and
                    competitive Thai-UK Higher Education Partnerships Programme. Our joint project
                    proposal “Embedding Work Integrated Learning Components in the Dual Degree
                    Program in Global Tourism and Hospitality Management” was among the few
                    awarded applications.</p>
                    <p>
                    The Programme is funded and supported by the Office of the Higher Education
                    Commission (OHEC) of Thailand and the British Council. It aims at strenghtening
                    academic links between Thai and UK universities as a means to providing solutions
                    to national policy and market challenges as well as to contributing to an
                    internationalised environment and economic benefits for both Thailand and the UK.
                    </p>
                    <p>
                    The first Programme Workshop was held in Bangkok, from 13 - 15 February 2019,
                    where WUIC representatives, Dean Jidtima Sunkhamani, and Associate Dean Ivan
                    Bimbilovski, along with other awarded participants from several reputable Thai and
                    UK universities, were discussing and deciding on a plan for project development and
                    success and devising strategic plans for project implementation.
                    </p>
                    <p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="'.$imagePath.'/participate/2.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-6">
                                <img src="'.$imagePath.'/participate/3.jpg'.'" style="width: 100%;" />
                            </div>
                        </div>
                    </p>
                ' 
            ],
            [
                "title" => "“Going International Camp” held at WUIC during January 11-13, 2019",
                "picture" => $imagePath."/camp/2.jpg", 
                "create_date" => "", 
                "content" => '
                    <p>Professor Dr. Sombat Thamrongthanyawong, President of Walailak University delivered the opening remark at “Going International Camp @ WUIC” on 11th January, 2019. The camp organized by Walailak University International College (WUIC) at Co-Working Space, Walailak University during January 11-13, 2019.  Other memorable speech on “Explore Your Future in The 21st Century” also honorably delivered by Assoc. Prof. Dr. Surin Maisrikrod, Vice President for Global Engagement and Faculty Development on the second day of the camp.</p>
                    <p>“Going International Camp @WUIC” was offering the engaging programs for students including “Boosting up your English skills” and “Learning English through songs” where participants had the opportunities to improve their English skills in order to prepare for their entrance exam, as well as the chance to take the Common European Framework of Reference for Languages (CEFR) exam. The participants also attended the session of “Getting to know WUIC and Experiencing WUIC Smart Classroom” which gave them the inspiring experience as being one of WUIC students.</p>
                    <p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="'.$imagePath.'/camp/1.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-6">
                                <img src="'.$imagePath.'/camp/4.jpg'.'" style="width: 100%;" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="'.$imagePath.'/camp/3.jpg'.'" style="width: 100%;" />
                            </div>
                            <div class="col-md-6">
                                <img src="'.$imagePath.'/camp/5.jpg'.'" style="width: 100%;" />
                            </div>
                        </div>
                    </p>
                '
            ],
            [ 
                "title" => "WU signs MOU with Coventry University London", 
                "picture" => $imagePath."4.jpg", 
                "create_date" => "", 
                "content" => "
                    <p>Walailak University International College (Thailand) signed a Memorandum of Understanding (MOU) with Coventry University London (UK), in line with the vision of transnational education and educational developments.</p>
                    <p>The signing ceremony was held at Walailak University and attended by Prof.Dr. Sombat Thamrongthanyawong, President of  Walailak University (WU), Dr. Jidtima Sunkhamani, Acting Dean of Walailak University International College (WUIC) and Dr. Hanna Yakavenka, Coventry University London , along with a group of senior officials from Walailak University and honorable guests from the NST Chamber of Commerce.</p>
                " 
            ],
            [ 
                "title" => "WUIC roadshow reaches students in Surat Thani", 
                "picture" => $imagePath."5.jpg",
                "create_date" => "", 
                "content" => "
                    <p>Nov. 13<sup>th</sup>, 2018, Walailak University International College (WUIC) started their educational roadshow in neighbor province, Surat Thani. The overarching goal of the event was to encourage students to attend WUIC.</p>
                    <p>During the event at Suratthani School and Surat Pittaya School, Mathayom6 students from 6 various programs, were introduced about international education in WUIC, the programs, as well as opportunities to study at WUIC and scholarship.</p>
                    <p>“We have prepared the Smart University; Smart Classroom, Smart Laboratories, Smart Security, Smart Mobility. “What we are waiting for is you, the Smart Students” Asst. Prof. Dr. Marcin Jakub Drobnik from WUIC addressed to the high schoolers.</p>
                " 
            ],
            [ 
                "title" => "MOU Signing between WU, WUIC and IIAI", 
                "picture" => $imagePath."1.jpg", 
                "create_date" => "", 
                "content" => "
                    <p>On March 13, 2018, Assoc. Prof. Dr. Surin Maisrikrod, Vice-President for Global Engagement and Faculty Development, Walailak University (WU) and Dr. Jidtima Sunkhamani, Acting Dean of Walailak University International College (WUIC), welcomed delegates led by Prof. Dr. Kiyota Hashimoto, Vice President of International Institute of Applied Informatics (IIAI), Japan, in signing of the Memorandum of Understanding.</p>
                    <p>The memorandum aims to initiate joint educational and research cooperation as well as academic collaboration in various areas: (1) ICT Human Resource Development Program in the South-East Asian Countries, (2) Participation in, and co-hosting of International Conferences, Workshops, Symposia, and other education and research-based events, (3) Promotion and collaboration of research and publications, and (4) Other activities on the basis of equality and mutual benefits.</p>
                    <p>“Established in November 2017, Walailak University International College (WUIC) aims to provide courses that are conducted entirely in English equipping students with knowledge and comprehensive global vision as well as to generate new knowledge through research, academic and technical services, and to conserve and promote the traditional arts and culture of the region and the nation” said Dr. Jidtima Sunkhamani, Acting Dean of WUIC. “Working to reach those objectives, international collaboration has been set. The purpose of MOU with IIAI is to provide a framework by which the parties may in future undertake joint activities together in order to constantly develop ICT Human Resource in the South-East Asian Countries. After the signing ceremony, the agreement become effective immediately and remain valid for a period of five years.”</p>
                    <p>After the MOU signing ceremony, seminar on “Teaching Research” and “Fundamental of Optimization Technique” also held by IIAI delegates at Rabienbun 1 Meeting Room, Library Building 1st Floor, Walailak University, Nakhon Si Thammarat.</p>

                    <p><small><i>About IIAI</i></small><br><small>International Institute of Applied Informatics (IIAI) is a non-profit academic institute in Japan, aiming at international contributions to advancement and prevalence of achievements in the area of applied informatics for better life and society. IIAI is the academic and educational institute and delivers to promote applied informatics research, to enhance social life, and to support students who specialize in computer science and engineering. The Office of Applied Information Science was set up to prepare for founding IIAI in 2008. Formally, the office was dissolved with announce of its plan to launch on September 31, 2010. IIAI was founded with the help of some advisors, universities, companies and established committee on October 1st, 2010.</small></p>
                "  
            ],
            [ 
                "title" => "WUIC welcomed Dr. Sutida from MEGA, Sydney", 
                "picture" => $imagePath."6.jpg", 
                "create_date" => "", 
                "content" => "
                    <p>WUIC welcomed Dr. Sutida from MEGA, Sydney with great pleasure. Our BBA students enjoyed her teaching on Strategic Management very much. Thank you for visiting us and sharing your expertise and experience with them.</p>
                " 
            ],
            [ 
                "title" => "Education Opportunities in TNE Peer Review", 
                "picture" => $imagePath."7.jpg", 
                "create_date" => "", 
                "content" => "
                    <p>After participating in many activities under the UK-Thailand Transnational Education Development (TNE) Project, Dean of Walailak University International College (WUIC) joined TNE Peer Review at University of Westminster, London.</p>
                    <p>The Peer Review held during May 8-9, 2018, provided the opportunity for Thai and UK universities to help each other as well as for achieving optimum programme development and sustainability.</p>
                " 
            ],
            [ 
                "title" => "WUIC attends Going Global 2018", 
                "picture" => $imagePath."8.jpg", 
                "create_date" => "", 
                "content" => "
                    <p>During May 2-4, 2018, Dr. Jidtima Sunkhamani, Dean of Walailak University International College (WUIC), attended “Going Global 2018” held in Kuala Lumpur, Malaysia. This year's theme was 'Global connections, local impact'.</p>
                    <p>Going Global 2018 is a conference for leaders in international education to debate the future of further and higher education. Since 2004, Going Global has grown from a biennial event in the UK to an annual event alternating between the UK and major international cities.</p>
                " 
            ],
            [ 
                "title" => "WUIC attends Going Global 2018", 
                "picture" => $imagePath."3.jpg", 
                "create_date" => "", 
                "content" => "
                    <p>Walailak University International College (WUIC) has joined EduLife Expo 2018 - The biggest education expo consisting of various leading institutions and educational resources for Thai students, during 9-11 March, 2018 at Royal Paragon Hall, Siam Paragon, Bangkok. Exhibition visitors included school and university students, their guardians, as well as representatives of both Thai and international educational institutions.</p>
                " 
            ],
            [ 
                "title" => "Bachelor of Engineering (Digital Innovation Engineering)", 
                "picture" => $imagePath."8.jpg", 
                "create_date" => "", 
                "content" => "
                    <p>This program aims to produce graduates who inspire to change the digital world through innovative designs of applications and how they interact with humans worldwide. Graduates will respond to problems while creating new opportunities from digital innovations.</p>
                    <p>Graduates can pursue work in areas such as:</p>
                    <div class=\"col-md\">
                        <p>1. Computer Engineering</p>
                        <p>2. Innovative Engineers</p>
                        <p>3. Problem-solver in creative innovations</p>
                        <p>4. Software developers or programmer in an organization</p>
                        <p>5. Entrepreneurs in the computer industry or a founder of a startup</p>
                        <p>6. Digital products designers</p>
                        <p>7. Academic, Researcher, Technician in the field of digital innovation</p>
                    </div>
                " 
            ]
        ];
        
        if($newId == null){
            return $news;
        }else{
            if (array_key_exists($newId,$news)){
                return $news[$newId];
            }else{
                $this->load->helper('url');
                redirect(base_url(), 'refresh');
            }
        }
    }
}