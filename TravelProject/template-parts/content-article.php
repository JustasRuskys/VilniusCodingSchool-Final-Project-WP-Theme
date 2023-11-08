<section class="about section" id="about">
    <div class="about__container container grid">

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

        <div class="Popular__button">
        <a href="./" class="button">
            Return to Previous Page <i class="ri-arrow-right-line"></i>
        </a>
    </div>

    </div>
</section>