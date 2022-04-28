<?php declare(strict_types=1);

namespace App;

use function Safe\mime_content_type;

class Test2
{
    public function test(): string
    {
        return mime_content_type(__FILE__);
    }
}
