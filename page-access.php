<!-- 変数処理 -->
<?php
$content = get_the_content();
?>

<?php include 'inc/header.php'; ?>

<?php include 'inc/mv-temp.php'; ?>

<!-- アクセス -->
<div class="page-access wrapper_sm">
    <?=$content?>
</div>

<?php include 'inc/footer.php'; ?>