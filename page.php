<?php get_header() ?>
<div class="miwlo-blog-wrap left-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="miwlo-blog">
                    <article class="miwlo-blog-post">
                        <div class="miwlo-blog-details-wrap">

                            <h2 class="text-center"><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div><!-- .miwlo-blog-details-wrap -->
                    </article><!-- .miwlo-single-blog-post -->
                </div><!-- .miwlo-blog -->
            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .miwlo-blog-wrap -->
<?php get_footer() ?>