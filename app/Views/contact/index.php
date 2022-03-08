<?php echo view('templates/header'); ?>
<?php echo view('templates/menu'); ?>


<section class="contact-wrap pt-100 pb-70" style="background-color: #e18a2f;">
    <div class="container py-5">
        <div class="row justify-content-md-center">
            <div class="col-lg-12">
                <div class="section-title text-center mb-40 style1">
                    <h2>Contact Us</h2>
                    <span style="color: white;">“Tell us what you intend for your business so that we can help you.”</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-address">
                    <div class="contact-icon">
                        <i class="ri-map-pin-fill"></i>
                    </div>
                    <div class="contact-info">
                        <h5>Address</h5>
                        <p class="mb-0">
                            No.(455), Aung Chan Thar St, (13) Ward, Yankin TSP, Yangon, Myanmar
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-address">
                    <div class="contact-icon">
                        <i class="ri-phone-line"></i>
                    </div>
                    <div class="contact-info">
                        <h5>Phone Number</h5>
                        <p class="mb-0">
                            <a href="tel:09443126756">09 443 126 756</a>
                        </p>
                        <p class="mb-0">
                            <a href="tel:095180885">09 5180 885</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-address">
                    <div class="contact-icon">
                        <i class="ri-mail-send-line"></i>
                    </div>
                    <div class="contact-info">
                        <h5>Email Address</h5>
                        <p class="mb-0">
                            <a href="mailto:pakoverseal@gmail.com">
                                pakoverseal@gmail.com
                            </a>
                        </p>
                        <p class="mb-0">
                            <a href="mailto:info@pyayeaungkyaw.com">
                                info@pyayeaungkyaw.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="contact-form_wrap pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-40 style1">
                    <span>Contact Us</span>
                    <h2>Leave Message</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="contact-form">
                    <?php echo view('templates/shared/alert_message'); ?>
                    <form action="<?php echo site_url('contact/create'); ?>" method="post" class="form-wrap" autocomplete="off">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your Full Name*" id="name" data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Email Address*" data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone Number" id="phone_number" data-error="Please enter your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Subject" id="msg_subject" data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group v1">
                                    <textarea name="message" placeholder="Your Messages.." cols="30" rows="10" data-error="Please enter your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn v1 d-block w-100">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('templates/footer'); ?>