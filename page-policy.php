<?php include 'inc/header.php'; ?>

<?php
$content = get_the_content();
$title = get_the_title();
?>

<?php include 'inc/mv-temp.php'; ?>

<div class="page-policy wrapper_sm">
    <?= $content ?>
</div>

<?php include 'inc/footer.php'; ?>