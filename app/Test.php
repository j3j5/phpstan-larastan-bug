<?php declare(strict_types=1);

namespace App;

use function Safe\array_replace_recursive;
use function Safe\date_parse_from_format;
use function Safe\json_decode;

class Test
{
    public function test(): array
    {
        $base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
        $replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

        return \Safe\array_replace_recursive($base, $replacements);
    }

    public function test2() : ?array
    {
        $format = '111';
        $datetime = '123456';
        return date_parse_from_format($format, $datetime);
    }

    public function test3() : mixed
    {
        $json = '{asdfasdfasd';
        return json_decode($json);
    }
}
