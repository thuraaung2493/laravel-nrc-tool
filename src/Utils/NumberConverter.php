<?php

namespace ThuraAung2493\NrcTool\Utils;

use ThuraAung2493\NrcTool\Config\ConvertOption;
use ThuraAung2493\NrcTool\Config\NrcConfig;

class NumberConverter
{
    public static function convert(string $number, ConvertOption $option): string
    {
        return collect(mb_str_split($number))->map(
            fn ($n) => Utils::transform(NrcConfig::getNumbers(), $n, $option)
        )->join('');
    }
}
