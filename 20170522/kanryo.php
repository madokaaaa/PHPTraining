
<?php
$count=count(file("data.csv"));
$count+=1;

$name = $_GET['name'];
$name2 = $_GET['name2'];
$sex = $_GET['sex'];
$tell = $_GET['tell'];
$mail = $_GET['mail'];
$question = $_GET['anything'];
$address = $_GET['address'];
$where = $_GET['where'];
$text = $_GET['text'];

$array=[$count,$name,$name2,$sex,$tell,$mail,$question,$address,$where,$text];

$moji=implode(",",$array);

$fp=fopen("data.csv","a");

rewind($fp);
fwrite($fp,$moji."\n");
fclose($fp);
?>

<!DOCTYPE html>
<html>
<head>
    <title>完了画面</title>
    <meta charset="utf-8">
</head>
<body>
    <center>
        <p><h1>送信完了しました。</h1></p>
        <p>あなたは<?php echo $count; ?>番目のお客様です。</p>
        <a href="http://localhost/PHPTraining/20170522/HTML.php">ホームに戻る</a>

    </center>
</body>
</html>
