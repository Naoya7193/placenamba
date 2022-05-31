<?php include 'inc/header.php'; ?>

<?php include 'inc/mv-temp.php'; ?>

<div class="page-user wrapper_sm">
    <div class="page-user_textarea">
        <p class="page-user_copy">個人事業主から法人利用まで</p>
        <p class="page-user_text">企業様から個人事業主の方まで、様々な方が利用されています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れていま</p>
    </div>

    <div class="page-user_post">
        <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();

                    if (has_post_thumbnail($post_object->ID)) { 
                        $thumbnail_id = get_post_thumbnail_id($post_object->ID); 
                        $image = wp_get_attachment_image_src($thumbnail_id, 'full'); 
                        $user_image = $image[0]; 
                    } else {
                        $user_image = get_template_directory_uri() . '/image/user_thumbnail_sample.png';
                    }
        ?>

        <div class="page-user_card">
            <a class="page-user_card_link" href="<?php the_permalink(); ?>">
                <img class="page-user_card_image" src="<?php echo $user_image; ?>" alt="">
                <p class="page-user_card_title"><?php the_title(); ?></p>
                <?php the_content(); ?>
            </a>
        </div>

        <?php
            endwhile;

            wp_pagenavi();
            
        else :
        ?>

        <p>まだ利用者はいません</p>

        <?php
        endif;
        ?>

    </div>
</div>


<?php include 'inc/footer.php'; ?>