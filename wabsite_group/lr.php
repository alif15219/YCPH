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
                            งานสุติกรรมเเละห้องคลอด
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
                            งานสุติกรรมเเละห้องคลอด
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
                            งานสุติกรรมเเละห้องคลอด
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
                <center> <img src="assets/img/slide/lr_sag.jpg" alt="คำอธิบายรูปภาพ"
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
                            <img src="assets/img/departments-4.jpg" class="img-fluid" alt="Emergency Services">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <h3><i class="bi bi-hospital"></i> รายละเอียดการบริการ</h3>
                            <p>
                                ให้บริการโดยแพทย์ทั่วไปจำนวน 8 คน ไม่มีแพทย์เฉพาะทางด้านสูตินารีแพทย์ และกุมารแพทย์
                            </p>
                            <p>
                                <strong>ในปี 2568</strong>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> มีแพทย์ผู้เชี่ยวชาญเฉพาะทางสาขาสูตินารีแพทย์จำนวน
                                    1 คน</li>
                                <li><i class="bi bi-check-circle"></i> แพทย์ผู้เชี่ยวชาญเฉพาะทางสาขากุมารแพทย์จำนวน 1 คน
                                </li>
                                <li><i class="bi bi-check-circle"></i> พยาบาลวิชาชีพชำนาญการพิเศษจำนวน 1 คน (เฉพาะทาง 4
                                    เดือน สาขาบริหารทางการพยาบาล)</li>
                                <li><i class="bi bi-check-circle"></i> พยาบาลวิชาชีพชำนาญการเฉพาะทาง 4 เดือน
                                    สาขาการพยาบาลผดุงครรภ์จำนวน 1 คน</li>
                                <li><i class="bi bi-check-circle"></i> พยาบาลวิชาชีพชำนาญการจำนวน 6 คน</li>
                                <li><i class="bi bi-check-circle"></i> พยาบาลวิชาชีพปฏิบัติจำนวน 2 คน</li>
                                <li><i class="bi bi-check-circle"></i> ผู้ช่วยพยาบาลจำนวน 3 คน</li>
                                <li><i class="bi bi-check-circle"></i> ผู้ช่วยเหลือคนไข้จำนวน 1 คน</li>
                                <li><i class="bi bi-check-circle"></i> เสมียนจำนวน 1 คน</li>
                                <li><i class="bi bi-check-circle"></i> พนักงานทั่วไปจำนวน 1 คน</li>
                            </ul>
                            </p>
                            <p>
                                <strong>อุปกรณ์และการบริการ:</strong>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> เตียงรอคลอดจำนวน 3 เตียง</li>
                                <li><i class="bi bi-check-circle"></i> เตียงหลังคลอดจำนวน 7 เตียง</li>
                                <li><i class="bi bi-check-circle"></i> อุปกรณ์การประเมินภาวะสุขภาพมารดาและทารก</li>
                                <li><i class="bi bi-check-circle"></i> อุปกรณ์ monitor สัญญาณชีพ</li>
                                <li><i class="bi bi-check-circle"></i> อุปกรณ์ช่วยชีวิตมารดาและทารก</li>
                            </ul>
                            </p>
                            <p>
                                <strong>โครงสร้างสายการบัญชา:</strong>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> งานบริการห้องคลอดขึ้นตรงกับกลุ่มการพยาบาล</li>
                                <li><i class="bi bi-check-circle"></i> มีการแต่งตั้งคณะทำงานในหน่วยงาน เช่น ทีม RM, PCT,
                                    IC, QA, KMIT, ENV และ HRD</li>
                                <li><i class="bi bi-check-circle"></i> มีการทำ SWOT analysis
                                    พบจุดเด่นและจุดด้อยของหน่วยงาน</li>
                            </ul>
                            </p>
                            <p>
                                <strong>จุดเด่น:</strong>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> พยาบาลเป็นคนในพื้นที่
                                    มีความชำนาญในการใช้เครื่องมือ</li>
                                <li><i class="bi bi-check-circle"></i> มีการประเมินภาวะผิดปกติของมารดาและทารก</li>
                            </ul>
                            </p>
                            <p>
                                <strong>จุดด้อย:</strong>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> ไม่มีแพทย์เฉพาะทางด้านสูตินารีเวชและกุมารแพทย์
                                </li>
                                <li><i class="bi bi-check-circle"></i> การสื่อสารและการให้ข้อมูลน้อย เกิดข้อร้องเรียน
                                </li>
                                <li><i class="bi bi-check-circle"></i> สื่อ Social media ให้ข้อมูลไม่ตรงตามความเป็นจริง
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
                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-user-nurse"></i>
                            <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>พยาบาลวิชาชีพ (ข้าราชการ)</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-user-nurse"></i>
                            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>พยาบาลวิชาชีพ (เหมาจ่าย)</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-user-nurse"></i>
                            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>ผู้ช่วยพยาบาล (เหมาจ่าย)</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-hands-helping"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>ผู้ช่วยเหลือคนไข้ (พนักงานกระทรวงสาธารณสุข)</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-briefcase"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>พนักงานทั่วไป (พนักงานกระทรวงสาธารณสุข)</strong></p>
                            <a href="#">Find out more &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-user-tie"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>เสมียน (เหมาจ่าย)</strong></p>
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
                <center><iframe style="position:relative;padding-top:0;width:900px;height:500px;" src="https://online.fliphtml5.com/oczzy/dzys/"
                        seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"
                        allowfullscreen="true"></iframe></center>

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

                <center><iframe style="position:relative;padding-top:0;width:900px;height:500px;" src="https://online.fliphtml5.com/oczzy/tawk/"
                        seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"
                        allowfullscreen="true"></iframe></center>
            </div>
        </section><!-- End ทบทวน12โปรเเกรม Section -->

        <!-- ======= ผลงาน Section ======= -->
        <section id="services7" class="appointment section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2
                        style="font-family: 'TH Sarabun New', sans-serif; font-size: 4em; font-weight: bold; color: #2f2f2f;">
                        ผลงานภาคภูมิใจ</h2>
                </div>
                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <?php
        // ระบุโฟลเดอร์ที่เก็บรูปภาพ
        $directory = 'assets/img/gallery/lr_1'; 
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
        </section><!-- End ผลงาน Section -->

        <!-- ======= ภาพกิจกรรม Section ======= -->
        <section id="services8" class="departments">
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
        $directory = 'assets/img/gallery/lr'; 
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
                $directory = '/var/www/html/wabsite_group/assets/img/file/lr'; // ไดเรกทอรีของไฟล์
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
                            <td><a href="<?php echo "/wabsite_group/assets/img/file/lr/" . htmlspecialchars($file); ?>"
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

        <!-- ======= Doctors Section ======= -->
        <!-- <section id="doctors" class="doctors section-bg">
            <div class="container" data-aos="fade-up">

           
            </div>
        </section>End Doctors Section -->

        <!-- ======= Gallery Section ======= -->
        <!-- <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">

            </div>
        </section>End Gallery Section -->

        <!-- ======= Pricing Section ======= -->
        <!-- <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

            </div>
        </section>End Pricing Section -->

        <!-- ======= Frequently Asked Questioins Section ======= -->
        <!-- <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">


                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat
                            nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                non.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque
                            varius morbi enim nunc faucibus a pellentesque? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet
                            consectetur adipiscing elit pellentesque habitant morbi? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci
                            dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque
                            nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus
                            faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus.
                                Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section>End Frequently Asked Questioins Section -->

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