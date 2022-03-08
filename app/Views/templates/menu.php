<?php
$session = session();
$language = $session->get('language');
?>

<header class="header-wrap style1">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-left">
                        <div class="close-header-top xl-none">
                            <button type="button"><i class="las la-times"></i></button>
                        </div>
                        <div class="header-contact">
                            <p><i class="ri-map-pin-fill"></i> No.(455), Aung Chan Thar St, (13) Ward, Yankin TSP</p>
                        </div>
                        <div class="header-contact">
                            <a href="mailto:pakoverseal@gmail.com">
                                <i class="ri-mail-send-line"></i>
                                <span class="__cf_email__">pakoverseal@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-right">
                        <form action="<?php echo site_url('language/set_lang') ?>" method="GET">
                            <div class="lang_selctor  style1">
                                <i class="ri-global-line"> </i>
                                <select onchange="this.form.submit()" name="language">
                                    <option value="eng" <?php echo ($language == 'eng') ? 'selected=""' : ''; ?>>English</option>
                                    <option value="jp" <?php echo ($language == 'jp') ? 'selected=""' : ''; ?>>Japan</option>
                                </select>
                            </div>
                        </form>
                        <div class="header-social">
                            <span>Follow us :</span>
                            <ul class="social-profile style3">
                                <li><a target="_blank" href="https://facebook.com/"><i class="ri-facebook-fill"></i> </a></li>
                                <li><a target="_blank" href="https://linkedin.com/"> <i class="ri-linkedin-fill"></i> </a></li>
                                <li><a target="_blank" href="https://twitter.com/"> <i class="ri-twitter-fill"></i> </a></li>
                                <li><a target="_blank" href="https://instagram.com/"> <i class="ri-instagram-line"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-5 order-lg-1 order-md-1 order-1">
                    <div class="logo">
                        <a href="<?php echo site_url('home'); ?>">
                            <img class="logo-light" src="<?php echo base_url(); ?>/images/logo.jpg" alt="Image" style="width: 50px;;">
                            <img class="logo-dark" src="<?php echo base_url(); ?>/images/logo.jpg" alt="Image" style="width: 50px;;">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-7 order-lg-2 order-md-3 order-3">
                    <div class="main-menu-wrap style1">
                        <div class="menu-close xl-none">
                            <a href="javascript:void(0)"><i class="las la-times"></i></a>
                        </div>
                        <div id="menu" class="text-center">
                            <ul class="main-menu">

                                <li>
                                    <a class="active" href="<?php echo site_url('home'); ?>">Home</a>
                                </li>

                                <li>
                                    <a class="active" href="<?php echo site_url('about'); ?>">About Us</a>
                                </li>

                                <li>
                                    <a class="active" href="<?php echo site_url('about'); ?>">Services</a>
                                </li>

                                <li>
                                    <a class="active" href="<?php echo site_url('training'); ?>">Training School</a>
                                </li>

                                <li>
                                    <a class="active" href="<?php echo site_url('business_model'); ?>">Business Model</a>
                                </li>

                                <li>
                                    <a class="active" href="<?php echo site_url('faqs'); ?>">FAQS of MYANMAR</a>
                                </li>

                                <li>
                                    <a class="active" href="<?php echo site_url('contact'); ?>">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="mobile-bar-wrap">
                        <div class="mobile-menu xl-none">
                            <a href='javascript:void(0)'><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="contact-popup">
    <div class="contact-popup-title">
        <button type="button" class="close-popup"> <i class="ri-close-fill"></i> </button>
    </div>
    <div class="contact-popup-wrap">
        <div class="comp-info">
            <div class="comp-logo">
                <a href="index.html">
                    <img class="logo-light" src="<?php echo base_url(); ?>/assets/img/logo.png" alt="Image">
                    <img class="logo-dark" src="<?php echo base_url(); ?>/assets/img/logo-white.png" alt="Image">
                </a>
            </div>
            <p class="comp-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
            <ul class="footer-contact-address">
                <li><a href="tel:999762236473"> <i class="ri-phone-line"></i> +999 762 23 6473</a></li>
                <li> <i class="ri-mail-send-fill"></i> <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#771e1911183712141802055914181a"><span class="__cf_email__" data-cfemail="6f060109002f0a0c001a">[email&#160;protected]</span>r.com</a></li>
                <li> <i class="ri-earth-fill"></i> <a href="https://www.ecour.com/">www.ecour.com</a></li>
                <li>
                    <i class="ri-map-pin-fill"></i> 24th North Lane, Hill Town, New York
                </li>
            </ul>
        </div>
        <div class="comp-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd"></iframe>
        </div>
        <div class="share-on text-center">
            <ul class="social-profile style2">
                <li><a target="_blank" href="https://facebook.com/"><i class="ri-facebook-fill"></i> </a></li>
                <li><a target="_blank" href="https://twitter.com/"> <i class="ri-twitter-fill"></i> </a></li>
                <li><a target="_blank" href="https://linkedin.com/"> <i class="ri-linkedin-fill"></i> </a></li>
                <li><a target="_blank" href="https://instagram.com/"> <i class="ri-instagram-line"></i> </a></li>
            </ul>
        </div>
    </div>
</div>