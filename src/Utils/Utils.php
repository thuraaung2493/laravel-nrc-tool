<?php

namespace ThuraAung2493\NrcTool\Utils;

use ThuraAung2493\NrcTool\Config\ConvertOption;
use Illuminate\Support\Collection;

class Utils
{
    public static function transform(
        Collection $source,
        string $value,
        ConvertOption $option
    ): string {
        $findArr = $source->firstWhere($option->from->value, $value);

        return $findArr ? $findArr[$option->to->value] : $value;
    }
}
