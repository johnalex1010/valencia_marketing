<?php /*Template Name: Página de Inicio*/ ?>

<!-- Cabecera -->
<?php get_header(); ?>

<?php
$lang = get_current_lang();
if ($lang === 'es') {
    echo 'Hola mundo';
} else {
    echo 'Hello world';
}
?>


<!-- ====================== Hero ======================= -->
<section class="miwlo-app-landing-banner-wrap">
    <div class="app-landing-top-shape">
        <img class="app-circle-shape" src="<?php echo IMAGES ?>/shape/circle-line-large.png" alt="Circle">
        <div class="small-dot-wrapper miwlo-parallax">
            <div class="layer" data-depth="0.1">
                <div data-aos="fade-up" data-aos-delay="1000">
                    <img data-parallax='{"y" : 30}' class="app-line-dot-small" src="<?php echo IMAGES ?>/shape/line-dot-sm.png"
                        alt="Line Dot">
                </div>
            </div><!-- .layer -->
        </div><!-- .small-dot-wrapper -->
        <div class="circle-dot-left miwlo-parallax">
            <div class="layer" data-depth="2">
                <div data-aos="fade-up" data-aos-delay="1200">
                    <img data-parallax='{"y" : 100}' src="<?php echo IMAGES ?>/shape/circle-line-25.png" alt="Circle">
                </div>
            </div><!-- .layer -->
        </div><!-- .circle-dot-left -->
        <div class="circle-dot-right miwlo-parallax">
            <div class="layer" data-depth="3">
                <div data-aos="fade-up" data-aos-delay="1200">
                    <img data-parallax='{"y" : 100}' src="<?php echo IMAGES ?>/shape/qube-60.png" alt="Circle">
                </div>
            </div><!-- .layer -->
        </div><!-- .circle-dot-right -->
    </div><!-- .app-circle-shape -->
    <div class="container">
        <div class="row">
            <div class="col-sm-7 align-self-center">
                <div class="miwlo-app-landing-banner-text">
                    <h2 data-aos="fade-up" data-aos-delay="1000">Lorem ipsum dolor sit amet </h2>
                    <p data-aos="fade-up" data-aos-delay="1200">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Corrupti maiores omnis minima ducimus sunt at corporis sit consequuntur a officia iure
                    </p>
                    <div data-aos="fade-up" data-aos-delay="1400" class="miwlo-app-landing-btn-wrap d-lg-flex">
                        <a class="miwlo-btn-pill btn-black d-flex align-items-center" href="#">
                            <div class="icon">
                                <i class="fas fa-calendar"></i>
                            </div>
                            <div>
                                <span>Tu cita</span>
                                Reserva ahora
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
                                <div data-aos="fade-up" data-aos-delay="1000">
                                    <img data-parallax='{"y" : 30}' class="mobile"
                                        src="<?php echo IMAGES ?>/banner/mobile-border.png" alt="Mobile">
                                </div>
                            </div><!-- .layer -->
                        </div><!-- .mobile-wrapper -->
                    </div><!-- .miwlo-app-landing-banner-image -->
                    <div class="app-landing-moible-bg">
                        <div data-aos="fade-up" data-aos-delay="800">
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
                <div data-aos="fade-up" data-aos-delay="1200">
                    <img data-parallax='{"x" : 80}' src="<?php echo IMAGES ?>/shape/line-dot-sm.png" alt="Line Dot">
                </div>
            </div>
        </div><!-- .app-line-dot-small-bottom -->
        <div class="circle-dot-bottom-left miwlo-parallax">
            <div class="layer" data-depth="1">
                <div data-aos="fade-up" data-aos-delay="1000">
                    <img data-parallax='{"y" : 30}' src="<?php echo IMAGES ?>/shape/qube-60.png" alt="Circle">
                </div>
            </div>
        </div><!-- .circle-dot-bottom-left -->
    </div><!-- .app-circle-shape -->
</section>


