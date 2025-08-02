<?php /*Template Name: Página de Soy Asesor*/ ?>

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

    <!-- about-area -->
    <?php if (have_rows('grupo_intro')) : ?>
        <?php while (have_rows('grupo_intro')) : the_row(); ?>
            <section id="about" class="about-area about-p pt-50 pb-50 p-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="about-content s-about-content">
                                <?php the_sub_field('texto'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- about-area-end -->

    <!-- •	Lo que tendrás a disposición: -->
    <?php if (have_rows('grupo_items_1')) : ?>
        <?php while (have_rows('grupo_items_1')) : the_row(); ?>
            <section id="about" class="about-area about-p pt-50 pb-50 p-relative">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="about-content s-about-content">
                                <div class="about-title second-atitle pb-40">

                                    <h2><?php the_sub_field('titulo_item_1'); ?></h2>
                                    <ul class="sr-ul">
                                        <?php for ($i = 1; $i <= 7; $i++): ?>
                                            <?php $texto = get_sub_field("texto_item_$i"); ?>
                                            <?php if (!empty($texto)): ?>
                                                <li>
                                                    <div class="icon"><i class="fal fa-check"></i></div>
                                                    <div class="text pt-10">
                                                        <?php echo esc_html($texto); ?>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <!-- •	Lo que tendrás a disposición:-end -->

    <!-- •	Actividades que desarrollará como asesor inmobiliario: -->
    <?php if (have_rows('grupo_items_2')) : ?>
        <?php while (have_rows('grupo_items_2')) : the_row(); ?>
            <section id="about" class="about-area about-p pt-50 pb-50 p-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="about-content s-about-content">
                                <div class="about-title second-atitle pb-40">
                                    <h2><?php the_sub_field('titulo_item_1'); ?></h2>
                                    <ul class="sr-ul">
                                        <?php for ($i = 1; $i <= 7; $i++): ?>
                                            <?php $texto = get_sub_field("texto_item_$i"); ?>
                                            <?php if (!empty($texto)): ?>
                                                <li>
                                                    <div class="icon"><i class="fal fa-check"></i></div>
                                                    <div class="text pt-10">
                                                        <?php echo esc_html($texto); ?>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- •	Actividades que desarrollará como asesor inmobiliario:-end -->

    <!-- •	¿Cómo serán los ingresos?: -->
    <?php if (have_rows('grupo_items_3')) : ?>
        <?php while (have_rows('grupo_items_3')) : the_row(); ?>
            <section id="about" class="about-area about-p pt-50 pb-50 p-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="about-content s-about-content">
                                <div class="about-title second-atitle pb-40">
                                    <h2><?php the_sub_field('titulo_item_1'); ?></h2>
                                    <ul class="sr-ul">
                                        <?php for ($i = 1; $i <= 7; $i++): ?>
                                            <?php $texto = get_sub_field("texto_item_$i"); ?>
                                            <?php if (!empty($texto)): ?>
                                                <li>
                                                    <div class="icon"><i class="fal fa-check"></i></div>
                                                    <div class="text pt-10">
                                                        <?php echo esc_html($texto); ?>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- •	¿Cómo serán los ingresos?:-end -->

</main>
<!-- main-area-end -->

<!-- Footer -->
<?php get_footer(); ?>