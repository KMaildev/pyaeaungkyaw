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
                    <h2>Frequently Asked Questions</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="<?php echo site_url('home'); ?>">Home </a></li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-wrap pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ecour-faq">
                    <div class="accordion" id="accordionExample">
                        <?php
                        foreach ($faqs as $key => $value) {
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne_<?php echo $value['id']; ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $value['id']; ?>" aria-expanded="false" aria-controls="collapseOne<?php echo $value['id']; ?>">
                                        <?php
                                        if ($language == 'jp') {
                                            echo $value['question_jp'];
                                        } else {
                                            echo $value['question_eng'];
                                        }
                                        ?>
                                    </button>
                                </h2>
                                <div id="collapseOne<?php echo $value['id']; ?>" class="accordion-collapse collapse " aria-labelledby="headingOne_<?php echo $value['id']; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="single-product-text">
                                            <p>
                                                <?php
                                                if ($language == 'jp') {
                                                    echo $value['answer_jp'];
                                                } else {
                                                    echo $value['answer_eng'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo view('templates/footer'); ?>