<?php
$title = get_the_title();
// $thumbnail = get_the_post_thumbnail();
?>

<div class="mv_temp">
    <div class="mv_temp_title"><?= $title ?></div>
    <img src="<?php the_post_thumbnail_url() ?>" class="mv_temp_image">

</div>