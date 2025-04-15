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
                            งานอุบัติเหตุฉุกเฉิน
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
                            งานอุบัติเหตุฉุกเฉิน
                        </h2>
                        <h3>โรงพยาบาลสมเด็จพระยุพราชยะหา</h3>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/er-slide.jpg)">
                    <div class="container">
                        <h2
                            style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                            งานอุบัติเหตุฉุกเฉิน
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
                <center> <img src="assets/img/slide/er.jpg" alt="คำอธิบายรูปภาพ" style="width: 1400px; height: auto;">
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
                            <img src="assets/img/departments-1.jpg" class="img-fluid" alt="Emergency Services">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <h3><i class="bi bi-hospital"></i> รายละเอียดการบริการ</h3>
                            <p>
                                <strong><i class="bi bi-truck"></i> 1. Pre-hospital:</strong>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> การบริการการแพทย์ฉุกเฉิน (ALS, BLS, FR)</li>
                                <li><i class="bi bi-check-circle"></i> รับแจ้งเหตุ ออกปฏิบัติการ</li>
                                <li><i class="bi bi-check-circle"></i> ดูแลผู้ป่วย ณ จุดเกิดเหตุ และระหว่างนำส่ง</li>
                                <li><i class="bi bi-check-circle"></i> ส่งต่อข้อมูลให้สถานพยาบาล</li>
                            </ul>
                            </p>
                            <p>
                                <strong><i class="bi bi-building"></i> 2. In-hospital:</strong>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> ให้บริการผู้ป่วยอุบัติเหตุ (Trauma)
                                    และเจ็บป่วยฉุกเฉิน (Non-trauma)</li>
                                <li><i class="bi bi-check-circle"></i> มีแพทย์ให้บริการตลอด 24 ชั่วโมง</li>
                                <li><i class="bi bi-check-circle"></i> ทำหัตถการ เช่น ฉีดยา ทำแผล เย็บแผล ผ่าฝี
                                    เข้าเฝือก</li>
                                <li><i class="bi bi-check-circle"></i> ตรวจรักษาผู้ป่วยนอกเวลาราชการ (20.30 น. - 08.30
                                    น.)</li>
                                <li><i class="bi bi-check-circle"></i> ทีมตอบโต้ภาวะฉุกเฉินในโรงพยาบาล (RRT)</li>
                                <li><i class="bi bi-check-circle"></i> บริการผู้ป่วยคดีและนิติเวช</li>
                            </ul>
                            </p>
                            <p>
                                <strong><i class="bi bi-arrow-left-right"></i> 3. Interfacility:</strong>
                            <ul>
                                <li><i class="bi bi-check-circle"></i>
                                    รับและส่งต่อผู้ป่วยไปยังโรงพยาบาลที่มีศักยภาพสูงกว่า</li>
                                <li><i class="bi bi-check-circle"></i> รับผู้ป่วยกลับมารักษาที่โรงพยาบาลต้นทาง</li>
                            </ul>
                            </p>
                            <p>
                                <strong><i class="bi bi-people"></i> 4. MCI:</strong>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> ให้บริการอุบัติเหตุหมู่ เช่น อุบัติเหตุจราจร
                                    อัคคีภัย</li>
                                <li><i class="bi bi-check-circle"></i> ทีม DMAT, DMERT, Mini MERT ระดับจังหวัด</li>
                            </ul>
                            </p>
                            <p>
                                <strong><i class="bi bi-lightbulb"></i> 5. งานอื่น ๆ:</strong>
                            <ul>
                                <li><i class="bi bi-check-circle"></i>
                                    ให้บริการความรู้เกี่ยวกับการปฐมพยาบาลและการช่วยฟื้นคืนชีพ</li>
                                <li><i class="bi bi-check-circle"></i>
                                    เป็นครูพี่เลี้ยงสำหรับนักศึกษาพยาบาลและการฝึกอบรมการปฐมพยาบาล</li>
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


                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-user-nurse"></i>
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>พยาบาลวิชาชีพ (ข้าราชการ)</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-user-nurse"></i>
                            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>พยาบาลวิชาชีพ (จ้างเหมาบริการ)</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-ambulance"></i>
                            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>เจ้าพนักงานฉุกเฉินการแพทย์ขั้นสูง (ข้าราชการ)</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-hands-helping"></i>
                            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="2"
                                class="purecounter"></span>
                            <p><strong>พนักงานช่วยเหลือคนไข้ (จ้างเหมาบริการ) เเละ พนักงานบริการ
                                    (พนักงานกระทรวงสาธารณสุข) </strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>


                </div>


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
                <!-- <center><iframe style="position:relative;padding-top:0;width:900px;height:500px;"
                        src="https://online.fliphtml5.com/oczzy/oduy/" seamless="seamless" scrolling="no"
                        frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe></center> -->

                        <center><iframe style='width:900px;height:500px' src='https://fliphtml5.com/bookcase/tvslz' seamless='seamless'
                    scrolling='no' frameborder='0' allowtransparency='true' allowfullscreen></iframe></center>

            </div>
        </section><!-- End เเผนงานโครงการ Section -->

        <!-- ======= SPQ67 Section ======= -->
        <section id="services5" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        service profile QA 67</h2>
                </div>
                <center><iframe style="position:relative;padding-top:0;width:900px;height:500px;"
                        src="https://online.fliphtml5.com/oczzy/bumr/" seamless="seamless" scrolling="no"
                        frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe></center>

            </div>
        </section><!-- End SPQ67 Section -->

        <!-- ======= ทบทวน12โปรเเกรม Section ======= -->
        <section id="services6" class="services services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        ทบทวน 12 โปรเเกรม</h2>
                </div>
                <center><iframe style="position:relative;padding-top:0;width:900px;height:500px;"
                        src="https://online.fliphtml5.com/oczzy/ujqe/" seamless="seamless" scrolling="no"
                        frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe></center>

            </div>
        </section><!-- End ทบทวน12โปรเเกรม Section -->

        <!-- ======= ผลงาน Section ======= -->
        <section id="services7" class="services services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        ผลงานภาคภูมิใจ</h2>
                </div>

                </head>

                <body>
                    <table class="table table-hover" id="documentTable">
                        <thead>
                            <tr>
                                <th>วันที่</th>
                                <th>ชื่อ-สกุล</th>
                                <th>ชื่อเรื่อง</th>
                                <th>ประเภท</th>
                                <th>สถานที่</th>
                                <th>ผลรางวัล</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>14-15 ธ.ค. 2560</td>
                                <td>งานอุบัติเหตุ ฉุกเฉิน</td>
                                <td>ประสิทธิผลการบริหารจัดการ
                                    การลดอุบัติเหตุทางถนนโดยการมีส่วนร่วมของชุมชนในพื้นที่อำเภอยะหา จังหวัดยะลา
                                    (Bangoycinae model)</td>
                                <td>Research</td>
                                <td>งานมหกรรมวิชาการ (Regional ER Forum) เขต12 ร่วมกับ สพฉ.</td>
                                <td>รองชนะเลิศอันดับ 1</td>
                            </tr>
                            <tr>
                                <td>14-15 ธ.ค. 2560</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>Bangoycinae model : Spot map EMS Stroke & STEMI alert</td>
                                <td>Poster</td>
                                <td>งานมหกรรมวิชาการ (Regional ER Forum) เขต12 ร่วมกับ สพฉ.</td>
                                <td>ชนะลิศ</td>
                            </tr>
                            <tr>
                                <td>22-มิ.ย.-61</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>Fixed fomular Diazepam in Febrile convulsion</td>
                                <td>นวัตกรรมสิ่งประดิษฐ์</td>
                                <td>งานมหกรรมวิชาการและประกวดผลงานวิชาการจังหวัดยะลา</td>
                                <td>ชมเชย</td>
                            </tr>
                            <tr>
                                <td>2562</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>Easy MOPH ED Triage</td>
                                <td>นวัตกรรมสิ่งประดิษฐ์</td>
                                <td>งานมหกรรมวิชาการและประกวดผลงานวิชาการจังหวัดยะลา</td>
                                <td>ชมเชย</td>
                            </tr>
                            <tr>
                                <td>2562</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>ใบประกาศเกียรติคุณและเข็มเชิดชูเกียรติ</td>
                                <td>ผู้มีจิตอาสา เสียสละ อุทิศตนและมีคุณูปการต่องานด้านการแพทย์ฉุกเฉิน</td>
                                <td>สถาบันการแพทย์ฉุกเฉิน</td>
                                <td>สรรเสริญชั้น 5</td>
                            </tr>
                            <tr>
                                <td>2562</td>
                                <td>งานอุบัติเหตุ ฉุกเฉิน</td>
                                <td>อำเภอดำเนินงานป้องกันการบาดเจ็บจากอุบัติเหตุทางถนน (D-RTI) ดีเยี่ยม (Advance)
                                </td>
                                <td>DRTI PLUS</td>
                                <td>อิมแพคอารีนา เมืองทองธานี</td>
                                <td>ระดับประเทศระดับทอง</td>
                            </tr>
                            <tr>
                                <td>2563</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>เดือนรอมฎอน เดือนแห่งถนนสีขาว</td>
                                <td>Poster</td>
                                <td>งานมหกรรมวิชาการและประกวดผลงานวิชาการจังหวัดยะลา</td>
                                <td>ชมเชย</td>
                            </tr>
                            <tr>
                                <td>2563</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>พยาบาลต้นแบบ จังหวัดยะลา</td>
                                <td>พยาบาลต้นแบบจังหวัดยะลา</td>
                                <td>วิทยาลัยพยาบาลบรมราชชนนียะลา</td>
                                <td>พยาบาลต้นแบบจังหวัดยะลา</td>
                            </tr>
                            <tr>
                                <td>2564</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>New normal Emergency YCPH</td>
                                <td>CQI (oral)</td>
                                <td>งานมหกรรมวิชาการ รพร.ยะหา</td>
                                <td>รองชนะเลิศอันดับ 1</td>
                            </tr>
                            <tr>
                                <td>2564</td>
                                <td>นายมหามะซัยดิง แดวอสนุง</td>
                                <td>ใบประกาศเกียรติคุณและเข็มเชิดชูเกียรติ</td>
                                <td>ผู้มีจิตอาสา เสียสละ อุทิศตนและมีคุณูปการต่องานด้านการแพทย์ฉุกเฉิน</td>
                                <td>สถาบันการแพทย์ฉุกเฉิน</td>
                                <td>สรรเสริญชั้น 5</td>
                            </tr>
                            <tr>
                                <td>2565</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>การช่วยฟื้นคืนชีพแบบบูรณาการเครือข่ายอำเภอยะหา</td>
                                <td>CQI (oral)</td>
                                <td>งานมหกรรมวิชาการ รพร.ยะหา</td>
                                <td>รองชนะเลิศอันดับ 2</td>
                            </tr>
                            <tr>
                                <td>2566</td>
                                <td>นางศกลวรรณ อารีบุหงา, นายมูหัมมัดรอฎวาน ซาโรมอ</td>
                                <td>การพัฒนาการคัดแยก(Easy MOPH ED Triage)ของพยาบาลวิชาชีพงานอุบัติเหตุ ฉุกเฉิน
                                    โรงพยาบาลสมเด็จพระยุพราชยะหา</td>
                                <td>R2R (Research)</td>
                                <td>งานมหกรรมวิชาการ รพร.ยะหา</td>
                                <td>รองชนะเลิศอันดับ 1</td>
                            </tr>
                            <tr>
                                <td>18-19 ธ.ค. 2566</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>การพัฒนาเครื่องมือคัดแยก Easy YCPH ED Triage สำหรับพยาบาลวิชาชีพงานอุบัติเหตุ
                                    ฉุกเฉิน โรงพยาบาลสมเด็จพระยุพราชยะหา</td>
                                <td>วิจัย R&D Oral presentation</td>
                                <td>การประชุมวิชาการการแพทย์ฉุกเฉินระดับชาติ ครั้งที่ 15</td>
                                <td>ยอดเยี่ยม</td>
                            </tr>
                            <tr>
                                <td>18-19 ธ.ค. 2566</td>
                                <td>นางศกลวรรณ อารีบุหงา, น.ส.ซัยนะ สาและ</td>
                                <td>รู้ทัน รู้ไว โรคหลอดเลือดสมองเครือข่ายอำเภอยะหา</td>
                                <td>CQI Poster Presentation</td>
                                <td>การประชุมวิชาการการแพทย์ฉุกเฉินระดับชาติ ครั้งที่ 15</td>
                                <td>เข้าร่วมนำเสนอผลงาน</td>
                            </tr>
                            <tr>
                                <td>18-19 ธ.ค. 2566 (ปี 2567)</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>การพัฒนาเครื่องมือคัดแยก Easy YCPH ED Triage สำหรับพยาบาลวิชาชีพงานอุบัติเหตุ
                                    ฉุกเฉิน โรงพยาบาลสมเด็จพระยุพราชยะหา</td>
                                <td>วิจัย R&D Oral presentation</td>
                                <td>การประชุมวิชาการการแพทย์ฉุกเฉินระดับชาติ ครั้งที่ 15 ประจำปี 2566
                                    การวิจัยและนวัตกรรมการแพทย์ฉุกเฉิน</td>
                                <td>ยอดเยี่ยม</td>
                            </tr>
                            <tr>
                                <td>18-19 ธ.ค. 2566 (ปี 2567)</td>
                                <td>นางศกลวรรณ อารีบุหงา, น.ส.ซัยนะ สาและ</td>
                                <td>รู้ทัน รู้ไว โรคหลอดเลือดสมองเครือข่ายอำเภอยะหา</td>
                                <td>CQI Poster Presentation</td>
                                <td>การประชุมวิชาการการแพทย์ฉุกเฉินระดับชาติ ครั้งที่ 15 ประจำปี 2566
                                    การวิจัยและนวัตกรรมการแพทย์ฉุกเฉิน</td>
                                <td>เข้าร่วมนำเสนอผลงาน</td>
                            </tr>
                            <tr>
                                <td>12-15 มีนาคม 67</td>
                                <td>นางศกลวรรณ อารีบุหงา, น.ส.ซัยนะ สาและ</td>
                                <td>รู้ทัน รู้ไว โรคหลอดเลือดสมอง เครือข่ายอำเภอยะหา</td>
                                <td>CQI Electric poster</td>
                                <td>ประชุมวิชาการประจำปี HA National Forum ครั้งที่ 24</td>
                                <td>เข้าร่วมนำเสนอผลงาน</td>
                            </tr>
                            <tr>
                                <td>26-เม.ย.-67</td>
                                <td>นางศกลวรรณ อารีบุหงา, น.ส.ซัยนะ สาและ</td>
                                <td>การพัฒนาระบบการเข้าถึงบริการของผู้ป่วยโรคหลอดเลือดสมอง
                                    โรงพยาบาลสมเด็จพระยุพราชยะหา
                                </td>
                                <td>Oral Presentation CQI Clinic</td>
                                <td>มหกรรมวิชาการโรงพยาบาลสมเด็จพระยุพราชยะหา</td>
                                <td>ชนะเลิศ</td>
                            </tr>
                            <tr>
                                <td>16-พ.ค.-67</td>
                                <td>นางศกลวรรณ อารีบุหงา, น.ส.ซัยนะ สาและ</td>
                                <td>การพัฒนาระบบการเข้าถึง โรคหลอดเลือดสมอง เครือข่ายอำเภอยะหา</td>
                                <td>R2R</td>
                                <td>ประชุมวิชาการแพทย์ฉุกเฉินจังหวัดชายแดนใต้</td>
                                <td>ชนะเลิศ</td>
                            </tr>
                            <tr>
                                <td>24-มิ.ย.-67</td>
                                <td>น.ส.ซัยนะ สาและ, นางศกลวรรณ อารีบุหงา</td>
                                <td>การพัฒนาระบบการเข้าถึงบริการโรคหลอดเลือดสมอง โรงพยาบาลสมเด็จพระยุพราชยะหา</td>
                                <td>Oral Presentation CQI Clinic</td>
                                <td>มหกรรมวิชาการสาธารณสุขจังหวัดยะลา</td>
                                <td>ชนะเลิศ</td>
                            </tr>
                            <tr>
                                <td>25-มิ.ย.-67</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>การพัฒนาเครื่องมือคัดแยก Easy YCPH ED Triage สำหรับพยาบาลวิชาชีพงานอุบัติเหตุ
                                    ฉุกเฉิน โรงพยาบาลสมเด็จพระยุพราชยะหา</td>
                                <td>วิจัย Research</td>
                                <td>วารสารการแพทย์ฉุกเฉินแห่งประเทศไทย</td>
                                <td>เผยแพร่ ปีที่ 4 ฉบับที่ 1 มกราคม - มิถุนายน 2567</td>
                            </tr>
                            <tr>
                                <td>15-ก.ย.-67</td>
                                <td>น.ส.ซัยนะ สาและ, นางศกลวรรณ อารีบุหงา</td>
                                <td>การพัฒนาระบบการเข้าถึงโรคหลอดเลือดสมองเครือข่ายอำเภอยะหา</td>
                                <td>Oral Presentation CQI Clinic</td>
                                <td>มหกรรมวิชาการเขตสุขภาพที่ 12</td>
                                <td>ร่วมนำเสนอ</td>
                            </tr>
                            <tr>
                                <td>21-ต.ค.-67</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>พยาบาลผู้มีผลงานวิชาการดีเด่น จังหวัดยะลา</td>
                                <td>พยาบาลดีเด่น</td>
                                <td>วิทยาลัยพยาบาลบรมราชชนนียะลา</td>
                                <td>พยาบาลดีเด่น</td>
                            </tr>
                            <tr>
                                <td>11-13 ธ.ค.-67</td>
                                <td>นางศกลวรรณ อารีบุหงา, น.ส.ซัยนะ สาและ</td>
                                <td>การพัฒนาระบบการเข้าถึงบริการช่องทางด่วน
                                    ผู้ป่วยโรคหลอดเลือดสมองโรงพยาบาลสมเด็จพระยุพราชยะหาและเครือข่าย</td>
                                <td>Poster Presentation</td>
                                <td>การประชุมวิชาการการแพทย์ฉุกเฉินระดับชาติ ครั้งที่ 16 ประจำปี 2567</td>
                                <td>นำเสนอ</td>
                            </tr>
                            <tr>
                                <td>11-13 ธ.ค.-67</td>
                                <td>นางศกลวรรณ อารีบุหงา</td>
                                <td>เข็มเชิดชูเกียรติ</td>
                                <td>สรรเสริญชั้น 5</td>
                                <td>การประชุมวิชาการการแพทย์ฉุกเฉินระดับชาติ ครั้งที่ 16 ประจำปี 2567</td>
                                <td>-</td>
                            </tr>
                            <!-- Remaining rows would be added similarly -->
                        </tbody>
                    </table>
            </div>

        </section><!-- End ผลงาน Section -->

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
        $directory = 'assets/img/gallery/er'; 
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
                $directory = '/var/www/html/wabsite_group/assets/img/file/cnpg_er'; // ไดเรกทอรีของไฟล์
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
                            <td><a href="<?php echo "/wabsite_group/assets/img/file/cnpg_er/" . htmlspecialchars($file); ?>"
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
                        }
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