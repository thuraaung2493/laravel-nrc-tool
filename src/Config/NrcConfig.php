<?php

namespace ThuraAung2493\NrcTool\Config;

use ThuraAung2493\NrcTool\Enum\Type;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class NrcConfig
{
    static $configFileName = 'nrc-tool';

    public static function getPattern(Type $type)
    {
        return \config("nrc-tool.patterns.{$type->value}");
    }

    public static function getConvertOption(Type $from, ?bool $strict = false): ConvertOption
    {
        if ($from->match(Type::Mm)) {
            return ConvertOption::mmToEng()->setStrict($strict);
        }

        return ConvertOption::engToMm()->setStrict($strict);
    }

    public static function getNumbers(): Collection
    {
        return collect(\config('nrc-tool.numbers'));
    }

    public static function getTownshipsPairs(): Collection
    {
        return collect(\config('nrc-tool.townships_pairs'));
    }

    public static function getTypes(Type $type = null): Collection
    {
        $config = collect(\config("nrc-tool.types"));

        if (isset($type)) {
            return $config->pluck($type->value)->unique();
        }

        return $config;
    }

    public static function getDelimiter(): Collection
    {
        return collect(\config('nrc-tool.default-delimiter'));
    }

    public static function getStatesAndDivisions(
        Type $type = Type::Mm,
        string $stateNo = null
    ): Collection|string {
        $statesAndDivisions = collect(\config("divisions.states_and_divisions.{$type->value}"));

        if (isset($stateNo)) {
            return $statesAndDivisions->get($stateNo);
        }

        return $statesAndDivisions;
    }

    public static function getTownships(string $stateNo = null): Collection
    {
        if (is_null($stateNo)) {
            return collect(\config("divisions.townships"));
        }
        return collect(\config("divisions.townships.{$stateNo}"));
    }
}
