<?php get_header(); ?>

<!-- contact -->
<section class="c-contents p-contact p-contact__thanks">
            <div class="c-contents__inner">
                <div class="c-contents__top p-contact__top">
                    <h2 class="c-contents__title p-contact__title">
                        contact
                    </h2>
                </div>
                <div class="c-contents__main p-contact__main">
                    <p class="c-contents__text p-contact__text">
                    お問い合わせ完了
                    </p>
                    <div class="p-form">
                        <?php if(have_posts()):while(have_posts()):the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile;endif; ?>
                    </div>
                </div>
            </div>
        </section>
</main>

<?php get_footer(); ?>