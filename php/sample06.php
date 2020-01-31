<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
$i = 1;

// while (繰り返す条件) {
  //繰り返したい処理
  //更新処理
//}

//比較演算子 <=
// A < B = AがBより小さい
// A > B = AがBより大きい
// A <= B AがB以下
// A >= B AがB以上
// A === B AがBと等しい
// A !== B AとBが等しくない

// while ($i <= 365) {
//   print($i. "\n");
//   $i++; 更新処理
// }

for ($i=1; $i<=365; $i++) {
  print($i. "\n");
}

// for (初期化処理; 繰り返す処理; 更新処理) {
      //print(繰り返したい処理);
//}

?>
</pre>
</main>
</body>    
</html>
