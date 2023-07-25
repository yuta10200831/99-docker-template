<?php
class multipleOfTwo {
	public function printEvenNumbers(int $start, int $end) {
			for ($i = $start; $i <= $end; $i++) {
					if ($i % 2 == 0) {
							echo $i . "<br>";
					}
			}
	}
}

$object = new MultipleOfTwo();
$start = 1;
$end = 10;
$object->printEvenNumbers($start, $end);



// (期待する出力)
// 2
// 4
// 6
// 8
// 10

// for ($i = 1; $i <= 10; $i++) {
//		if ($i % 2 == 0) {
// 			echo $i . "<br>";
// 		}
// }
