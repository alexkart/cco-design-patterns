<?php

namespace Strategy\App\Config\Parser;

use Strategy\App\Config\Contracts\ParserInterface;

class JsonParser implements ParserInterface
{
    public function parse($file)
    {
        return json_decode(file_get_contents($file), true);
    }
}
