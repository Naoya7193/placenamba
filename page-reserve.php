<?php include 'inc/header.php'; ?>

<?php include 'inc/mv-temp.php'; ?>

<!-- 内覧予約・お問い合わせ -->
<div class="page-contact wrapper_sm">

    <!-- ラジオラベル -->
    <input id="reserve" type="radio" name="tab_item">
    <label class="tab_item" for="reserve">内覧予約</label>

    <input id="contact" type="radio" name="tab_item" checked>
    <label class="tab_item" for="contact">お問い合わせ</label>

    <!-- 内覧予約 -->
    <div class="reserve_block" id="reserve_block">
        <h2 class="reserve_block_title">内覧予約</h2>

        <!-- 内覧予約フォーム -->
        <form class="reserve_form" id="reserve_form" action="">

            <!-- 希望サービスラジオボタン -->
            <div class="reserve_form_parts required">
                <h3 class="reserve_form_parts_title">希望サービス</h3>

                <div class="radio_box">
                    <input id="servise_radio" type="radio" name="service_radio" checked>
                    <label class="servise_radio" for="service_radio">プライベートオフィス</label>
                </div>

                <div class="radio_box">
                    <input id="servise_radio" type="radio" name="service_radio">
                    <label class="servise_radio" for="service_radio">シングルオフィス</label>
                </div>

                <div class="radio_box">
                    <input id="servise_radio" type="radio" name="service_radio">
                    <label class="servise_radio" for="service_radio">フリーオフィス</label>
                </div>

                <div class="radio_box">
                    <input id="servise_radio" type="radio" name="service_radio">
                    <label class="servise_radio" for="service_radio">未定</label>
                </div>
            </div>

            <!-- 会社名記入欄 -->
            <div class="reserve_form_parts corporate required">
                <h3 class="reserve_form_parts_title">会社名</h3>
                <input type="text" id="corporate_name" placeholder="大阪レンタルオフィス株式会社">
            </div>

            <!-- 氏名記入欄 -->
            <div class="reserve_form_parts required">
                <h3 class="reserve_form_parts_title">氏名</h3>
                <input type="text" id="name" placeholder="山田太郎">
            </div>

            <!-- メールアドレス記入欄 -->
            <div class="reserve_form_parts required">
                <h3 class="reserve_form_parts_title">メールアドレス</h3>
                <input type="email" id="email" placeholder="xxx@example.com">
            </div>

            <!-- 電話番号記入欄 -->
            <div class="reserve_form_parts required">
                <h3 class="reserve_form_parts_title">お電話番号</h3>
                <input type="tel" id="tel" placeholder="00000000000">
            </div>

            <!-- 内覧方法ラジオボタン -->
            <div class="reserve_form_parts required">
                <h3 class="reserve_form_parts_title">内覧方法</h3>

                <div class="radio_box">
                    <input id="how_to_radio" type="radio" name="how_to_radio" checked>
                    <label class="how_to_radio" for="how_to_radio">直接内覧</label>
                </div>

                <div class="radio_box">
                    <input id="how_to_radio" type="radio" name="how_to_radio">
                    <label class="how_to_radio" for="how_to_radio">オンライン内覧</label>
                </div>
            </div>

            <!-- 内覧希望日時記入欄 -->
            <div class="reserve_form_parts required">
                <h3 class="reserve_form_parts_title">内覧希望日時</h3>
                <div class="reserve_form_parts_container">
                    <div class="reserve_form_parts_box">
                        <label class="date_label" for="date">第一希望</label>
                        <input type="date" name="date" class="date">
                        <div class="select_inner">
                            <select name="time">
                                <option value="default">選択</option>
                                <option value="time_value">9時</option>
                                <option value="time_value">10時</option>
                                <option value="time_value">11時</option>
                                <option value="time_value">12時</option>
                            </select>
                        </div>
                    </div>

                    <div class="reserve_form_parts_box">
                        <label class="date_label" for="date">第二希望</label>
                        <input type="date" name="date" class="date">
                        <div class="select_inner">
                            <select name="time">
                                <option value="default">選択</option>
                                <option value="time_value">9時</option>
                                <option value="time_value">10時</option>
                                <option value="time_value">11時</option>
                                <option value="time_value">12時</option>
                            </select>
                        </div>
                    </div>

                    <div class="reserve_form_parts_box">
                        <label class="date_label" for="date">第三希望</label>
                        <input type="date" name="date" class="date">
                        <div class="select_inner">
                            <select name="time">
                                <option value="default">選択</option>
                                <option value="time_value">9時</option>
                                <option value="time_value">10時</option>
                                <option value="time_value">11時</option>
                                <option value="time_value">12時</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 備考記入欄 -->
            <div class="reserve_form_parts">
                <h3 class="reserve_form_parts_title">備考</h3>
                <textarea class="comment" id="comment" cols="30" rows="10"></textarea>
            </div>

            <!-- 個人情報の取り扱いについて -->
            <div class="reserve_form_parts privacy">
                <div class="radio_box">
                    <input type="checkbox" id="privacy" name="privacy">
                    <h3 class="privacy">個人情報の取り扱いに同意します</h3>
                </div>
                <a href="policy" target="_blank" class="privacy_policy_link">プライバシーポリシーはこちら</a>
            </div>

            <!-- 送信ボタン -->
            <div class="reserve_form_submit" id="submit">
                <button class="button" type="submit" form="reserve_form">
                    入力内容の確認
                </button>
            </div>
        </form>
    </div>

    <!-- お問い合わせ -->
    <div class="reserve_block" id="contact_block">
        <h2 class="reserve_block_title">お問い合わせ</h2>

        <!-- 内覧予約フォーム -->
        <form class="reserve_form" id="reserve_form" action="">

            <!-- 希望サービスラジオボタン -->
            <div class="reserve_form_parts required">
                <h3 class="reserve_form_parts_title">お問い合わせ内容</h3>

                <div class="radio_box">
                    <input id="servise_radio" type="radio" name="service_radio" checked>
                    <label class="servise_radio" for="service_radio">プライベートオフィス</label>
                </div>

                <div class="radio_box">
                    <input id="servise_radio" type="radio" name="service_radio">
                    <label class="servise_radio" for="service_radio">シングルオフィス</label>
                </div>

                <div class="radio_box">
                    <input id="servise_radio" type="radio" name="service_radio">
                    <label class="servise_radio" for="service_radio">フリーオフィス</label>
                </div>

                <div class="radio_box">
                    <input id="servise_radio" type="radio" name="service_radio">
                    <label class="servise_radio" for="service_radio">未定</label>
                </div>
            </div>

            <!-- 会社名記入欄 -->
            <div class="reserve_form_parts corporate required">
                <h3 class="reserve_form_parts_title">会社名</h3>
                <input type="text" id="corporate_name" placeholder="大阪レンタルオフィス株式会社">
            </div>

            <!-- 氏名記入欄 -->
            <div class="reserve_form_parts required">
                <h3 class="reserve_form_parts_title">氏名</h3>
                <input type="text" id="name" placeholder="山田太郎">
            </div>

            <!-- メールアドレス記入欄 -->
            <div class="reserve_form_parts required">
                <h3 class="reserve_form_parts_title">メールアドレス</h3>
                <input type="email" id="email" placeholder="xxx@example.com">
            </div>

            <!-- 電話番号記入欄 -->
            <div class="reserve_form_parts required">
                <h3 class="reserve_form_parts_title">お電話番号</h3>
                <input type="tel" id="tel" placeholder="00000000000">
            </div>

            <!-- 内覧方法ラジオボタン -->
            <div class="reserve_form_parts required">
                <h3 class="reserve_form_parts_title">内覧方法</h3>

                <div class="radio_box">
                    <input id="how_to_radio" type="radio" name="how_to_radio" checked>
                    <label class="how_to_radio" for="how_to_radio">直接内覧</label>
                </div>

                <div class="radio_box">
                    <input id="how_to_radio" type="radio" name="how_to_radio">
                    <label class="how_to_radio" for="how_to_radio">オンライン内覧</label>
                </div>
            </div>

            <!-- 内覧希望日時記入欄 -->
            <div class="reserve_form_parts required">
                <h3 class="reserve_form_parts_title">内覧希望日時</h3>
                <div class="reserve_form_parts_container">
                    <div class="reserve_form_parts_box">
                        <label class="date_label" for="date">第一希望</label>
                        <input type="date" name="date" class="date">
                        <div class="select_inner">
                            <select name="time">
                                <option value="default">選択</option>
                                <option value="time_value">9時</option>
                                <option value="time_value">10時</option>
                                <option value="time_value">11時</option>
                                <option value="time_value">12時</option>
                            </select>
                        </div>
                    </div>

                    <div class="reserve_form_parts_box">
                        <label class="date_label" for="date">第二希望</label>
                        <input type="date" name="date" class="date">
                        <div class="select_inner">
                            <select name="time">
                                <option value="default">選択</option>
                                <option value="time_value">9時</option>
                                <option value="time_value">10時</option>
                                <option value="time_value">11時</option>
                                <option value="time_value">12時</option>
                            </select>
                        </div>
                    </div>

                    <div class="reserve_form_parts_box">
                        <label class="date_label" for="date">第三希望</label>
                        <input type="date" name="date" class="date">
                        <div class="select_inner">
                            <select name="time">
                                <option value="default">選択</option>
                                <option value="time_value">9時</option>
                                <option value="time_value">10時</option>
                                <option value="time_value">11時</option>
                                <option value="time_value">12時</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 備考記入欄 -->
            <div class="reserve_form_parts">
                <h3 class="reserve_form_parts_title">備考</h3>
                <textarea class="comment" id="comment" cols="30" rows="10"></textarea>
            </div>

            <!-- 個人情報の取り扱いについて -->
            <div class="reserve_form_parts privacy">
                <div class="radio_box">
                    <input type="checkbox" id="privacy" name="privacy">
                    <h3 class="privacy">個人情報の取り扱いに同意します</h3>
                </div>
                <a href="policy" target="_blank" class="privacy_policy_link">プライバシーポリシーはこちら</a>
            </div>

            <!-- 送信ボタン -->
            <div class="reserve_form_submit" id="submit">
                <button class="button" type="submit" form="reserve_form">
                    入力内容の確認
                </button>
            </div>
        </form>
    </div>

</div>


<?php include 'inc/footer.php'; ?>