<!-- ======================== Lo que hacemos ======================== -->
<aside class="miwlo-why-choose-wrap">
    <div class="miwlo-why-choose-right-shape">
        <img data-parallax='{"y" : 100}' src="<?php echo IMAGES ?>/shape/shape-05.png" alt="Shape">
    </div><!-- .miwlo-why-choose-right-shapes -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="miwlo-why-choose-text text-center" data-aos="fade-up" data-aos-delay="100">
                    <p class="section-subheading">Lorem</p>
                    <h3 class="section-heading">Lo que hacemos</h3>
                </div><!-- .miwlo-why-choose-text -->
            </div><!-- .col-md-7 -->
        </div><!-- .row -->
        <div class="row text-center">
            <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="200">
                <div class="why-choice-options option-one">
                    <div class="why-choice-options-img-wrap">
                        <img src="<?php echo IMAGES ?>/icons/icon-01.png" alt="Data Management">
                    </div><!-- .why-choice-options -->
                    <h4>Lorem</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div><!-- .why-choice-options -->
            </div><!-- .col-md-6 col-lg -->
            <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="400">
                <div class="why-choice-options option-two">
                    <div class="why-choice-options-img-wrap">
                        <img src="<?php echo IMAGES ?>/icons/icon-02.png" alt="Data Management">
                    </div><!-- .why-choice-options -->
                    <h4>Lorem</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div><!-- .why-choice-options -->
            </div><!-- .col-md-6 col-lg -->
            <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="600">
                <div class="why-choice-options option-three">
                    <div class="why-choice-options-img-wrap">
                        <img src="<?php echo IMAGES ?>/icons/icon-03.png" alt="Data Management">
                    </div><!-- .why-choice-options -->
                    <h4>Lorem</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div><!-- .why-choice-options -->
            </div><!-- .col-md-6 col-lg -->
            <div class="col-12 col-md-6 col-lg" data-aos="fade-up" data-aos-delay="600">
                <div class="why-choice-options option-four">
                    <div class="why-choice-options-img-wrap">
                        <img src="<?php echo IMAGES ?>/icons/icon-07.png" alt="Best Support">
                    </div><!-- .why-choice-options -->
                    <h4>Lorem</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div><!-- .why-choice-options -->
            </div><!-- .col-md-6 col-lg -->
        </div><!-- .row -->
    </div><!-- .container -->
    <div class="miwlo-why-choose-left-shape">
        <img data-parallax='{"y" : 50}' src="<?php echo IMAGES ?>/shape/shape-06.png" alt="Shape">
    </div><!-- .miwlo-why-choose-left-shapes -->
</aside>

<!-- ========================= Que hacemos ========================= -->
<section class="miwlo-features-wrap feature-one">
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
                            <div data-aos="fade-up" data-aos-delay="300">
                                <img data-parallax='{"y" : 30}' class="mobile" src="<?php echo IMAGES ?>/others/feature-01.png"
                                    alt="Feature">
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
            </div><!-- .col-lg -->
            <div class="col-lg col-md offset-xl-2 offset-md-1 align-self-center">
                <div class="miwlo-features-text-wrapper">
                    <h3 data-aos="fade-up" data-aos-delay="300">Lo que hacemos</h3>
                    <p data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Itaque, reiciendis molestiae aut repudiandae in.</p>
                    <div data-aos="fade-up" data-aos-delay="500">
                        <a class="miwlo-btn-border btn-black" href="#">Comenzar</a>
                    </div>
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

<!-- ========================= Quienes somos ========================= -->
<section class="miwlo-features-wrap feature-two">
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
                    <h3 data-aos="fade-up" data-aos-delay="300">Quienes somos</h3>
                    <p data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Quae quod reiciendis recusandae doloribus suscipit odio.</p>
                    <div data-aos="fade-up" data-aos-delay="500">
                        <a class="miwlo-btn-border btn-black" href="#">Reserva</a>
                    </div>
                </div><!-- .miwlo-features-text-wrapper -->
            </div><!-- .col-md -->
            <div class="col-lg col-md offset-lg-2 offset-md-1 offset-sm-0 order-md-2 order-1">
                <div class="miwlo-feature-img-wrapper">
                    <div class="miwlo-feature-img miwlo-parallax">
                        <div class="layer" data-depth="0.1">
                            <div data-aos="fade-up" data-aos-delay="300">
                                <img data-parallax='{"y" : 30}' class="mobile" src="<?php echo IMAGES ?>/others/feature-02.png"
                                    alt="Feature">
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
</section>

