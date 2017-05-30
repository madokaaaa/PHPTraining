<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Web開発課題</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>

    <p><h2>お問い合わせ</h2></p>
    <form method="get" action="index.php">
        <!-- <input typeで形式指定。nameが箱。valueとかが内容。> -->
        <div class="main">
            <div class="oya2">
                <div class="oya2_ko1">姓</div>
                <input type="text" class="form" name="name" placeholder="例：山田 " size="10" required><br>
            </div>


            <div class="oya2">
                <div class="oya2_ko1">名</div>
                <input type="text" class="form" name="name2" placeholder="例：太郎 "size="10" required><br>
            </div>

            <div class="oya2 gender">
                <div class="oya2_ko1">性別</div>
                <input type="radio" name="sex" value="男"><span>男</span>
                <input type="radio" name="sex" value="女"><span>女</span>
                <input type="radio" name="sex" value="不明"><span>不明</span>
            </div>

            <div class="oya2">
                <div class="oya2_ko1">住所</div>
                <input type="text" class="form" name="address" placeholder="例：東京都千代田区"size="20"><br>
            </div>

            <div class="oya2">
                <div class="oya2_ko1">電話番号</div>
                <input type="tel" class="form" name="tell[]" size="2" required pattern="\d{2,4}">-
                <input type="tel" class="form" name="tell[]" size="2" required pattern="\d{3,4}">-
                <input type="tel" class="form" name="tell[]" size="2" required pattern="\d{3,4}">
            </div>

            <div class="oya2">
                <div class="oya2_ko1">メールアドレス</div>
                <input type="text" class="form" name="mail[]" size="5" required>@
                <input type="text" class="form" name="mail[]" size="5" required><br>
            </div>

            <div class="oya2 where">
                <div class="oya2_ko1">どこで知ったか</div>
                <input type="checkbox" class="form" name="where[]" value="雑誌"><span>雑誌</span>
                <input type="checkbox" class="form" name="where[]" value="新聞"><span>新聞</span>
            </div>

            <div class="oya2">
                <div class="oya2_ko1">質問カテゴリ</div>
                <select name="anything" class="form">
                    <option value="食品">食品</option>
                    <option value="服飾">服飾</option>
                    <option value="家具">家具</option>
                    <option value="雑貨">雑貨</option>
                </select>
            </div>
            <div class="oya2">
                <div class="oya2_ko1">質問内容</div>
                <textarea name="text" class="form" rows="10" cols="30"></textarea><br>
            </div>

            <div>
            <input type="submit" name="soshin" value="確認">
            <input type="reset" name="clear" value="クリア">
        </div>

        </div>

</form>

</body>
