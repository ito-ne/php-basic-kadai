<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編_課題11</title>
</head>
<body>
  <?php
  $data = ['名前'=>'玉ねぎ','値段'=>'200','産地'=>'北海道'];

  foreach ($data as $key => $value) {
    echo "{$key} : {$value}<br>";
  }
  ?>
</body>
</html>