<?php
get_header();
?>

<!--========== MAIN ==========-->
<main class="main">
    <!--========== HOME ==========-->
    <section class="home section" id="home">
        <?php if ($home_bg->have_posts()) : ?>
            <?php while ($home_bg->have_posts()) : $home_bg->the_post(); ?>
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'home__bg']); ?>
                <div class="home__shadow"></div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <div class="home__container container grid">
            <div class="home__data">
                <h3 class="home__subtitle">
                    Welcome To Travel
                </h3>

                <h1 class="home__title">
                    Explore <br>
                    The World
                </h1>

                <p class="home__description">
                    Live the trips exploring the world, discover
                    paradises, islands, mountains and much more.
                </p>
            </div>

            <div class="home__cards grid">

                <?php if ($home_cards->have_posts()) : ?>
                    <?php while ($home_cards->have_posts()) : $home_cards->the_post(); ?>
                        <article class="home__card">
                            <figure class="home__card-img">
                                <?php the_post_thumbnail(); ?>
                            </figure>
                            <h3 class="home__card-title"><?php the_title(); ?></h3>
                            <div class="home__card-shadow"></div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>

            <div class="popup-img">
                <i class="ri-close-line"></i>
                <img class="home__popup-img" src="" alt="">
                <div class="home__card-shadow"></div>
            </div>
        </div>
    </section>

    <!--========== ABOUT ==========-->
    <section class="about section" id="about">
        <div class="about__container container grid">
            <?php if ($about_post->have_posts()) : ?>
                <?php while ($about_post->have_posts()) : $about_post->the_post(); ?>
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
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </section>

    <!--========== POPULAR ==========-->
    <section class="popular section" id="popular">
        <h2 class="section__title">
            Enjoy The Beauty <br>
            Of The World
        </h2>

        <div class="popular__container owl-carousel container grid">

            <?php if ($popular_cards->have_posts()) : ?>
                <?php while ($popular_cards->have_posts()) : $popular_cards->the_post(); ?>
                    <article class="popular__card">
                        <div class="popular__image">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'popular__img']); ?>
                            <div class="popular__shadow"></div>
                        </div>

                        <h2 class="popular__title">
                            <?php the_title(); ?>
                        </h2>

                        <div class="popular__location">
                            <i class="ri-map-pin-line"></i>
                            <span><?php $popular_location = get_the_post_thumbnail_caption();
                                                    echo $popular_location ?></span>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
        <div class="Popular__button">
            <a href="http://localhost/final-project/popular-places" class="button">
                See More Popular Places <i class="ri-arrow-right-line"></i>
            </a>
        </div>
    </section>

    <!--========== EXPLORE ==========-->
    <section class="explore section" id="explore">
        <div class="explore__container">
            <?php if ($explore_bg->have_posts()) : ?>
                <?php while ($explore_bg->have_posts()) : $explore_bg->the_post(); ?>
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'explore__img']); ?>
                    <div class="explore__shadow"></div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

        <div class="explore__content container grid">
            <?php if ($explore_post->have_posts()) : ?>
                <?php while ($explore_post->have_posts()) : $explore_post->the_post(); ?>
                    <div class="explore__data">
                        <h2 class="section__title">
                            <?php the_title(); ?>
                        </h2>
                        <p class="explore__description">
                            <?php the_content(); ?>
                        </p>
                    </div>

                    <div class="explore__foto">
                        <div class="explore_foto">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'explore__perfil']); ?>
                        </div>
                        <span class="explore__name"><?php $title = get_post(get_post_thumbnail_id())->post_title;
                                                    echo $title ?></span>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </section>

    <!--========== JOIN ==========-->
    <section class="join section">
        <div class="join__container container grid">
            <div class="join_data">
                <h2 class="section__title">
                    Your Journey <br>
                    Starts Here
                </h2>

                <p class="join__description">
                    Get up to date with the latest
                    travel and information from us.
                </p>

                <form action="" class="join__form">
                    <input type="email" placeholder="Enter your email" class="join__input">

                    <button class="join__button button">
                        Subscribe Our Newsletter <i class="ri-arrow-right-line"></i>
                    </button>
                </form>

                <p class="join__description">
                    Share your travel experience with others.
                </p>

                <div class="login__button">
                    <a href="#" class="button">
                        Upload Your Travel <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

            <div class="join__image">
                <?php if ($join_bg->have_posts()) : ?>
                    <?php while ($join_bg->have_posts()) : $join_bg->the_post(); ?>
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'join__img']); ?>
                        <div class="join__shadow"></div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>