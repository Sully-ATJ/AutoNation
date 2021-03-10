<?php
    include_once 'header.php'
?>
<div class="video-container">
    <video playsinline autoplay muted loop id="bgvid">
        <source src="media/BG.mp4" type="video/mp4">
    </video>
</div>

<!--------------- end of hero section -------------->

<!--------------- begin about us section -------------->
<div class="content">
    <div id="aboutus">
        <div class="container-fluid">
            <div class="section-data">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2 section-index">About Us</div>
                    <div class="col-md-8 section-heading">AutoNation</div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6 section-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, cupiditate! Dolore delectus ex doloremque repellendus velit vero dolores porro veritatis alias odio totam labore, expedita quo praesentium? Maiores, eveniet laboriosam.</div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="cold-md-8 more">
                     <button id="btn">Know more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- end of about us section -------------->

    <!---------------begin services section --------------->
    <div id="services">
        <div class="container-fluid">
            <div class="section-data">
                <div class="row">
                    <div class="col-md-2"></div>
                   <div class="col-md-2 section-index">Services</div>
                    <div class="col-md-8 section-heading">What We Do</div>
                </div>

                <div class="row services">
                    <div class="col-md-4"></div>
                    <div class="col-md-3 section-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, cupiditate! Dolore delectus ex doloremque repellendus velit vero dolores porro veritatis alias odio totam labore, expedita quo praesentium? Maiores, eveniet laboriosam.</div>
                </div>
            </div>
        </div>
    </div>
    <!---------------end services section --------------->

    <!---------------begin contact section --------------->
    <div id="contact">
        <div class="container-fluid">
            <div class="section-data">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2 section-index">Contact</div>
                    <div class="col-md-8 section-heading">Ask us Anything</div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                        <div class="col-md-6 icon-title wow fadeInUp" data-wow-delay="0.5s">Fill in the form below with your information and inquiry.</div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <form action="" name="contact-form" id="contact-form" method="POST">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                        <label for="contact-name">Name :</label>
                                        <div class="textarea">
                                            <input type="text" name="contact-name" id="contact-name" value="" required>
                                        </div>
                                </li>
                                <br>
                                <li class="wow fadeInUp" data-wow-delay="0.7s">
                                        <label for="contact-email">E-mail :</label>
                                        <div class="textarea">
                                            <input type="email" name="contact-email" id="contact-email" value="" required>
                                        </div>
                                </li>

                                <br>

                                <li class="wow fadeInUp" data-wow-delay="0.8s">
                                        <label for="contact-project">Message :</label> 
                                        <div class="textarea">
                                        <textarea name="contact-project" id="contact-project" rows="6" required></textarea>
                                        </div>
                                </li>

                            </ul>

                            <button type="submit" name="contact-submit" id="contact-submit" class="send wow fadeInUp" data-wow-delay="0.9s">Send Message</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------- end contact section --------------->
    <!--------------- footer starts here ---------------->
    <div class="footer">
        <div class="container">
            <div class="info">
            <div class="row">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s" id="address">
                            <p>Workarea</p>
                            <h4>7 Dereboyu Avenue</h4>
                            <h4>Nicosia</h4>
                            <h4>MS 97545 7954</h4>

                            <br><br>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s" id="media">
                            <ul>
                                <li><ion-icon name="logo-facebook"></ion-icon></li>

                                <li><ion-icon name="logo-instagram"></ion-icon></li>

                                <li><ion-icon name="logo-twitter"></ion-icon></li>

                                <li><ion-icon name="logo-youtube"></ion-icon></li>
                            </ul>

                            <br><br>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s" id="mail">
                            <p>Say Hello</p>
                            <h4>contact@autonation.com</h4>
                            <h4>0503-XXX-XXXX</h4>
                            <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--------------- footer ends here ------------------>
</div>


<?php
    include_once 'footer.php'
?>