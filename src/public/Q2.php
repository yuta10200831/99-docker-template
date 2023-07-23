<?php
class multipleOfTwo {
	public function printEvenNumbers($start, $end) {
			for ($i = $start; $i <= $end; $i++) {
					if ($i % 2 == 0) {
							echo $i . "<br>";
					}
			}
	}
}

$object = new multipleOfTwo();
$object->printEvenNumbers(1, 10);



// for ($i = 1; $i <= 10; $i++) {
//     if ($i % 2 == 0) {
// 			echo $i . "<br>";
// 		}
// }
