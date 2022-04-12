<?php
/*
Template Name: Home Template
Template Post Type: page
*/
    get_header();
?>
<!-- no doctype because header is inlcuded -->
<!-- main element -->
    <main>
        <?php
            
        ?>


<!-- php hook for masthead -->
    <section class="masthead row" style="background-image: url('<?php the_field('masthead_image') ?>')">
        <div>
            <h1><?php the_field('masthead_title'); ?></h1>
            <h2><?php the_field('masthead_sub-heading'); ?></h2>
        </div>
    </section>
    <section class="row-one row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <img src="<?php the_field('row_one_image'); ?>" alt="sample image">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
			<h3><?php the_field('title'); ?></h3>
            <?php the_field('text_content_row_one') ?>
        </div>
    </section>
    <section class="row-two row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h3><?php the_field('titletwo'); ?></h3>
            <?php the_field('text_content_row_two') ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
			<img src="<?php the_field('row_two_image'); ?>" alt="sample image">
        </div>
    </section>
    <section class="row row-three">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <img src="<?php the_field('row_three_image'); ?>" alt="sample image">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h3><?php the_field('titlethree'); ?></h3>
            <?php the_field('text_content_row_three') ?>
        </div>
    </section>
    <section class="row row-four">
		<?php the_field('text_content_row_four') ?>
        <?php
            $args = array(
                'post_type'     => 'post',
                'post_status'   => 'publish',
                'category_name' => 'Cats, Coffee, Sweets',
                'post_per_page' =>  3
            );
            $arr_posts = new WP_QUERY($args);
            if ($arr_posts->have_posts()) :
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
        ?>
            <article class="col-sm-12 col-md-4 col-lg-4" id="post-<?php the_ID(); ?>"<?php post_class();?>>
                <?php
                    if (has_post_thumbnail()) :
                        the_post_thumbnail();
                    endif;
                ?>
                <header class="entry-header">
                    <h3><?php the_title(); ?></h3>
                </header>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">ReadMore</a>
                </div>
            </article>
            <?php
                endwhile;
            endif;
            ?>
    </section>
    </main>
<?php
    get_footer();
?>