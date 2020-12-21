<?php declare(strict_types=1);

namespace App;

use function Safe\openssl_pkcs12_read;

class Test
{
    private function test(): void
    {
        openssl_pkcs12_read('1', $certs, '2');
    }
}
