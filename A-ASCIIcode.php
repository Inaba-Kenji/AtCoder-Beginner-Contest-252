<!-- 問題文
英小文字 a, b, …, z の ASCII 文字コードはこの順に 97,98,…,122 です。
97 以上 122 以下の整数 N が与えられるので、ASCII 文字コードが N であるような英小文字を出力してください。

制約
N は 97 以上 122 以下の整数 -->

<?php
$stdin = trim(fgets(STDIN));
$stdin = $stdin - 97;

$list = range('a', 'z');

for ($i = 0; $i <= 25; $i++) {
  if ($stdin == $i) {
    echo $list[$i];
  }
}
