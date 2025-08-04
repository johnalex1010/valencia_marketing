<?php /*Template Name: Page Home*/ ?>

<!-- Cabecera -->
<?php get_header(); ?>

<!-- ====================== Hero ======================= -->
<?php if (have_rows('grupo_header_en')) : ?>
    <?php while (have_rows('grupo_header_en')) : the_row(); ?>
        <section class="miwlo-app-landing-banner-wrap">
            <div class="app-landing-top-shape">
                <img class="app-circle-shape" src="<?php echo IMAGES ?>/shape/circle-line-large.png" alt="Circle">
                <div class="small-dot-wrapper miwlo-parallax">
                    <div class="layer" data-depth="0.1">
                        <div>
                            <img data-parallax='{"y" : 30}' class="app-line-dot-small" src="<?php echo IMAGES ?>/shape/line-dot-sm.png"
                                alt="Line Dot">
                        </div>
                    </div><!-- .layer -->
                </div><!-- .small-dot-wrapper -->
                <div class="circle-dot-left miwlo-parallax">
                    <div class="layer" data-depth="2">
                        <div>
                            <img data-parallax='{"y" : 100}' src="<?php echo IMAGES ?>/shape/circle-line-25.png" alt="Circle">
                        </div>
                    </div><!-- .layer -->
                </div><!-- .circle-dot-left -->
                <div class="circle-dot-right miwlo-parallax">
                    <div class="layer" data-depth="3">
                        <div>
                            <img data-parallax='{"y" : 100}' src="<?php echo IMAGES ?>/shape/qube-60.png" alt="Circle">
                        </div>
                    </div><!-- .layer -->
                </div><!-- .circle-dot-right -->
            </div><!-- .app-circle-shape -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 align-self-center">
                        <div class="miwlo-app-landing-banner-text">
                            <?php the_sub_field('texto_en'); ?>
                            <div class="miwlo-app-landing-btn-wrap d-lg-flex">
                                <a target="<?php the_sub_field('target_en'); ?>" class="miwlo-btn-pill btn-black d-flex align-items-center" href="<?php the_sub_field('boton_url_en'); ?>" title="<?php the_sub_field('boton_texto_en'); ?>">
                                    <div class="icon">
                                        <i class="fas fa-calendar"></i>
                                    </div>
                                    <div>
                                        <?php the_sub_field('boton_texto_en'); ?>
                                    </div>
                                </a>

                            </div><!-- .miwlo-app-landing-btn-wrap -->
                        </div><!-- .miwlo-app-landing-banner-text -->
                    </div><!-- .col-md-7 -->
                    <div class="col-sm-5">
                        <div class="miwlo-app-landing-banner-right">
                            <div class="miwlo-app-landing-banner-image miwlo-parallax">
                                <div class="mobile-wrapper">
                                    <div class="layer" data-depth="0.1">
                                        <div>
                                            <?php $imagen_en = get_sub_field('imagen_en'); ?>
                                            <?php if ($imagen_en) : ?>
                                                <img class="mobile" data-parallax='{"y" : 30}' src="<?php echo esc_url($imagen_en['url']); ?>" alt="<?php echo esc_attr($imagen_en['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div><!-- .layer -->
                                </div><!-- .mobile-wrapper -->
                            </div><!-- .miwlo-app-landing-banner-image -->
                            <div class="app-landing-moible-bg">
                                <div>
                                    <img src="<?php echo IMAGES ?>/shape/circle-dot.png" alt="Mobile">
                                </div>
                            </div><!-- .app-landing-moible-bg -->
                        </div><!-- .miwlo-app-landing-banner-right -->
                    </div><!-- .col-md-5 -->
                </div><!-- .row -->
            </div><!-- .container -->
            <div class="app-landing-bottom-shape">
                <div class="app-line-dot-small-bottom miwlo-parallax">
                    <div class="layer" data-depth="1">
                        <div>
                            <img data-parallax='{"x" : 80}' src="<?php echo IMAGES ?>/shape/line-dot-sm.png" alt="Line Dot">
                        </div>
                    </div>
                </div><!-- .app-line-dot-small-bottom -->
                <div class="circle-dot-bottom-left miwlo-parallax">
                    <div class="layer" data-depth="1">
                        <div>
                            <img data-parallax='{"y" : 30}' src="<?php echo IMAGES ?>/shape/qube-60.png" alt="Circle">
                        </div>
                    </div>
                </div><!-- .circle-dot-bottom-left -->
            </div><!-- .app-circle-shape -->
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<!-- ======================== group_way_of_working ======================== -->
<?php if (have_rows('group_way_of_working')) : ?>
    <?php while (have_rows('group_way_of_working')) : the_row(); ?>
        <aside class="miwlo-why-choose-wrap">
            <div class="miwlo-why-choose-right-shape">
                <img data-parallax='{"y" : 100}' src="<?php echo IMAGES ?>/shape/shape-05.png" alt="Shape">
            </div><!-- .miwlo-why-choose-right-shapes -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="miwlo-why-choose-text text-center">
                            <h3 class="section-heading"><?php the_sub_field('title'); ?></h3>
                            <p class="section-subheading"><?php the_sub_field('subtitle'); ?></p>
                        </div><!-- .miwlo-why-choose-text -->
                    </div><!-- .col-md-7 -->
                </div><!-- .row -->
                <div class="row text-center">
                    <?php $icon_bullet_1 = get_sub_field('icon_bullet_1'); ?>
                    <?php if ($icon_bullet_1) : ?>
                        <div class="col-12 col-md-6 col-lg">
                            <div class="why-choice-options option-one">
                                <div class="why-choice-options-img-wrap">
                                    <img src="<?php echo esc_url($icon_bullet_1['url']); ?>" alt="<?php echo esc_attr($icon_bullet_1['alt']); ?>" />
                                </div><!-- .why-choice-options -->
                                <?php the_sub_field('texto_bullet_1'); ?>
                            </div><!-- .why-choice-options -->
                        </div><!-- .col-md-6 col-lg -->
                    <?php endif; ?>

                    <?php $icon_bullet_2 = get_sub_field('icon_bullet_2'); ?>
                    <?php if ($icon_bullet_2) : ?>
                        <div class="col-12 col-md-6 col-lg">
                            <div class="why-choice-options option-one">
                                <div class="why-choice-options-img-wrap">
                                    <img src="<?php echo esc_url($icon_bullet_2['url']); ?>" alt="<?php echo esc_attr($icon_bullet_2['alt']); ?>" />
                                </div><!-- .why-choice-options -->
                                <?php the_sub_field('texto_bullet_2'); ?>
                            </div><!-- .why-choice-options -->
                        </div><!-- .col-md-6 col-lg -->
                    <?php endif; ?>

                    <?php $icon_bullet_3 = get_sub_field('icon_bullet_3'); ?>
                    <?php if ($icon_bullet_3) : ?>
                        <div class="col-12 col-md-6 col-lg">
                            <div class="why-choice-options option-one">
                                <div class="why-choice-options-img-wrap">
                                    <img src="<?php echo esc_url($icon_bullet_3['url']); ?>" alt="<?php echo esc_attr($icon_bullet_3['alt']); ?>" />
                                </div><!-- .why-choice-options -->
                                <?php the_sub_field('texto_bullet_3'); ?>
                            </div><!-- .why-choice-options -->
                        </div><!-- .col-md-6 col-lg -->
                    <?php endif; ?>

                </div><!-- .row -->
            </div><!-- .container -->
            <div class="miwlo-why-choose-left-shape">
                <img data-parallax='{"y" : 50}' src="<?php echo IMAGES ?>/shape/shape-06.png" alt="Shape">
            </div><!-- .miwlo-why-choose-left-shapes -->
        </aside>
    <?php endwhile; ?>
