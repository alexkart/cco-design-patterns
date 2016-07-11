<?php

namespace Strategy\App\Config\Parser;

use Strategy\App\Config\Contracts\ParserInterface;

class ArrayParser implements ParserInterface
{
    public function parse($file)
    {
        return require $file;
    }
}
