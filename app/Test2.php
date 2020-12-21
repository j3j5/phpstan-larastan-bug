<?php declare(strict_types=1);

namespace App;

use function Safe\dns_get_record;

class Test2
{
    private function test(): void
    {
        dns_get_record('example.com');
    }
}
