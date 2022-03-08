<?php echo view('templates/header'); ?>
<?php echo view('templates/menu'); ?>


<section class="breadcrumb-wrap bg-f br-bg-1" style="background-image: url('<?php echo base_url('images/banner2.jpg'); ?>')">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                <div class="breadcrumb-title">
                    <h2>About us</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="<?php echo site_url('home'); ?>">Home </a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-wrap style2 ptb-100" style="background-color: #9a261e;">
    <div class="about-img">
        <img src="<?php echo base_url('images/a.jpeg') ?>" alt="Image" style="border: 2px solid; color: #61be4f">
    </div>
    <div class="about-content">
        <div class="section-title text-left style1">
            <span>About us</span>
            <h2 style="color: white;">Pyaye Aung Kyaw Co.,Ltd</h2>
            <p style="color: white;">
                Pyae Aung Kyaw Oversea Employment
                agency was estiblished in 2008. We had
                supplied many general and skill worker
                to Malaysia, Thailand, Singapore since
                2008 to until now. Beside that we will
                try to supply Japan, Maccau.</p>
            <div class="about-subpara">
                <h5><span> <img src="assets/img/about/goal.svg" alt="Image"></span>Ecour Is The Right Place Where You Can Achieved</h5>
            </div>
            <ul class="about-features-list style2">
                <li> <i class="ri-login-circle-line"></i> Administer With Case</li>
                <li> <i class="ri-login-circle-line"></i> Save Time With Automation</li>
                <li> <i class="ri-login-circle-line"></i> 5000 Online Courses</li>
                <li> <i class="ri-login-circle-line"></i> Refund If not Satisfied</li>
            </ul>
        </div>
    </div>
</section>

<section class="ds-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="content-wrap style2 ptb-100">
                    <h2>Our Vision</h2>
                    <p>Our vision is to supply many worker and
                        to give our customer's satisfaction.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-wrap style1 right  ptb-100">
                    <h2>Our Mission</h2>
                    <p>The mission statement of Pyae Aung
                        Kyaw Co. Ltd is to provide our clients
                        with the highest quality of service in
                        Foreign manpower supply and labour
                        management through our multinational
                        network partners in the Asia Countries
                        and with our excellent in human resource
                        planning and training.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo view('templates/footer'); ?>