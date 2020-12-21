<?php declare(strict_types=1);

namespace App;

use function Safe\json_encode;

class Test3
{
    private function test(): void
    {
        json_encode('test');
    }
}
