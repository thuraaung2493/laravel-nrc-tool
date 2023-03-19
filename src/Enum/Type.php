<?php

namespace ThuraAung2493\NrcTool\Enum;

enum Type: string
{
    case All = "all";
    case Mm = "mm";
    case Eng = "eng";

    public function match(self $type): bool
    {
        return $this === $type;
    }
}
