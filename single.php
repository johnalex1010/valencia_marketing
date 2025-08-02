<?php get_header(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header wow fadeIn" style="background-image: url('<?php echo IMAGES ?>/carousel-1.jpg');" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown"><?php the_title(); ?></h1>
    </div>
</div>
<!-- Page Header End -->

<section class="single_page">

    <div class="fecha">Fecha de publicación: <?php the_date(); ?></div>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</section>

<!-- Blog Start -->
<section class="container-xxl py-5">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <h1 class="display-5 mb-3">También te puede interesar</h1>
        </div>
        <div class="row g-4">

            <?php
            // Detectar en qué tipo de post estamos
            $post_type = get_post_type();

            // Definir el tipo de contenido que queremos consultar
            $tipo_contenido = 'post'; // Por defecto, blogs normales

            if ($post_type === 'recetas') {
                $tipo_contenido = 'recetas'; // Si es receta, cambiamos a recetas
            }

            // Creamos el query personalizado
            $recent_posts = new WP_Query(array(
                'post_type' => $tipo_contenido,
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC',
                'post__not_in' => array(get_the_ID()), // Opcional: excluir el post actual
            ));

            // Loop de resultados
            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <div class="card_image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array('class' => 'receta-imagen')); ?>
                                <?php endif; ?>
                            </div>

                            <div class="bg-light p-4">
                                <div class="d-block h5 lh-base mb-4"><?php the_title(); ?></div>
                                <div class="card_excerpt"><?php the_excerpt(); ?></div>
                                <div class="text-muted border-top pt-4">
                                    <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i><?php echo get_the_date('d M Y'); ?></small>
                                </div>
                            </div>
                        </a>
                    </div>

            <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No hay contenido relacionado aún.</p>';
            endif;
            ?>
        </div>
    </div>
</section>
<!-- Blog End -->


<?php get_footer(); ?>