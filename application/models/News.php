<?php 

class News extends CI_Model {

    public function getLNews(){
        $imagePath = base_url("public/img/news/");
        $news = [
            [ 
                "title" => "Walailak University International College (Thailand) signed a Memorandum of Understanding (MoU) with Coventry University London (UK)", 
                "picture" => $imagePath."4.jpg", 
                "content" => "
                    <p>Walailak University International College (Thailand) signed a Memorandum of Understanding (MoU) with Coventry University London (UK), in line with the vision of transnational education and educational developments.</p>
                    <p>The signing ceremony was held at Walailak University and attended by Prof.Dr. Sombat Thamrongthanyawong, President of  Walailak University (WU), Dr. Jidtima Sunkhamani, Acting Dean of Walailak University International College (WUIC) and Dr. Hanna Yakavenka, Coventry University London , along with a group of senior officials from Walailak University and honorable guests from the NST Chamber of Commerce.</p>
                " 
            ],
            [ 
                "title" => "WUIC roadshow reaches students in Surat Thani province, connecting them to education opportunities in Walailak University International College.", 
                "picture" => $imagePath."5.jpg",
                "content" => "
                    <p>Nov. 13<sup>th</sup>, 2018, Walailak University International College (WUIC) started their educational roadshow in neighbor province, Surat Thani. The overarching goal of the event was to encourage students to attend WUIC.</p>
                    <p>During the event at Suratthani School and Surat Pittaya School, Mathayom6 students from 6 various programs, were introduced about international education in WUIC, the programs, as well as opportunities to study at WUIC and scholarship.</p>
                    <p>“We have prepared the Smart University; Smart Classroom, Smart Laboratories, Smart Security, Smart Mobility. “What we are waiting for is you, the Smart Students” Asst. Prof. Dr. Marcin Jakub Drobnik from WUIC addressed to the high schoolers.</p>
                " 
            ],
            [ 
                "title" => "MOU Signing between WU, WUIC and IIAI", 
                "picture" => $imagePath."1.jpg", 
                "content" => "
                    <p>On March 13, 2018, Assoc. Prof. Dr. Surin Maisrikrod, Vice-President for Global Engagement and Faculty Development, Walailak University (WU) and Dr. Jidtima Sunkhamani, Acting Dean of Walailak University International College (WUIC), welcomed delegates led by Prof. Dr. Kiyota Hashimoto, Vice President of International Institute of Applied Informatics (IIAI), Japan, in signing of the Memorandum of Understanding.</p>
                    <p>The memorandum aims to initiate joint educational and research cooperation as well as academic collaboration in various areas: (1) ICT Human Resource Development Program in the South-East Asian Countries, (2) Participation in, and co-hosting of International Conferences, Workshops, Symposia, and other education and research-based events, (3) Promotion and collaboration of research and publications, and (4) Other activities on the basis of equality and mutual benefits.</p>
                    <p>“Established in November 2017, Walailak University International College (WUIC) aims to provide courses that are conducted entirely in English equipping students with knowledge and comprehensive global vision as well as to generate new knowledge through research, academic and technical services, and to conserve and promote the traditional arts and culture of the region and the nation” said Dr. Jidtima Sunkhamani, Acting Dean of WUIC. “Working to reach those objectives, international collaboration has been set. The purpose of MOU with IIAI is to provide a framework by which the parties may in future undertake joint activities together in order to constantly develop ICT Human Resource in the South-East Asian Countries. After the signing ceremony, the agreement become effective immediately and remain valid for a period of five years.”</p>
                    <p>After the MOU signing ceremony, seminar on “Teaching Research” and “Fundamental of Optimization Technique” also held by IIAI delegates at Rabienbun 1 Meeting Room, Library Building 1st Floor, Walailak University, Nakhon Si Thammarat.</p>

                    <p><small><i>About IIAI</i></small><br><small>International Institute of Applied Informatics (IIAI) is a non-profit academic institute in Japan, aiming at international contributions to advancement and prevalence of achievements in the area of applied informatics for better life and society. IIAI is the academic and educational institute and delivers to promote applied informatics research, to enhance social life, and to support students who specialize in computer science and engineering. The Office of Applied Information Science was set up to prepare for founding IIAI in 2008. Formally, the office was dissolved with announce of its plan to launch on September 31, 2010. IIAI was founded with the help of some advisors, universities, companies and established committee on October 1st, 2010.</small></p>
                "  
            ],
            [ 
                "title" => "WUIC welcomed Dr. Sutida from MEGA, Sydney with great pleasure", 
                "picture" => $imagePath."6.jpg", 
                "content" => "
                    <p>WUIC welcomed Dr. Sutida from MEGA, Sydney with great pleasure. Our BBA students enjoyed her teaching on Strategic Management very much. Thank you for visiting us and sharing your expertise and experience with them.</p>
                " 
            ],
            [ 
                "title" => "After participating in many activities under the UK-Thailand Transnational Education Development (TNE) Project", 
                "picture" => $imagePath."7.jpg", 
                "content" => "
                    <p>After participating in many activities under the UK-Thailand Transnational Education Development (TNE) Project, Dean of Walailak University International College (WUIC) joined TNE Peer Review at University of Westminster, London.</p>
                    <p>The Peer Review held during May 8-9, 2018, provided the opportunity for Thai and UK universities to help each other as well as for achieving optimum programme development and sustainability.</p>
                " 
            ],
            [ 
                "title" => "Dean of Walailak University International College (WUIC), attended “Going Global 2018” held in Kuala Lumpur, Malaysia.", 
                "picture" => $imagePath."8.jpg", 
                "content" => "
                    <p>During May 2-4, 2018, Dr. Jidtima Sunkhamani, Dean of Walailak University International College (WUIC), attended “Going Global 2018” held in Kuala Lumpur, Malaysia. This year's theme was 'Global connections, local impact'.</p>
                    <p>Going Global 2018 is a conference for leaders in international education to debate the future of further and higher education. Since 2004, Going Global has grown from a biennial event in the UK to an annual event alternating between the UK and major international cities.</p>
                " 
            ]
        ];
        
        return $news;
    }
}