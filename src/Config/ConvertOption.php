<?php

namespace ThuraAung2493\NrcTool\Config;

use ThuraAung2493\NrcTool\Enum\Type;

class ConvertOption
{
    public Type $from;
    public Type $to;
    public bool $strict;

    public function __construct(Type $from, Type $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function setStrict(bool $strict): self
    {
        $this->strict = $strict;

        return $this;
    }

    public static function from(Type $from)
    {
        return $from->match(Type::Mm) ? static::mmToEng() : static::engToMm();
    }

    public static function to(Type $to)
    {
        return $to->match(Type::Mm) ? static::engToMm() : static::mmToEng();
    }

    public static function mmToEng(): self
    {
        return new ConvertOption(Type::Mm, Type::Eng);
    }

    public static function engToMm(): self
    {
        return new ConvertOption(Type::Eng, Type::Mm);
    }
}
