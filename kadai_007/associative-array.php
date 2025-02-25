<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP連想配列</title>
</head>

<body>
   <p>
<?php
// 連想配列を作成し、変数に代入
$vegetable = ["name" => "onion", "price" => 200, "weight" => 160];
  

// 連想配列をブラウザに出力
print_r($vegetable);

//echo "<br>";
//echo "野菜名：" . $vegetable["name"] . "<br>";
//echo "価格：" . $vegetable["price"] . "円<br>";
//echo "重さ：" . $vegetable["weight"] . "g<br>";

?>
   </p>
</body>

</html>