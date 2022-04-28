<?php declare(strict_types=1);

namespace App;

use function Safe\json_encode;

class Test3
{
    public function test(): string
    {
        return json_encode('test');
    }
}
