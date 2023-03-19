<?php

use ThuraAung2493\NrcTool\Facades\NrcTool;
use ThuraAung2493\NrcTool\Models\Nrc;

if (!function_exists('nrcConvertToEng')) {
    /**
     * Convert Nrc from mm to eng.
     *
     * @param string $nrc
     * @return string
     */
    function nrcConvertToEng(string $nrc): string
    {
        return NrcTool::from($nrc)->toEng()->toString();
    }
}

if (!function_exists('nrcConvertToMm')) {
    /**
     * Convert Nrc from eng to mm.
     */
    function nrcConvertToMm(string $nrc): string
    {
        return NrcTool::from($nrc)->toMm()->toString();
    }
}

if (!function_exists('isMmNrc')) {
    /**
     * Check nrc is mm nrc.
     *
     * @param string $nrc
     * @return bool
     */
    function isMmNrc(string $nrc): string
    {
        return NrcTool::from($nrc)->isMm();
    }
}

if (!function_exists('isEngNrc')) {
    /**
     * Check nrc is eng nrc.
     *
     * @param string $nrc
     * @return bool
     */
    function isEngNrc(string $nrc): bool
    {
        return NrcTool::from($nrc)->isEng();
    }
}

if (!function_exists('toNrc')) {
    /**
     * Change Nrc string to instance.
     *
     * @param string $nrc
     * @return \ThuraAung2493\NrcTool\Models\Nrc
     */
    function toNrc(string $nrc): Nrc
    {
        return NrcTool::from($nrc)->toInstance();
    }
}

if (!function_exists('checkNrcFormat')) {
    /**
     * Check nrc format is valid.
     *
     * @param string $nrc
     * @return bool
     */
    function checkNrcFormat(string $nrc): bool
    {
        return NrcTool::from($nrc)->isValid();
    }
}

if (!function_exists('formatNrc')) {
    /**
     * Format NRC.
     *
     * @param string $nrc
     * @return string
     */
    function formatNrc(string $nrc): string
    {
        return NrcTool::from($nrc)->toInstance()->formatted();
    }
}
