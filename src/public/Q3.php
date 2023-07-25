<?php
class NumberClassFilter {
    public function classNumbers(int $start, int $end) {
        for ($i = $start; $i < $end; $i++) {
            if ($i % 2 == 0 && $i % 3 == 0) {
                echo $i . "は2の倍数かつ3の倍数です" . "<br>";
            } elseif ($i % 2 == 0) {
                echo $i . "は2の倍数です" . "<br>";
            } elseif ($i % 3 == 0) {
                echo $i . "は3の倍数です" . "<br>";
            }
        }
    }
}

$object = new NumberClassFilter();
$start = 1;
$end = 10;
$object->classNumbers($start, $end);


// for ($i = 1; $i < 10; $i++) {
//   if ($i % 2 == 0 && $i % 3 == 0) {
//       echo $i . "は2の倍数かつ3の倍数です" . "<br>";
//   } elseif ($i % 2 == 0) {
//       echo $i . "は2の倍数です" . "<br>";
//   } elseif ($i % 3 == 0) {
//       echo $i . "は3の倍数です" . "<br>";
//   }
// }

// (期待する出力)
// 2は2の倍数です
// 3は3の倍数です
// 4は2の倍数です
// 6は2の倍数かつ3の倍数です
// 8は2の倍数です
// 9は3の倍数です