<!-- ======================== Testimonial Area ======================= -->
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
                <div class="miwlo-app-testimonial-text" data-aos="fade-left" data-aos-delay="300">
                    <div class="miwlo-testimonial-text-icon miwlo-parallax">
                        <div class="layer" data-depth="1">
                            <div data-parallax='{"y" : 30}'>
                                <img src="<?php echo IMAGES ?>/icons/quote-alt.png" alt="Quote">
                            </div>
                        </div><!-- .layer -->
                    </div><!-- .miwlo-testimonial-text-icon -->
                    <h2>Lo que dicen nuestros clientes</h2>
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
                <div class="miwlo-app-testimonial-slide-container swiper-container text-center"
                    data-aos="fade-right" data-aos-delay="300">
                    <div class="miwlo-testimonial-slide-shape-top miwlo-parallax">
                        <div class="layer" data-depth="1">
                            <div>
                                <img data-parallax='{"y" : 30}' src="<?php echo IMAGES ?>/shape/shape-11.png" alt="Triangle">
                            </div>
                        </div>
                    </div><!-- .miwlo-testimonial-slide-shape-top -->
                    <div class="miwlo-app-testimonial-slide-wrapper swiper-wrapper">
                        <div class="miwlo-app-testimonial-single-slide swiper-slide">
                            <h4>Lorem ipsum dolor sit amet.</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto rem, enim,
                                exercitationem, minima officia eligendi possimus</p>
                        </div><!-- .miwlo-app-testimonial-single-slide -->
                        <div class="miwlo-app-testimonial-single-slide swiper-slide">
                            <h4>Lorem ipsum dolor sit amet.</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto rem, enim,
                                exercitationem, minima officia eligendi possimus</p>
                        </div><!-- .miwlo-app-testimonial-single-slide -->
                        <div class="miwlo-app-testimonial-single-slide swiper-slide">
                            <h4>Lorem ipsum dolor sit amet.</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto rem, enim,
                                exercitationem, minima officia eligendi possimus</p>
                        </div><!-- .miwlo-app-testimonial-single-slide -->
                        <div class="miwlo-app-testimonial-single-slide swiper-slide">
                            <h4>Lorem ipsum dolor sit amet.</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto rem, enim,
                                exercitationem, minima officia eligendi possimus</p>
                        </div><!-- .miwlo-app-testimonial-single-slide -->
                    </div><!-- .miwlo-app-testimonial-slide-wrapper -->
                    <!-- Add Pagination -->
                    <div class="testimonial-pagination"></div>

                    <div class="miwlo-testimonial-slide-shape-bottom miwlo-parallax">
                        <div class="layer" data-depth="1">
                            <div>
                                <img data-parallax='{"y" : 30}' src="<?php echo IMAGES ?>/shape/shape-12.png" alt="Triangle">
                            </div>
                        </div>
                    </div><!-- .miwlo-testimonial-slide-shape-bottom -->
                </div><!-- .miwlo-app-testimonial-slide-container -->
            </div><!-- .col-md -->
        </div><!-- .row -->
    </div><!-- .container -->
</aside>

<!-- =================== Que esperar de nosotros =================== -->
<section class="miwlo-subscribe-newsletter-wrap is-full-width">
    <div class="miwlo-download-shape">
        <img src="<?php echo IMAGES ?>/shape/circle-line-half.png" alt="Shape">
    </div><!-- .miwlo-download-shape -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-12">
                <div class="text-center miwlo-subscribe-text" data-aos="fade-left" data-aos-delay="300">
                    <h3>Que esperar de nosotros</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus tenetur veritatis porro
                        ratione esse repudiandae laboriosam ut sed accusamus tempore voluptatibus debitis fugit quas
                        totam enim ea possimus, sapiente placeat.</p>
                </div><!-- .miwlo-subscribe-text -->
            </div><!-- .col-lg-5 col-12 -->
            <div class="col-lg-12 col-12">
                <div class="text-center mt-4" data-aos="fade-right" data-aos-delay="300">
                    <a class="miwlo-btn-pill btn-black" href="#">Reserva tu cita</a>
                </div><!-- .miwlo-subscribe-form -->
            </div><!-- .col-lg-7 col-12 -->
        </div><!-- .row -->
    </div><!-- .container -->
</section>

<!-- Footer -->
<?php get_footer(); ?>