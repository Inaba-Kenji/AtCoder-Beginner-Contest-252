<!-- 問題文
高橋君の家には N 個の食品があり、i 番目の食品のおいしさは Aiです。
また、高橋君には嫌いな食品が K 個あり、具体的には i=1,2,…,K について、Bi番目の食品が嫌いです。
高橋君は N 個の食品のうち、おいしさが最大の食品から 1 つを選んで食べようと考えています。 高橋君が嫌いな食品を食べる可能性があるならば Yes を、食べる可能性が無いならば No を出力してください。

制約
1≤K≤N≤100
1≤Ai≤100
1≤Bi≤NBiはすべて相異なる入力はすべて整数 -->

<?php

$stdin = explode(' ', trim(fgets(STDIN)));
$deliciousArray = explode(' ', trim(fgets(STDIN)));
$disLikeArray = explode(' ', trim(fgets(STDIN)));

$maxesIndex = array_keys($deliciousArray, max($deliciousArray));

echo $answer = isEatHateFood($disLikeArray, $maxesIndex);

function isEatHateFood(array $disLikeArray, array $maxesIndex)
{
  $answer = "No";
  foreach ($disLikeArray as $key => $value) {
    for ($i = 0; $i < count($maxesIndex); $i++) {
      if ($value == ($maxesIndex[$i] + 1)) {
        $answer = "Yes";
      }
    }
  }
  return $answer;
}
