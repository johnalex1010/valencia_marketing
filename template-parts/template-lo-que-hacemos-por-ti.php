<?php /*Template Name: Página de Lo que hacemos por ti*/ ?>

<!-- Cabecera -->
<?php get_header(); ?>

<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center"
        style="background-image:url(<?php echo IMAGES ?>/testimonial/test-bg.png)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title mb-30">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="breadcrumb-wrap">

                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<nav aria-label="breadcrumb"><ol class="breadcrumb">', '</ol></nav>');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- team-area -->

    <?php

    $utm_source = $_GET['utm_source'] ?? '';

    if (isset($utm_source) && $utm_source == "venta") {
        $collapsed_venta = "";
        $collapse_venta = "";
    } else {
        $collapsed_venta = "collapsed";
        $collapse_venta = "collapse";
    }

    if (isset($utm_source) && $utm_source == "arriendo") {
        $collapsed_arriendo = "";
        $collapse_arriendo = "";
    } else {
        $collapsed_arriendo = "collapsed";
        $collapse_arriendo = "collapse";
    }
    ?>

    <section id="faq" class="faq-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg col-md">
                    <div class="faq-wrap">
                        <div class="accordion" id="accordionExample">
                            <?php if (have_rows('grupo_venta')) : ?>
                                <?php while (have_rows('grupo_venta')) : the_row(); ?>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="faq-btn <?php echo $collapsed_venta; ?>" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="false"
                                                    aria-controls="collapseOne">
                                                    <?php the_sub_field('titulo_venta'); ?>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="<?php echo $collapse_venta; ?>" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="card-body">
                                                    <?php the_sub_field('texto_venta'); ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <?php if (have_rows('grupo_arriendo')) : ?>
                                <?php while (have_rows('grupo_arriendo')) : the_row(); ?>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="faq-btn <?php echo $collapsed_arriendo; ?>" type="button" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    <?php the_sub_field('titulo_arriendo'); ?>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="<?php echo $collapse_arriendo; ?>" aria-labelledby="headingTwo"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <?php the_sub_field('texto_arriendo'); ?>
                                            </div>

                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area-end -->



</main>
<!-- main-area-end -->


<!-- Footer -->
<?php get_footer(); ?>