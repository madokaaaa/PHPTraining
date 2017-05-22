<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Web開発課題</title>
</head>
<body>
<center>
    <p>お問い合わせ</p>
    <form method="get" action="index.php">
    性<input name="name" size="5"><br/>
    名<input neme="name2" size="5"><br/>
    性別<input type="radio" name="sex" value="male">男
            <input type="radio" name="sex2" value="male">女
            <input type="radio" name="sex3" value="?">不明<br/>
    住所<input neme="adress" size="5"><br/>
    電話番号<input neme="tell" size="2">-<input neme="name" size="2">-<input neme="name" size="2"><br/>
    メールアドレス<input neme="mail" size="5">@<input neme="name" size="5"><br/>
    どこで知ったか<input type="checkbox" name="where" value="yes">雑誌
                <input type="checkbox" name="where2" value="yes">新聞<br/>
    質問カテゴリ<input neme="question" size="5"><br/>
    質問内容</br><textarea rows="10" cols="40"></textarea><br/>
    <input type="submit" name="soshin" value="送信">
    <input type="reset" name="clear" value="クリア">
</form>
</center>
</body>
