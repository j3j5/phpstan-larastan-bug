<?php

include('vendor/autoload.php');


echo class_exists(Safe\array::class);
echo class_exists(Safe\array::class);
echo class_exists(Safe\array::class);

$test = new App\Test();
$test2 = new App\Test2();
$test3 = new App\Test3();
print_r($test->test());
print_r($test->test2());
try {
    print_r($test->test3());
    print_r(PHP_EOL);
} catch (Safe\Exceptions\JsonException $e) {
    echo $e->getMessage() . PHP_EOL;
}
try {
    print_r($test2->test());
} catch (Safe\Exceptions\NetworkException $e) {
    echo $e->getMessage() . PHP_EOL;
    print_r(PHP_EOL);
}
try {
    print_r($test3->test());
} catch (Safe\Exceptions\JsonException $e) {
    echo $e->getMessage() . PHP_EOL;
    print_r(PHP_EOL);
}
// print_r($test3->test());
