<?php
$session = session();
$language = $session->get('language');
?>
<?php echo view('templates/header'); ?>
<?php echo view('templates/menu'); ?>

<section class="breadcrumb-wrap bg-f br-bg-3" style="background-image: url('<?php echo base_url('images/banner1.jpg'); ?>')">
    <div class="overlay op-6 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                <div class="breadcrumb-title">
                    <h2>Business Model</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="<?php echo site_url('home'); ?>">Home </a></li>
                        <li>Business Model</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo view('templates/footer'); ?>