<!-- コンタクト -->
<?php if (is_page('contact') or is_page('reserve')):
        else:?>
    <div class="contact">
        <a href="/contact" class="button reserve">今すぐ内覧予約</a>
        <a href="/reserve" class="button inquiry">お問い合わせ</a>
    </div>
<?php endif; ?>

<!-- フッター -->
<footer class="footer">
    <div class="footer_inner wrapper">
        <a href="/" class="footer_image_link"><img src="<?php echo get_template_directory_uri(); ?>/image/logo-white.png" alt="ロゴの画像" class="footer_image"></a>
        <div class="footer_info">
            <p class="address">
                〒542-0076 
                <br>大阪市中央区難波5丁目1−60 11F
            </p>
            <p class="tel_number">TEL：06-0000-1234</p>
            <p class="business_day">平日・土日祝 9:00～22:00</p>
        </div>
        <div class="footer_nav">
            <ul class="footer_list">
                <li><a href="/corporate">企業様向けプラン</a></li>
                <li><a href="/individual">個人様向けプラン</a></li>
                <li><a href="/user">利用者紹介</a></li>
                <li><a href="/access">アクセス</a></li>
            </ul>
        </div>

    </div>
    <p class="copylight">@2022 THE PLACE NAMBA</p>
</footer>


<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>

</body>