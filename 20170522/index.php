<!DOCTYPE html>
<html>
<head>
    <title>確認フォーム</title>
    <link rel="stylesheet" href="design2.css">
    <meta charset="utf-8">
</head>
<body>
        <p><h2>お問い合わせ確認</h2></p>
        <p><h3>以下の内容でよろしいですか？</h3></p>

        <div class="main">
            <?php

            if (isset($_GET['soshin'])){
                $name = $_GET['name'];
                $name2 = $_GET['name2'];
                $sex = $_GET['sex'];
                $tell = implode("-" , $_GET['tell']);
                $mail = implode("@" , $_GET['mail']);
                $question = $_GET['anything'];
            }

            if(isset($_GET['address'])){
                $address = $_GET['address'];
            }
            else {
                $address = "";
            }

            if(isset($_GET['where'])){
                $where = implode(" " , $_GET['where']);
            }
            else {
                $where = "";
            }

            if(isset($_GET['text'])){
                $text = $_GET['text'];
            }
            else {
                $text = "";
            }

            echo "性 : ".$name."<br>";
            echo "名 : ".$name2."<br>";
            echo "性別 : ".$sex."<br>";
            echo "住所 : ".$address."<br>";
            echo "電話番号 : ".$tell."<br>";
            echo "メールアドレス : ".$mail."<br>";
            echo "どこで知ったか : ".$where."<br>";
            echo "質問カテゴリ : ".$question."<br>";
            echo "質問内容 : ".$text."<br>";

            ?>
        </div>

        <div class="form">
        <a href="http://localhost/PHPTraining/20170522/HTML.php">「未入力状態から書き直す」</a>
        </div>

        <form method="get" action="kanryo.php">
            <?php
            echo "<input type=\"hidden\" name=\"name\" value=\"$name\">";
            echo "<input type=\"hidden\" name=\"name2\" value=\"$name2\">";
            echo "<input type=\"hidden\" name=\"sex\" value=\"$sex\">";
            echo "<input type=\"hidden\" name=\"address\" value=\"$address\">";
            echo "<input type=\"hidden\" name=\"tell\" value=\"$tell\">";
            echo "<input type=\"hidden\" name=\"mail\" value=\"$mail\">";
            echo "<input type=\"hidden\" name=\"where\" value=\"$where\">";
            echo "<input type=\"hidden\" name=\"anything\" value=\"$question\">";
            echo "<input type=\"hidden\" name=\"text\" value=\"$text\">";

            ?>

            <div class="botan">
            <input type="submit" name="soshin2" value="送信">
            <input type="button" onclick="history.go(-1);" value="戻る">
            </div>

        </form>
    </body>
    </html>
