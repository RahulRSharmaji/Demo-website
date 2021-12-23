<?php
require_once "inc/header.php";
?><section class="image-back">
         <img src="image/background23.jpg" alt="">
            <div class="about-c">
                <h2>Contact Us</h2>
            </div>
</section>

<section class="contact-p">
    <div class="container">
        <div class="row">
            <div class="col-contact">
                <div class="info-contact">
                    <h3>
                        <div class="row">
                            <div class="contact-icon">
                             <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="col-tele">
                                <i class="fa">
                                    <a href="tel:7728877441">7728877441</a>
                                </i>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                            </div>
                            <div class="col-tele">
                                <i class="fa">
                                    <a href="mail:info@airoshotblast.in">info@airoshotblast.in</a>
                                </i>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="col-tele">
                                <i class="fa">
                                P.No. 324-25, 378-79-80, khasra No. 9/4, Shree Yade Gaun, Near Banar Ring Road, Jodhpur (Rajasthan) - 342027
                                </i>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>
            <div class="col-contact">
                <form method="POST" action="#" accept-charset="UTF-8">
                    <input name="_token" type="hidden">
                    <div class="contact-inner">
                        <input name="record[name]" type="text" placeholder="Name *" required>
                    </div>
                    <div class="contact-inner2"> 
                        <input name="record[email]" type="text" placeholder="Email * "required> 
                    </div>
                    <div class="contact-inner">
                        <input name="record[mobile]" type="text" placeholder="Phone Number *" required>
                    </div>
                    <div class="contact-inner-message">
                        <textarea name="record[message]" placeholder="Please describe what you need."></textarea>
                    </div>
                    <button class="btn-contact">Send message</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="map-google">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d57210.654851405816!2d73.156808!3d26.337315!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3941f26989ff7009%3A0xb9fa8a9adf6b77f0!2sBanar%2C%20Rajasthan%20342027!5e0!3m2!1sen!2sin!4v1640191428781!5m2!1sen!2sin" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section><?php 
require_once "inc/footer.php";