<?php endif; ?>

<!-- ========================= group_who_we_are ========================= -->
<?php if (have_rows('group_who_we_are')) : ?>
    <?php while (have_rows('group_who_we_are')) : the_row(); ?>
        <section id="who-we-are" class="miwlo-features-wrap feature-one">
            <div class="feature-circle-dot-left miwlo-parallax">
                <div class="layer" data-depth="2">
                    <div>
                        <img data-parallax='{"y" : 100}' src="<?php echo IMAGES ?>/shape/circle-line-20.png" alt="Circle">
                    </div>
                </div><!-- .layer -->
            </div><!-- .feature-circle-dot-left -->
            <div class="container">
                <div class="row">
                    <div class="col-lg col-md">
                        <div class="miwlo-feature-img-wrapper">
                            <div class="miwlo-feature-img miwlo-parallax">
                                <div class="layer" data-depth="0.1">
                                    <div>
                                        <?php $imagen = get_sub_field('imagen'); ?>
                                        <?php if ($imagen) : ?>
                                            <img data-parallax='{"y" : 30}' class="mobile" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                </div><!-- .layer -->
                            </div><!-- .miwlo-feature-img -->
                            <div class="miwlo-feature-img-shape miwlo-parallax">
                                <div class="layer" data-depth="1">
                                    <div>
                                        <img data-parallax='{"x" : 80}' src="<?php echo IMAGES ?>/shape/shape-07.png" alt="Line Dot">
                                    </div>
                                </div>
                            </div><!-- .miwlo-feature-img-shape -->
                        </div><!-- .miwlo-feature-img-wrapper -->
                    </div><!-- .col-lg -->
                    <div class="col-lg col-md offset-xl-2 offset-md-1 align-self-center">
                        <div class="miwlo-features-text-wrapper">
                            <?php the_sub_field('texto'); ?>
                            <!-- <div>
                        <a class="miwlo-btn-border btn-black" href="#">Comenzar</a>
                    </div> -->
                        </div><!-- .miwlo-features-text-wrapper -->
                    </div><!-- .col-lg -->
                </div><!-- .row -->
            </div><!-- .container -->
            <div class="feature-bottom-shape">
                <div class="feature-circle-dot-bottom-left miwlo-parallax">
                    <div class="layer" data-depth="1">
                        <div>
                            <img data-parallax='{"y" : 30}' src="<?php echo IMAGES ?>/shape/circle-line-25.png" alt="Circle">
                        </div>
                    </div>
                </div><!-- .feature-circle-dot-bottom-left -->
                <div class="feature-triangle-shape miwlo-parallax">
                    <div class="layer">
                        <div>
                            <img data-parallax='{"y" : 50}' src="<?php echo IMAGES ?>/shape/shape-08.png" alt="Circle">
                        </div>
                    </div>
                </div><!-- .feature-triangle-shape -->
            </div><!-- .feature-bottom-shape -->
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<!-- ========================= group_services ========================= -->
<?php if (have_rows('group_services')) : ?>
    <?php while (have_rows('group_services')) : the_row(); ?>
        <section id="our-services" class="miwlo-features-wrap feature-two">
            <div class="feature-circle-dot-left miwlo-parallax">
                <div class="layer" data-depth="2">
                    <div>
                        <img data-parallax='{"y" : 100}' src="<?php echo IMAGES ?>/shape/circle-pill-black-25.png" alt="Circle">
                    </div>
                </div><!-- .layer -->
            </div><!-- .feature-circle-dot-left -->
            <div class="container">
                <div class="row">
                    <div class="col-lg col-md align-self-center order-md-1 order-2">
                        <div class="miwlo-features-text-wrapper">
                            <?php the_sub_field('texto'); ?>

                            <!-- <div>
                        <a class="miwlo-btn-border btn-black" href="#">Reserva</a>
                    </div> -->
                        </div><!-- .miwlo-features-text-wrapper -->
                    </div><!-- .col-md -->
                    <div class="col-lg col-md offset-lg-2 offset-md-1 offset-sm-0 order-md-2 order-1">
                        <div class="miwlo-feature-img-wrapper">
                            <div class="miwlo-feature-img miwlo-parallax">
                                <div class="layer" data-depth="0.1">
                                    <div>
                                        <?php $imagen = get_sub_field('imagen'); ?>
                                        <?php if ($imagen) : ?>
                                            <img data-parallax='{"y" : 30}' src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                </div><!-- .layer -->
                            </div><!-- .miwlo-feature-img -->
                            <div class="miwlo-feature-img-shape miwlo-parallax">
                                <div class="layer" data-depth="1">
                                    <div>
                                        <img data-parallax='{"x" : 80}' src="<?php echo IMAGES ?>/shape/shape-07.png" alt="Line Dot">
                                    </div>
                                </div>
                            </div><!-- .miwlo-feature-img-shape -->
                        </div><!-- .miwlo-feature-img-wrapper -->
                    </div><!-- .col-md -->
                </div><!-- .row -->
            </div><!-- .container -->
            <div class="feature-bottom-shape">
                <div class="feature-circle-dot-bottom-left miwlo-parallax">
                    <div class="layer" data-depth="1">
                        <div>
                            <img data-parallax='{"y" : 30}' src="<?php echo IMAGES ?>/shape/cross-25.png" alt="Circle">
                        </div>
                    </div>
                </div><!-- .feature-circle-dot-bottom-left -->
            </div><!-- .feature-bottom-shape -->
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<!-- ========================= group_choose_us ========================= -->
<?php if (have_rows('group_choose_us')) : ?>
    <?php while (have_rows('group_choose_us')) : the_row(); ?>
        <section id="why-choose-us" class="miwlo-features-wrap feature-one">
            <div class="feature-circle-dot-left miwlo-parallax">
                <div class="layer" data-depth="2">
                    <div>
                        <img data-parallax='{"y" : 100}' src="<?php echo IMAGES ?>/shape/circle-line-20.png" alt="Circle">
                    </div>
                </div><!-- .layer -->
            </div><!-- .feature-circle-dot-left -->
            <div class="container">
                <div class="row">
                    <div class="col-lg col-md">
                        <div class="miwlo-feature-img-wrapper">
                            <div class="miwlo-feature-img miwlo-parallax">
                                <div class="layer" data-depth="0.1">
                                    <div>
                                        <?php $imagen = get_sub_field('imagen'); ?>
                                        <?php if ($imagen) : ?>
                                            <img data-parallax='{"y" : 30}' class="mobile" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                </div><!-- .layer -->
                            </div><!-- .miwlo-feature-img -->
                            <div class="miwlo-feature-img-shape miwlo-parallax">
                                <div class="layer" data-depth="1">
                                    <div>
                                        <img data-parallax='{"x" : 80}' src="<?php echo IMAGES ?>/shape/shape-07.png" alt="Line Dot">
                                    </div>
                                </div>
                            </div><!-- .miwlo-feature-img-shape -->
                        </div><!-- .miwlo-feature-img-wrapper -->
                    </div><!-- .col-lg -->
                    <div class="col-lg col-md offset-xl-2 offset-md-1 align-self-center">
                        <div class="miwlo-features-text-wrapper">
                            <?php the_sub_field('texto'); ?>
                            <!-- <div>
                        <a class="miwlo-btn-border btn-black" href="#">Comenzar</a>
                    </div> -->
                        </div><!-- .miwlo-features-text-wrapper -->
                    </div><!-- .col-lg -->
                </div><!-- .row -->
            </div><!-- .container -->
            <div class="feature-bottom-shape">
                <div class="feature-circle-dot-bottom-left miwlo-parallax">
                    <div class="layer" data-depth="1">
                        <div>
                            <img data-parallax='{"y" : 30}' src="<?php echo IMAGES ?>/shape/circle-line-25.png" alt="Circle">
                        </div>
                    </div>
                </div><!-- .feature-circle-dot-bottom-left -->
                <div class="feature-triangle-shape miwlo-parallax">
                    <div class="layer">
                        <div>
                            <img data-parallax='{"y" : 50}' src="<?php echo IMAGES ?>/shape/shape-08.png" alt="Circle">
                        </div>
                    </div>
                </div><!-- .feature-triangle-shape -->
            </div><!-- .feature-bottom-shape -->
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<!-- =================== group_what_to_expect =================== -->
<?php if (have_rows('group_what_to_expect')) : ?>
    <?php while (have_rows('group_what_to_expect')) : the_row(); ?>
        <section id="what-to-expect" class="miwlo-features-wrap feature-two">
            <div class="feature-circle-dot-left miwlo-parallax">
                <div class="layer" data-depth="2">
                    <div>
                        <img data-parallax='{"y" : 100}' src="<?php echo IMAGES ?>/shape/circle-pill-black-25.png" alt="Circle">

                    </div>
                </div><!-- .layer -->
            </div><!-- .feature-circle-dot-left -->
            <div class="container">
                <div class="row">
                    <div class="col-lg col-md align-self-center order-md-1 order-2">
                        <div class="miwlo-features-text-wrapper">
                            <?php the_sub_field('texto'); ?>
                            <!-- <div data-aos="fade-up" data-aos-delay="500">
                        <a class="miwlo-btn-border btn-black" href="#">Get Started</a>
                    </div> -->
                        </div><!-- .miwlo-features-text-wrapper -->
                    </div><!-- .col-md -->
                    <div class="col-lg col-md offset-lg-2 offset-md-1 offset-sm-0 order-md-2 order-1">
                        <div class="miwlo-feature-img-wrapper">
                            <div class="miwlo-feature-img miwlo-parallax">
                                <div class="layer" data-depth="0.1">
                                    <div data-aos="fade-up" data-aos-delay="300">
                                        <?php $imagen = get_sub_field('imagen'); ?>
                                        <?php if ($imagen) : ?>
                                            <img ata-parallax='{"y" : 30}' src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                </div><!-- .layer -->
                            </div><!-- .miwlo-feature-img -->
                            <div class="miwlo-feature-img-shape miwlo-parallax">
                                <div class="layer" data-depth="1">
                                    <div data-aos="fade-up" data-aos-delay="500">
                                        <img data-parallax='{"x" : 80}' src="<?php echo IMAGES ?>/shape/shape-07.png" alt="Line Dot">
                                    </div>
                                </div>
                            </div><!-- .miwlo-feature-img-shape -->
                        </div><!-- .miwlo-feature-img-wrapper -->
                    </div><!-- .col-md -->
                </div><!-- .row -->
            </div><!-- .container -->
            <div class="feature-bottom-shape">
                <div class="feature-circle-dot-bottom-left miwlo-parallax">
                    <div class="layer" data-depth="1">
                        <div>
                            <img data-parallax='{"y" : 30}' src="<?php echo IMAGES ?>/shape/cross-25.png" alt="Circle">
                        </div>
                    </div>
                </div><!-- .feature-circle-dot-bottom-left -->
            </div><!-- .feature-bottom-shape -->
        </section><!-- .miwlo-features-wrap -->
    <?php endwhile; ?>
