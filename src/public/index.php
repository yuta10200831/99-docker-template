<?php
class MyClass {
	public function multipleOfThree() {
			for ($i = 1; $i <= 6; $i++) {
					if ($i % 3 == 0) {
							echo $i . "<br>";
					}
			}
	}
}

$object = new MyClass();
$object->multipleOfThree();


// for ($i = 1; $i <= 6; $i++) {
//     if ($i % 3 == 0) {
// 			echo $i . "<br>";
// 		}
// }