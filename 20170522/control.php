<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>管理画面</title>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<center>
    <p><h1>管理画面</h1></p>



    <hr>
    <table border="1" width="100%">
    <tr>
    <th>No.</th>
    <th>姓</th>
    <th>名</th>
    <th>性別</th>
    <th>住所</th>
    <th>電話番号</th>
    <th>メールアドレス</th>
    <th>どこで知ったか</th>
    <th>質問カテゴリ</th>
    <th>質問内容</th>
    </tr>

    <?php
    $array=file("data.csv");
    foreach ($array as $data){
        echo "<tr>";
        $box=explode(",",$data);
        for ($i=0; $i < count($box); $i++) {
            echo "<td>".$box[$i]."</td>";
        }
        echo "</tr>";
    }
    ?>

</table>
</center>
</body>
</html>
