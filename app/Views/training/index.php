<?php
$session = session();
$language = $session->get('language');
?>
<?php echo view('templates/header'); ?>
<?php echo view('templates/menu'); ?>

<section class="breadcrumb-wrap bg-f br-bg-3" style="background-image: url('<?php echo base_url('images/banner3.jpg'); ?>')">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                <div class="breadcrumb-title">
                    <h2>Training School</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="<?php echo site_url('home'); ?>">Home </a></li>
                        <li>Training</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-details-wrap py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="course-details">
                    <div class="course-details-img">
                        <img src="<?php echo base_url('images/banner3.jpg'); ?>" alt="Image">
                    </div>
                    <div class="tab-content course-tab-content">
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                            <h5 class="mt-0">Japanese Language School</h5>
                            <p>
                                With the policy that "everything succeeds begins with education," teachers and managers always understand the importance of the work they are in charge of. On top of that, we will always enthusiastically educate the trainees about Japanese language, Japanese culture, Japan, Japanese people, and Japanese discipline and lifestyle. The goal of the teachers is to constantly study new teaching methods and new knowledge and improve their skills so that they can meet the demands of high quality human resources of Japanese host companies. We hope that this will serve as a bridge between Myanmar trainees and Japanese host companies.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                <div class="sidebar">
                    <div class="course-details-widget sidebar-box">
                        <h5>Facebook Page</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo view('templates/footer'); ?>