<?php /*Template Name: Página de Inicio*/ ?>

<!-- Cabecera -->
<?php get_header(); ?>

<!-- main-area -->
<main>

    <!-- slider-area -->
    <?php if (have_rows('grupo_intro')) : ?>
        <?php while (have_rows('grupo_intro')) : the_row(); ?>
            <section id="home" class="slider-area fix p-relative min-vh-100">
                <?php $imagen_intro = get_sub_field('imagen_intro'); ?>
                <?php if ($imagen_intro) : ?>
                    <div>
                        <div class="single-slider slider-bg d-flex pt-200 pb-200" style="
                background:url(<?php echo esc_url($imagen_intro['url']); ?>);
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                height: 100dvh;
                background-repeat: no-repeat;">
                            <div class="container">
                                <div class="row justify-content-center text-center">
                                    <div class="col-lg-12 min-vh-90">
                                        <div class="slider-content s-slider-content mt-250">
                                            <?php the_sub_field('texto_intro'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- slider-area-end -->

    <!-- services-area -->
    <?php if (have_rows('grupo_lo_que_hacemos_por_ti')) : ?>
        <?php while (have_rows('grupo_lo_que_hacemos_por_ti')) : the_row(); ?>
            <section id="services" class="services-area pt-100 pb-100 fix" style="background-color: #dadfd1;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <h2 class=" text-center mb-20">Lo que hacemos por ti</h2>
                            <div class="card mb-3 card_servicios">
                                <div class="row no-gutters">
                                    <div class="col-md-2">
                                        <div class="card_image">
                                            <?php $imagen_1 = get_sub_field('imagen_1'); ?>
                                            <?php if ($imagen_1) : ?>
                                                <img src="<?php echo esc_url($imagen_1['url']); ?>" alt="<?php echo esc_attr($imagen_1['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <?php the_sub_field('texto_1'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card mb-3 card_servicios">
                                <div class="row no-gutters">
                                    <div class="col-md-2">
                                        <div class="card_image">
                                            <?php $imagen_2 = get_sub_field('imagen_2'); ?>
                                            <?php if ($imagen_2) : ?>
                                                <img src="<?php echo esc_url($imagen_2['url']); ?>" alt="<?php echo esc_attr($imagen_2['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <?php the_sub_field('texto_2'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- services-area-end -->

    <!-- points-area -->
    <?php if (have_rows('grupo_puntos_ancla')) : ?>
        <?php while (have_rows('grupo_puntos_ancla')) : the_row(); ?>
            <aside class="points-area pt-50 pb-50">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="card rounded-lg">
                                <div class="card-body text-center">
                                    <?php the_sub_field('punto_1'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card rounded-lg">
                                <div class="card-body text-center">
                                    <?php the_sub_field('punto_2'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card rounded-lg">
                                <div class="card-body text-center">
                                    <?php the_sub_field('punto_3'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- points-area-end -->

    <!-- testimonial-area -->
    <?php if (have_rows('grupo_testimonios')) : ?>
        <?php while (have_rows('grupo_testimonios')) : the_row(); ?>
            <?php $imagen = get_sub_field('imagen'); ?>
            <?php if ($imagen) : ?>
                <section class="testimonial-area2 pt-100 pb-100" style="background-color: #F1F5E9; background-image: url(<?php echo esc_url($imagen['url']); ?>); background-size: cover; background-position: center; background-attachment: fixed; background-repeat: no-repeat;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title center-align mb-50 text-center">
                                    <h2 class="text-white">Testimonios</h2>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="testimonial-active2">
                                    <?php for ($i = 1; $i <= 6; $i++): ?>
                                        <?php $texto = get_sub_field("texto_$i"); ?>
                                        <?php if (!empty($texto)): ?>
                                            <div class="single-testimonial">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <?php echo $texto; ?>
                                                        <div class="testi-author">
                                                            <div class="ta-info">
                                                                <span><?php the_sub_field("persona_$i"); ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="qt-img">
                                                    <img src="<?php echo esc_url(IMAGES); ?>/icon/blockquote_d2.png" alt="img">
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- testimonial-area-end -->

    <!-- aliados-area -->
    <?php if (have_rows('grupo_aliados')) : ?>
        <?php while (have_rows('grupo_aliados')) : the_row(); ?>
            <aside class="aliados-area pt-50 pb-50">
                <div class="section-title center-align mb-50 text-center">
                    <h2>Aliados</h2>
                </div>
                <div class="container">
                    <div class="row align-items-center justify-content-center ">
                        <?php for ($i = 1; $i <= 6; $i++): ?>
                            <?php $aliado = get_sub_field("aliado_$i"); ?>
                            <?php if (!empty($aliado)): ?>
                                <div class="col-md-2 col-6 my-3">
                                    <div class="card rounded-lg">
                                        <div class="card-body text-center">
                                            <img src="<?php echo esc_url($aliado['url']); ?>" alt="<?php echo esc_attr($aliado['alt']); ?>" />
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                </div>
            </aside>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- aliados-area-end -->
</main>
<!-- main-area-end -->

<!-- Footer -->
<?php get_footer(); ?>