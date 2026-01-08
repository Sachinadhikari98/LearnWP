<?php

// Template Name: My Home page

get_header(); ?>

<main class="grow">
    <div class="@container py-16 sm:py-24">
        <div class="flex flex-col gap-10 @[864px]:flex-row @[864px]:items-center">
            <div class="flex flex-col gap-6 @[864px]:justify-center flex-1">
                <div class="flex flex-col gap-4 text-left">
                    <h1 class="text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl"> <?php echo esc_html(get_field("hero_section_heading") )?> </h1>
                    <h2 class="text-base font-normal leading-normal text-subtle-text-light dark:text-subtle-text-dark"><?php echo get_field("hero_section_description") ?> </h2>
                </div>
                <div class="flex">
                    <?php 
                    $button_text =  get_field('hero_section_button_text');
                    $button_url = get_field('hero_section_button_url');
                    if($button_text && $button_url){
                    ?>
                    <a href="<?php echo esc_url(get_field("hero_section_buttton_url")) ?>" class="flex min-w-21 max-w-120 cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-red-500 text-text-light text-base font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity">
                        <span class="truncate"><?php echo esc_html(get_field("hero_section_button_text") )?></span>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="w-full flex-1 bg-center bg-no-repeat aspect-square bg-cover rounded-xl @[480px]:h-auto @[480px]:min-w-100 @[864px]:w-full" data-alt="Abstract vibrant geometric shapes on a light background" style='background-image: url("<?php echo esc_url(get_field("hero_section_image")) ?>");'></div>
        </div>
    </div>


    <?php
    $post_query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page'  => 3,
    ]);
    if ($post_query->have_posts()) {
    ?>

        <section class="py-16 sm:py-24 border-t border-gray-200 dark:border-gray-800">
            <div class="flex flex-col gap-8">
                <h2 class="text-3xl font-bold text-center tracking-[-0.02em]">Recent Blog Posts</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                    <?php
                    while ($post_query->have_posts()) {
                        $post_query->the_post();

                    ?>
                        <div class="flex flex-col gap-4">
                            <p class="text-sm text-subtle-text-light dark:text-subtle-text-dark"><?php echo get_the_date() ?></p>
                            <h3 class="text-xl font-bold"><?php echo get_the_title(); ?></h3>
                            <p class="text-subtle-text-light dark:text-subtle-text-dark"> <?php echo get_the_excerpt(); ?></p>
                            <a class="font-bold text-primary hover:underline" href="<?php the_permalink() ?> ">Read More</a>
                        </div>

                    <?php
                    }
                    ?>

                </div>
                <div class="flex justify-center mt-4">
                    <button class="flex min-w-21 max-w-120 cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-transparent border border-primary text-primary text-base font-bold leading-normal tracking-[0.015em] hover:bg-primary hover:text-text-light transition-colors">
                        <span class="truncate">View More</span>
                    </button>
                </div>
            </div>
        </section>

    <?php
    }
    wp_reset_postdata();

    ?>


    <?php
    $project_query = new WP_Query(
        [
            'post_type' => 'project',
            'posts_per_page' => 2,
        ]
    );

    if ($project_query->have_posts()) {
    ?>
        <section class="py-16 sm:py-24 border-t border-gray-200 dark:border-gray-800">
            <div class="flex flex-col gap-8">
                <h2 class="text-3xl font-bold text-center tracking-[-0.02em]">Featured Projects</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <?php
                    while ($project_query->have_posts()) {
                        $project_query->the_post();

                    ?>
                        <div class="flex flex-col gap-4">
                            <div>
                                <?php the_post_thumbnail() ?>
                            </div>

                            <a href="<?php the_permalink(); ?>">
                                <h3 class="text-xl font-bold"><?php the_title() ?></h3>
                            </a>
                            <p class="text-subtle-text-light dark:text-subtle-text-dark"><?php the_excerpt() ?></p>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </section>
    <?php  }
    wp_reset_postdata();
    ?>



    <?php

    $gallery_query = new WP_Query([
        'post_type' => 'gallery',
        'posts_per_page' => -1,
    ]);

    if ($gallery_query->have_posts()) {
    ?>

        <section class="py-16 sm:py-24 border-t border-gray-200 dark:border-gray-800">
            <div class="flex flex-col gap-8">
                <h2 class="text-3xl font-bold text-center tracking-[-0.02em]">Photo Gallery</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <?php
                    while ($gallery_query->have_posts()) {
                        $gallery_query->the_post();
                    ?>
                        <div class="aspect-square bg-cover bg-center rounded-lg" data-alt="Minimalist architectural detail with strong shadows." style='background-image: url("<?php the_post_thumbnail_url() ?>");'>
                        </div>
                    <?php  } ?>

                </div>
            </div>
        </section>
    <?php }
    wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>