<?php endif; ?>

<!-- ======================== Testimonial Area ======================= -->
<?php if (have_rows('group_testimonials')) : ?>
    <?php while (have_rows('group_testimonials')) : the_row(); ?>
        <?php if (get_sub_field('visible') == 1) : ?>
            <aside class="miwlo-app-testimonial-wrap">
                <div class="testimonial-triangle-shape miwlo-parallax">
                    <div class="layer">
                        <div>
                            <img data-parallax='{"y" : 50}' src="<?php echo IMAGES ?>/shape/shape-08.png" alt="Circle">
                        </div>
                    </div>
                </div><!-- .testimonial-triangle-shape -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="miwlo-app-testimonial-text">
                                <div class="miwlo-testimonial-text-icon miwlo-parallax">
                                    <div class="layer" data-depth="1">
                                        <div data-parallax='{"y" : 30}'>
                                            <img src="<?php echo IMAGES ?>/icons/quote-alt.png" alt="Quote">
                                        </div>
                                    </div><!-- .layer -->
                                </div><!-- .miwlo-testimonial-text-icon -->
                                <h2><?php the_sub_field('title'); ?></h2>
                                <div class="miwlo-testimonial-text-shape miwlo-parallax">
                                    <div class="layer" data-depth=".3">
                                        <div>
                                            <img data-parallax='{"y" : 30}' src="<?php echo IMAGES ?>/shape/shape-10.png" alt="Line Dot">
                                        </div>
                                    </div>
                                </div><!-- .miwlo-testimonial-text-shape -->
                            </div><!-- .miwlo-app-testimonial-text -->
                        </div><!-- .col-md -->
                        <div class="col-md-6 align-self-center">
                            <div class="swiper mySwiper miwlo-app-testimonial-slide-container swiper-container text-center">
                                <div class="miwlo-testimonial-slide-shape-top miwlo-parallax">
                                    <div class="layer" data-depth="1">
                                        <div>
                                            <img data-parallax='{"y" : 30}' src="<?php echo IMAGES ?>/shape/shape-11.png" alt="Triangle">
                                        </div>
                                    </div>
                                </div><!-- .miwlo-testimonial-slide-shape-top -->
                                <div class="miwlo-app-testimonial-slide-wrapper swiper-wrapper">
                                    <?php for ($i = 1; $i <= 4; $i++):
                                        $texto = get_sub_field("texto_testimonial_$i");
                                        if (!empty($texto)):
                                    ?>
                                            <div class="miwlo-app-testimonial-single-slide swiper-slide">
                                                <?php echo $texto; ?>
                                            </div>
                                    <?php
                                        endif;
                                    endfor; ?>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div><!-- .col-md -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </aside>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<!-- =================== Motivacional =================== -->
<?php if (have_rows('group_motivational')) : ?>
    <?php while (have_rows('group_motivational')) : the_row(); ?>
        <section class="miwlo-subscribe-newsletter-wrap is-full-width">
            <div class="miwlo-download-shape">
                <img src="<?php echo IMAGES ?>/shape/circle-line-half.png" alt="Shape">
            </div><!-- .miwlo-download-shape -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-12">
                        <div class="text-left miwlo-subscribe-text">
                            <h3 class="section-heading text-center"><?php the_sub_field('title'); ?></h3>
                            <p class="text-center"><?php the_sub_field('text'); ?></p>
                        </div><!-- .miwlo-subscribe-text -->
                    </div><!-- .col-lg-5 col-12 -->
                    <div class="col-lg-12 col-12">
                        <div class="text-center mt-4">
                            <a target="<?php the_sub_field('target_button'); ?>" class="miwlo-btn-pill btn-black" href="<?php the_sub_field('url_button'); ?>"><?php the_sub_field('text_button'); ?></a>
                        </div><!-- .miwlo-subscribe-form -->
                    </div><!-- .col-lg-7 col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true,
        },
    });
</script>

<!-- Footer -->
<?php get_footer(); ?>