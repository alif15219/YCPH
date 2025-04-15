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
                            งานผู้ป่วยนอก
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
                            งานผู้ป่วยนอก
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
                            งานผู้ป่วยนอก
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
                <center> <img src="assets/img/slide/ผู้ป่วยนอก9191CM.jpg" alt="คำอธิบายรูปภาพ"
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
                            <img src="assets/img/departments-1.jpg" class="img-fluid" alt="Nursing Services">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <h3><i class="bi bi-hospital"></i> กลุ่มการพยาบาลงานผู้ป่วยนอก</h3>
                            <p>
                                ให้บริการตรวจรักษาโรคทั่วไป ทั้งการตรวจรักษา การสร้างเสริมสุขภาพ
                                การป้องกันโรคและการฟื้นฟูสภาพ
                                มีการคัดกรองภาวะสุขภาพ แยกประเภทความเจ็บป่วย โดยแบ่งระดับความเร่งด่วน
                                และความรุนแรงของโรค
                                ทั้งการพยาบาลก่อนตรวจ ขณะตรวจ และหลังการตรวจรักษา การช่วยเหลือปฐมพยาบาลเบื้องต้น
                                ในรายที่มีอาการเปลี่ยนแปลง หรือมีภาวะเสี่ยงอันตรายต่อชีวิตเฉียบพลัน มีระบบ Emergency
                                เรียกขอความช่วยเหลือจาก ER
                            </p>
                            <p>
                                ให้บริการตรวจโรคไม่ติดต่อเรื้อรัง
                                เน้นการให้ความรู้แก่ผู้ใช้บริการและครอบครัวเกี่ยวกับการปฏิบัติตน
                                ปรับเปลี่ยนพฤติกรรมและดูแลสุขภาพตนเอง การส่งต่อข้อมูลการรับบริการแบบไร้รอยต่อ
                                การติดตามดูแลผู้ป่วยต่อเนื่องร่วมกับทีมสหวิชาชีพ และทีม 3 หมอ
                                ในการปรับเปลี่ยนพฤติกรรมสุขภาพ
                                ที่เหมาะสมตามบริบทท้องถิ่น
                            </p>
                            <p>
                                โดยมีแพทย์ตรวจโรคทั่วไป 3 ห้อง แพทย์คลินิกไข้หวัด 1 ห้อง แพทย์เฉพาะทางอายุรกรรม 1 ห้อง
                                แพทย์เวชปฏิบัติครอบครัว 1 ห้อง รวม 5 ห้องตรวจ แบ่งเป็นคลินิกพิเศษเฉพาะทาง เช่น
                                คลินิกเบาหวาน คลินิกโรคความดันโลหิตสูง คลินิกโรคไตวายเรื้อรัง คลินิกปอดอุดกั้นเรื้อรัง
                                คลินิกหอบหืด คลินิกวาร์ฟารีน คลินิกโรคหัวใจ คลินิกจิตเวช คลินิกวัณโรค คลินิกผู้ติดเชื้อ
                                เอช ไอ วี และเอดส์
                            </p>
                            <p>
                                นอกจากนี้ยังมีบริการห้องตรวจบริการระบบสื่อสารทางไกล tele-Consult
                                แพทย์เฉพาะทางศัลยกรรมทั่วไป
                                กับแพทย์โรงพยาบาลศูนย์ยะลา ในวันอังคาร พฤหัส และศุกร์ และ tele-Consult
                                แพทย์เฉพาะทางศัลยกรรมระบบทางเดินปัสสาวะ
                                ทุกวันจันทร์ มีระบบบริการสื่อสารทางไกล telemedicine ระหว่างโรงพยาบาลกับ รพ.สต.
                                ทุกวันทำการ
                                และติดตามผู้ป่วยอย่างต่อเนื่องผ่านระบบ 3 หมอ
                            </p>
                            <p>
                                คลินิกนอกเวลาราชการ ให้บริการตรวจโรคทั่วไปนอกเวลาราชการ เวลา 07.00-08.30 น. และ 16.30 -
                                00.30 น.
                                วันหยุดราชการ และวันหยุดนักขัตฤกษ์ให้บริการ เวลา 08.30 – 00.30 น.
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
                            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>พยาบาลวิชาชีพ (ข้าราชการ)</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-user-nurse"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>พยาบาลวิชาชีพ (พนักงานกระทรวงสาธารณสุข)</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-ambulance"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>ผู้ช่วยพยาบาล (จ้างเหมาบริการ)</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-hands-helping"></i>
                            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="2"
                                class="purecounter"></span>
                            <p><strong>ผู้ช่วยเหลือคนไข้ (จ้างเหมาบริการ) และ พนักงานบริการ
                                    (พนักงานกระทรวงสาธารณสุข)</strong></p>
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
                <center><iframe style="position:relative;padding-top:0;width:900px;height:500px;" src="https://online.fliphtml5.com/oczzy/balr/"
                        seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"
                        allowfullscreen="true"></iframe></center>

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
                <center> <iframe style="position:relative;padding-top:0;width:900px;height:500px;"
                        src="https://online.fliphtml5.com/oczzy/dsir/" seamless="seamless" scrolling="no"
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
                <center></center>

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

                <table class="table table-hover">
        <thead>
            <tr>
                <th>ปี</th>
                <th>ชื่อ-สกุล</th>
                <th>ชื่อเรื่อง</th>
                <th>ประเภท</th>
                <th>สถานที่</th>
                <th>รางวัล</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2563</td>
                <td>อมรรัตน์ นาวาวี</td>
                <td>การคัดแยกผู้ป่วยในช่วงสถานการณ์ COVID-19</td>
                <td>Oral Presentation</td>
                <td>งานมหกรรมวิชาการเขตสุขภาพที่ 13 สสจ.ยะลา</td>
                <td>รองชนะเลิศ</td>
            </tr>
            <tr>
                <td>2565</td>
                <td>อมรรัตน์ นาวาวี</td>
                <td>การใช้โปรแกรม NCD Yaha Hospital ในการติดตามผู้ป่วยเป็นรายบุคคล</td>
                <td>Poster Presentation</td>
                <td>งานมหกรรมวิชาการกระทรวงสาธารณสุข จ.สงขลา ประจำปี 2566</td>
                <td>นำเสนอผลงาน</td>
            </tr>
            <tr>
                <td>2566</td>
                <td>อมรรัตน์ นาวาวี</td>
                <td>ผลของโปรแกรมการปรับเปลี่ยนพฤติกรรมสุขภาพต่อระดับน้ำตาลสะสมในเลือดของผู้ป่วยเบาหวาน</td>
                <td>Poster Presentation</td>
                <td>กระทรวงสาธารณสุข จ.อุดรธานี ประจำปี 2566</td>
                <td>ผลงานดีเด่น</td>
            </tr>
            <tr>
                <td>2567</td>
                <td>อมรรัตน์ นาวาวี</td>
                <td>ผลของโปรแกรมการปรับเปลี่ยนพฤติกรรมสุขภาพตามวิถีมุสลิมต่อพฤติกรรมการบริโภคอาหาร การใช้ยา และระดับน้ำตาลสะสม</td>
                <td>Poster Presentation</td>
                <td>โรงแรมริชม่อน นนทบุรี</td>
                <td>นำเสนอผลงาน</td>
            </tr>
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
        $directory = 'assets/img/gallery/opd'; 
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
                $directory = '/var/www/html/wabsite_group/assets/img/file/opd'; // ไดเรกทอรีของไฟล์
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
                            <td><a href="<?php echo "/wabsite_group/assets/img/file/opd/" . htmlspecialchars($file); ?>"
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