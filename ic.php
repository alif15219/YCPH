<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=TH+Sarabun+New&display=swap" rel="stylesheet">
    <style>
    #navbar ul li a {
        font-size: 1.5em;
        /* ปรับขนาดฟอนต์ตามต้องการ */
        font-family: 'TH Sarabun New', sans-serif;
        /* ใช้ฟอนต์ไทย */
        font-weight: bold;
        /* ทำให้ฟอนต์ตัวหนา */

    }

    .appointment-btn {
        font-size: 10em;
        /* ปรับขนาดฟอนต์ตามต้องการ */
        font-family: 'TH Sarabun New', sans-serif;
        /* ใช้ฟอนต์ไทย */
        font-weight: bold;
        /* ทำให้ฟอนต์ตัวหนา */
    }
    </style>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>กลุ่มการพยาบาล รพร.ยะหา</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logoycph.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
    <link
        href="https://fonts.googleapis.com/css?family=Kanit:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medicio
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex">
                <!-- <i class="bi bi-clock"></i> -->
                <span
                    style="font-size:2em; color:black; font-family:'TH Sarabun New', 'TH Charm of AU', 'Angsana New', 'LilyUPC'; font-weight:bold;">
                    กลุ่มภารกิจด้านการพยาบาล
                </span>

            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone" style="color: black;"></i><span
                    style="font-family: 'TH Sarabun New', sans-serif; font-size: 1.5em; font-weight: bold; color: black;">
                    โทร. 073-xxxx-xx
                </span>
            </div>
        </div>
    </div>

    <?php

