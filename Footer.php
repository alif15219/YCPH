<!-- ======= Footer ======= -->
<footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Medicio</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
    <div class="copyright">
        &copy; Copyright <strong><span>Medicio</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
    <div class="visits">
    <strong>จำนวนการเข้าชม:</strong> 
    <span id="visit-count">0</span>
</div>

<style>
    .visits {
        margin: 20px auto;
        padding: 15px 20px;
        border: 2px solid #3fbbc0; /* กรอบสีเขียว */
        border-radius: 10px; /* มุมมน */
        background-color: #f9f9f9; /* สีพื้นหลัง */
        width: fit-content; /* ขนาดพอดีกับเนื้อหา */
        font-family: Arial, sans-serif;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* เงา */
    }

    .visits strong {
        font-size: 1.2em; /* ขยายตัวหนังสือ */
        color: #333; /* สีข้อความ */
    }

    #visit-count {
        font-size: 1.5em; /* ขยายขนาดตัวเลข */
        font-weight: bold;
        color: #3fbbc0; /* สีเขียว */
    }
</style>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    fetch('update_visits.php') // ชื่อไฟล์ PHP
        .then(response => response.text())
        .then(count => {
            document.getElementById('visit-count').textContent = count;
        })
        .catch(error => console.error('Error:', error));
});

</script>

    </footer><!-- End Footer -->