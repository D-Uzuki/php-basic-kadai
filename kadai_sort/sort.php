<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHPsort</title>
</head>

<body>
  <p>
    <?php
    // ここにコードを書いていく
    $nums = [15, 4, 18, 23, 10];


    function sort_2way(&$array, $order)
    {
      if ($order) {
        sort($array);
      } else {
        rsort($array);
      }
    }

    sort_2way($nums, true);
    echo "昇順ソート: " . "<br>";
    foreach ($nums as $num) {
      echo $num . "<br>";
    }

    echo "<br>";

    sort_2way($nums, false);
    echo "降順ソート: " . "<br>";
    foreach ($nums as $num) {
      echo $num . "<br>";
    }

    ?>
  </p>
</body>

</html>