<?php get_header(); ?>
<section class="about section" id="about">
    <div class="about_gap container grid">

        <div class="about__data">
            <h2 class="section__title">
                <?php the_title(); ?>
            </h2>

            <p class="about__description">
                <?php the_content(); ?>
            </p>
        </div>

        <div class="about__image">
            <figure class="about__img">
                <?php the_post_thumbnail(); ?>
            </figure>
            <div class="about__shadow"></div>
        </div>

    </div>
</section>
<?php get_footer(); ?>
