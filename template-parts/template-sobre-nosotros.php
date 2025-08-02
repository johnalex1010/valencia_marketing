<?php /*Template Name: Página de Sobre Nosotros*/ ?>

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
                            <h2><?php the_title() ?></h2>
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
    <section id="faq" class="faq-area pt-100 pb-100">
        <div class="container">
            <?php if (have_rows('grupo_intro')) : ?>
                <?php while (have_rows('grupo_intro')) : the_row(); ?>
                    <?php the_sub_field('texto_intro'); ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <div class="row">
                <div class="col-lg col-md">
                    <div class="faq-wrap">
                        <?php if (have_rows('grupo_equipo')) : ?>
                            <?php while (have_rows('grupo_equipo')) : the_row(); ?>
                                <div class="accordion" id="accordionExample">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <div class="card">
                                            <div class="card-header" id="heading<?php echo $i; ?>">
                                                <h2 class="mb-0">
                                                    <button class="faq-btn collapsed" type="button" data-toggle="collapse"
                                                        data-target="#collapse<?php echo $i; ?>" aria-expanded="false"
                                                        aria-controls="collapse<?php echo $i; ?>">
                                                        <?php the_sub_field("item_titulo_$i"); ?>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="heading<?php echo $i; ?>"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <?php the_sub_field("item_texto_$i"); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>

                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
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