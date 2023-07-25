<?php
class MyClass {
	public function multipleOfThree(int $limit) {
			for ($i = 1; $i <= $limit; $i++) {
					if ($i % 3 == 0) {
							echo $i . "<br>";
					}
			}
	}}

$object = new MyClass();
$limit = 6;
$object->multipleOfThree($limit);

// (期待する出力)
// 3
// 6

// for ($i = 1; $i <= 6; $i++) {
//     if ($i % 3 == 0) {
// 			echo $i . "<br>";
// 		}
// }