include('navbar_tem.php')
     ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                    <div class="container">
                        <h2
                            style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                            งานเฝ้าระวังการติดเชื้อ
                        </h2>
                        <h3>โรงพยาบาลสมเด็จพระยุพราชยะหา</h3>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="container">
                        <h2
                            style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                            งานเฝ้าระวังการติดเชื้อ
                        </h2>
                        <h3>โรงพยาบาลสมเด็จพระยุพราชยะหา</h3>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="container">
                        <h2
                            style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                            งานเฝ้าระวังการติดเชื้อ
                        </h2>
                        <h3>โรงพยาบาลสมเด็จพระยุพราชยะหา</h3>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= โครงสร้าง ======= -->
        <section id="services1" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        โครงสร้าง</h2>
                </div>
                <center> <img src="assets/img/slide/ผังองค์กรทีมIC.png" alt="คำอธิบายรูปภาพ"
                        style="width: 1400px; height: auto;">
                </center>

            </div>
        </section><!-- End โครงสร้าง -->

        <!-- ======= ขอบเขต ======= -->
        <section id="services2" class="about">
            <div class="container" data-aos="zoom-in">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        ขอบเขต</h2>
                </div>
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <img src="assets/img/ic_b.jpg" class="img-fluid" alt="Emergency Services">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <h3><i class="bi bi-clipboard-data"></i> การบริหารงานและการปฏิบัติงาน</h3>
                            <p>
                                <strong><i class="bi bi-gear"></i> การบริหารงาน:</strong>
                            <ul>
                                <li><i class="bi bi-check-circle"></i>
                                    กำหนดนโยบายและแนวปฏิบัติในการป้องกันและควบคุมการติดเชื้อ</li>
                                <li><i class="bi bi-check-circle"></i>
                                    วางแผนกลยุทธ์และพัฒนาโครงการด้านการป้องกันและควบคุมการติดเชื้อ</li>
                                <li><i class="bi bi-check-circle"></i>
                                    ทบทวนและปรับปรุงแนวปฏิบัติเพื่อให้สอดคล้องกับมาตรฐาน</li>
                            </ul>
                            </p>
                            <p>
                                <strong><i class="bi bi-person-check"></i> การปฏิบัติงาน:</strong>
                            <ul>
                                <li><strong>1. การป้องกันการติดเชื้อในกลุ่มผู้รับบริการ</strong>
                                    <ul>
                                        <li><i class="bi bi-check-circle"></i> พัฒนาระบบคัดกรองโรคติดเชื้อและการแยกโรค
                                        </li>
                                        <li><i class="bi bi-check-circle"></i> เฝ้าระวังการติดเชื้อในโรงพยาบาล
                                            และติดตามผลหลังการจำหน่าย</li>
                                        <li><i class="bi bi-check-circle"></i>
                                            ให้การพยาบาลผู้ป่วยโดยเน้นการวางแผนแบบองค์รวม</li>
                                    </ul>
                                </li>
                                <li><strong>2. การป้องกันการติดเชื้อในกลุ่มบุคลากร</strong>
                                    <ul>
                                        <li><i class="bi bi-check-circle"></i>
                                            ให้ความรู้เกี่ยวกับหลักการป้องกันการแพร่กระจายเชื้อ</li>
                                        <li><i class="bi bi-check-circle"></i>
                                            ให้คำปรึกษาและสนับสนุนบุคลากรในการพัฒนาทักษะเชิงวิชาชีพ</li>
                                        <li><i class="bi bi-check-circle"></i>
                                            จัดหาอุปกรณ์ป้องกันตัวและเฝ้าระวังภาวะเสี่ยงหลังเกิดเหตุ (Post Exposure)
                                        </li>
                                    </ul>
                                </li>
                                <li><strong>3. การป้องกันการติดเชื้อในสิ่งแวดล้อม</strong>
                                    <ul>
                                        <li><i class="bi bi-check-circle"></i>
                                            กำหนดแนวทางการจัดการและกำจัดมูลฝอยติดเชื้อ</li>
                                        <li><i class="bi bi-check-circle"></i>
                                            ประเมินและแก้ไขความเสี่ยงที่เกี่ยวข้องกับการติดเชื้อในสิ่งแวดล้อม</li>
                                    </ul>
                                </li>
                                <li><strong>4. การเฝ้าระวังโรคระบาดและโรคอุบัติใหม่อุบัติซ้ำ</strong>
                                    <ul>
                                        <li><i class="bi bi-check-circle"></i> ติดตามและเฝ้าระวังสถานการณ์โรคระบาด</li>
                                        <li><i class="bi bi-check-circle"></i> สอบสวนและรายงานการเฝ้าระวังโรค</li>
                                        <li><i class="bi bi-check-circle"></i>
                                            ปรับปรุงแนวทางปฏิบัติและแผนเผชิญเหตุเมื่อเกิดโรคระบาดใหม่</li>
                                    </ul>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>


                </div>









            </div>
        </section><!-- End ขอบเขต Section -->

        <!-- ======= About อัตรากำลัง Section ======= -->
        <section id="services3" class="counts">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        อัตรากำลัง</h2>
                </div>


                <table class="table table-hover" id="documentTable">
                    <thead>
                        <tr>
                            <th>ชื่อ-สกุล</th>
                            <th>ตำแหน่ง</th>
                            <th>บทบาท</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.พญ.ราอูมีน มาหามะ</td>
                            <td>แพทย์ชำนาญการพิเศษ</td>
                            <td>ประธาน</td>
                        </tr>
                        <tr>
                            <td>2.ทพญ.เชาวดี พืชสะกะ</td>
                            <td>ทันตแพทย์</td>
                            <td>รองประธาน</td>
                        </tr>
                        <tr>
                            <td>3.นางสาวนุรมา ตูหยง</td>
                            <td>พยาบาลวิชาชีพชำนาญการ</td>
                            <td>เลขานุการ</td>
                        </tr>
                        <tr>
                            <td>4.นางสาวอัยเส๊าะ สะตือบา</td>
                            <td>พยาบาลวิชาชีพชำนาญการ</td>
                            <td>ผู้ช่วยเลขานุการฝ่ายเฝ้าระวังการติดเชื้อ</td>
                        </tr>
                        <tr>
                            <td>5.นางสาวชุติมา งามเนตรพงศ์</td>
                            <td>พยาบาลวิชาชีพชำนาญการ</td>
                            <td>ผู้ช่วยเลขาฝ่ายป้องกันการติดเชื้อบุคคลากร</td>
                        </tr>
                        <tr>
                            <td>6.นางสาวอาโซรา ยีตูวา</td>
                            <td>นักกายภาพบำบัด</td>
                            <td>ผู้ช่วยเลขาการจัดการความเสี่ยงและสารสนเทศ</td>
                        </tr>
                        <tr>
                            <td>7.นางสาวฟะดีละห์ ดีแม</td>
                            <td>พยาบาลวิชาชีพชำนาญการ</td>
                            <td>ผู้ช่วยเลขาฝ่ายความปลอดภัยสิ่งแวดล้อม</td>
                        </tr>
                        <tr>
                            <td>8.นางพัชราวลัย มนรัตน์</td>
                            <td>พนักงานช่วยเหลือคนไข้</td>
                            <td>ผู้ช่วยเลขาฝ่ายงานปราศจากเชื้อ</td>
                        </tr>
                        <tr>
                            <td>9.นางสากีนะ สุระกำแหง</td>
                            <td>พยาบาลวิชาชีพชำนาญการ</td>
                            <td>ผู้ช่วยเลขาฝ่ายพัฒนาบริการเครือข่าย/ชุมชน</td>
                        </tr>
                        <tr>
                            <td>10.นางลดาวัลย์ สุชิตวาส</td>
                            <td>พยาบาลวิชาชีพชำนาญการ</td>
                            <td>ผู้ช่วยเลขาฝ่ายการจัดการเชื้อดื้อยาและโรคอุบัติใหม่อุบัติซ้ำ</td>
                        </tr>
                        <tr>
                            <td>11.นายอาลีฟ กะมูนิง</td>
                            <td>นักวิชาการคอมพิวเตอร์</td>
                            <td>การจัดการระบบ IT</td>
                        </tr>

                        <tr>
                            <td>12.นางนูรีนา กีละ</td>
                            <td>พยาบาลวิชาชีพชำนาญการ</td>
                            <td>กรรมการ</td>
                        </tr>
                        <tr>
                            <td>13.นางสาวสุภาวดี ศิระเชาว์เจริญ</td>
                            <td>พยาบาลวิชาชีพชำนาญการ</td>
                            <td>กรรมการ</td>
                        </tr>
                        <tr>
                            <td>14.นางกนกวรรณ เรืองสง่า</td>
                            <td>พยาบาลวิชาชีพชำนาญการ</td>
                            <td>กรรมการ</td>
                        </tr>
                        <tr>
                            <td>15.นางสาวนัสรีน รอยิง</td>
                            <td>นักโภชนการ</td>
                            <td>กรรมการ</td>
                        </tr>
                        <tr>
                            <td>16.นางสาวสีตีแลคอ มาหนิ๊</td>
                            <td>จพ.สาธารณสุขชำนาญงาน</td>
                            <td>กรรมการ</td>
                        </tr>
                        <tr>
                            <td>17.นางสาวสามีเร๊าะ ดีแม</td>
                            <td>พยาบาลวิชาชีพชำนาญการ</td>
                            <td>กรรมการ</td>
                        </tr>
                        <tr>
                            <td>18.นางสาววิลดา ดือราซอลีมา</td>
                            <td>นักวิชาการสาธารณสุข</td>
                            <td>กรรมการ</td>
                        </tr>
                        <tr>
                            <td>19.นางสาวอัศนะห์ ราแดง</td>
                            <td>นักเทคนิคการแพทย์</td>
                            <td>กรรมการ</td>
                        </tr>
                        <tr>
                            <td>20.นางสาวกมลรัตน์ ศรสุริยวงศ์</td>
                            <td>นวก.สาธารณสุข</td>
                            <td>กรรมการ</td>
                        </tr>
                        <tr>
                            <td>21.นางสาวรอยฮัน โตะลากอ</td>
                            <td>พนักงานบริการ</td>
                            <td>กรรมการ</td>
                        </tr>
                        <tr>
                            <td>22.นูรีซัน สาแมหาดี</td>
                            <td>พนักงานช่วยเหลือคนไข้</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>23.นางสาวอามีเน๊าะ เล๊าะราแม</td>
                            <td>พนักงานบริการ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>24.นางสาวสารีมะห์ ลาเต๊ะ</td>
                            <td>พนักงานบริการ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>25.นางสาวสนีดา ดือเระ</td>
                            <td>พนักงานบันทึกข้อมูล</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>26.นางสาวซุวัยดา สะมะแอ</td>
                            <td>จพ.การเงินและบัญชี</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>27.นางสาวคูซัยมะ วาเยะ</td>
                            <td>พนักงานธุรการ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>28.นางสาวฟาตีมา ตะโล๊ะ</td>
                            <td>พนักงานช่วยเหลือคนไข้</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>29.นางอาอีเสาะ วาเงาะ</td>
                            <td>พนักงานบริการ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>30.นางจันเพ็ญ เดชดำรง</td>
                            <td>พนักงานบริการ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>31.นางรอฮานา เนือเรง</td>
                            <td>พนักงานบริการ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>32.นางอาอีเส๊าะ สะตือบา</td>
                            <td>พนักงานบริการ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>33.นายอิรฟัน เย็ง</td>
                            <td>นักวิชาการพัสดุ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>34.นางจะลิวรรณ ใจสมัคร</td>
                            <td>พนักงานบริการ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>35.นายบือราเฮง แดเบาะ</td>
                            <td>พนักงานช่วยเหลือคนไข้</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>36.นางสาวมิสบะห์ สาและ</td>
                            <td>พนักงานช่วยเหลือคนไข้</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>37.นางอาอีซะ ยีสลำ</td>
                            <td>ผู้ช่วยนักกายภาพ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>38.นางซารีมัน บาฮี</td>
                            <td>พนักงานบริการ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>39.นางสาวฟาตีฮะห์ อาแด</td>
                            <td>พนักงานบริการ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>40.นางสาวนาตยาพร นุ่นแก้ว</td>
                            <td>พนักงานบริการ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <tr>
                            <td>41.นางสาวสีตีรอกีเย๊าะ แซแกะ</td>
                            <td>พนักงานบริการ</td>
                            <td>อนุกรรมการ</td>
                        </tr>
                        <!-- สามารถเพิ่มรายการอื่น ๆ ได้ตามต้องการ -->
                    </tbody>
                </table>


            </div>
        </section><!-- End About อัตรากำลัง Section -->

        <!-- ======= เเผนงานโครงการ Section ======= -->
        <section id="services4" class="counts">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        เเผนงานโครงการ</h2>
                </div>
                <center>
                    <div style="position:relative;padding-top:0;width:900px;height:500px;"><iframe
                            style="position:absolute;border:none;width:100%;height:100%;left:0;top:0;"
                            src="https://online.fliphtml5.com/ozcgk/zxjo/" seamless="seamless" scrolling="no"
                            frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe></div>
                </center>

            </div>
        </section><!-- End เเผนงานโครงการ Section -->

        <!-- ======= SPQ67 Section ======= -->
        <section id="services5" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        แบบประเมินตนเอง IC 67</h2>
                </div>
                <center><div style="position:relative;padding-top:0;width:900px;height:500px;"><iframe
                        style="position:absolute;border:none;width:100%;height:100%;left:0;top:0;"
                        src="https://online.fliphtml5.com/nmjby/yuwm/" seamless="seamless" scrolling="no"
                        frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe></div></center>

            </div>
        </section><!-- End SPQ67 Section -->

        <!-- ======= ทบทวน12โปรเเกรม Section ======= -->
        <!-- <section id="services6" class="services services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        ทบทวน 12 โปรเเกรม</h2>
                </div>
                <center><iframe style="position:relative;padding-top:0;width:900px;height:500px;" src="https://online.fliphtml5.com/oczzy/ujqe/"
                        seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"
                        allowfullscreen="true"></iframe></center>

            </div>
        </section> -->
        <!-- End ทบทวน12โปรเเกรม Section -->

        <!-- ======= ผลงาน Section ======= -->
        <!-- <section id="services7" class="services services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        ผลงานภาคภูมิใจ</h2>
                </div>



            </div>

        </section> -->
        <!-- End ผลงาน Section -->

        <!-- ======= ภาพกิจกรรม Section ======= -->
        <section id="services8" class="gallery">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        ภาพกิจกรรม</h2>
                </div>


                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <?php
        // ระบุโฟลเดอร์ที่เก็บรูปภาพ
        $directory = 'assets/img/gallery/ic'; 
        $images = array_diff(scandir($directory), array('..', '.')); // ดึงไฟล์ทั้งหมดในโฟลเดอร์ ยกเว้น . และ ..
        
        // วนลูปไฟล์รูปภาพ
        foreach ($images as $image) {
            // ตรวจสอบว่าเป็นไฟล์รูปภาพ (jpg, png, gif)
            $extension = pathinfo($image, PATHINFO_EXTENSION);
            if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'gif'])) {
                // แสดงผลไฟล์รูปภาพในรูปแบบ Swiper Slide
                echo '<div class="swiper-slide">
                        <a class="gallery-lightbox" href="' . $directory . '/' . htmlspecialchars($image) . '">
                            <img src="' . $directory . '/' . htmlspecialchars($image) . '" class="img-fluid" alt="">
                        </a>
                      </div>';
            }
        }
        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <!-- เพิ่ม CSS และ JS ของ Swiper -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
                <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

                <script>
                // เริ่มต้น Swiper Slider
                var swiper = new Swiper('.gallery-slider', {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 40,
                        },
                        1024: {
                            slidesPerView: 4,
                            spaceBetween: 50,
                        },
                    },
                });
                </script>


            </div>
        </section><!-- End ภาพกิจกรรม Section -->

        <!-- ======= CNPG Section ======= -->
        <section id="services9" class="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        แนวปฏิบัติ/CNPG</h2>
                </div>
                <?php
                $directory = '/var/www/html/wabsite_group/assets/img/file/ic'; // ไดเรกทอรีของไฟล์
                  $files = array_diff(scandir($directory), array('..', '.')); // ดึงรายชื่อไฟล์ทั้งหมด
                  ?>



                <!-- Include jQuery -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <!-- Include DataTables CSS and JS -->
                <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
                <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


                <table class="table table-hover" id="documentTable">
                    <thead>
                        <tr>
                            <th>ชื่อไฟล์</th>
                            <th>ดาวน์โหลด</th>
                        </tr>
                    </thead>
                    <tbody id="fileTable">
                        <?php foreach ($files as $file): ?>
                        <?php if (pathinfo($file, PATHINFO_EXTENSION) === 'pdf'): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($file); ?></td>
                            <td><a href="<?php echo "/wabsite_group/assets/img/file/ic/" . htmlspecialchars($file); ?>"
                                    class="btn btn-primary" download>ดาวน์โหลด</a></td>
                        </tr>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>


                <script>
                $(document).ready(function() {
                    $('#documentTable').DataTable({
                        "pageLength": 20,
                        "language": {
                            "search": "ค้นหา:",
                            "lengthMenu": "แสดง _MENU_ รายการต่อหน้า",
                            "info": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
                            "paginate": {
                                "first": "หน้าแรก",
                                "last": "หน้าสุดท้าย",
                                "next": "ถัดไป",
                                "previous": "ก่อนหน้า"
                            }
                        },
                        "columnDefs": [{
                            "targets": 0, // กำหนดให้การเรียงใช้ในคอลัมน์ที่ 1 (index 0)
                            "type": "numeric" // การเรียงแบบตัวเลข
                        }],
                        "order": [
                            [0, 'asc']
                        ] // เรียงตามคอลัมน์แรก (index 0) ที่เป็นตัวเลข
                    });
                });
                </script>

            </div>
        </section><!-- End TestimonCNPGials Section -->


        <!-- ======= Contact Section ======= -->
        <?php
    include('contac.php')
         ?>
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
    include('Footer.php')
    ?>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>