<!-- メインビジュアル -->
<div class="mv_temp">
    <div class="mv_temp_title">
        <div class="mv_temp_title_inner">

            <?php
                if(get_post_type()==="user"){
                    $title = "利用者紹介";
                    $thumbnail = get_template_directory_uri()."/image/user_mv.png";
                }
                elseif (has_post_thumbnail($post_object->ID)) { 
                    $thumbnail_id = get_post_thumbnail_id($post_object->ID); 
                    $image = wp_get_attachment_image_src($thumbnail_id, 'full'); 
                    $thumbnail = $image[0]; 

                    $title = get_the_title();
                }
                else{
                    $title = "";
                    $thumbnail = "";
                }
            ?>

            <?= $title ?>
        </div>
    </div>

    <img src="<?php echo $thumbnail; ?>" class="mv_temp_image">

</div>