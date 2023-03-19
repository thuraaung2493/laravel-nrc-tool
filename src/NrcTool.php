<?php

namespace ThuraAung2493\NrcTool;

use Illuminate\Support\Collection;
use ThuraAung2493\NrcTool\Config\ConvertOption;
use ThuraAung2493\NrcTool\Config\NrcConfig;
use ThuraAung2493\NrcTool\Enum\Type;
use ThuraAung2493\NrcTool\Models\Nrc;
use ThuraAung2493\NrcTool\Utils\NumberConverter;
use ThuraAung2493\NrcTool\Utils\Utils;

class NrcTool
{
    /**
     * Original NRC String.
     *
     * @var string
     */
    private string $nrc;

    /**
     * The districts sources.
     *
     * @var \Illuminate\Support\Collection
     */
    private Collection $districts;

    /**
     * The NRC type sources.
     *
     * @var \Illuminate\Support\Collection
     */
    private Collection $types;

    /**
     * Create a NrcTool instance.
     *
     * @return void
     */
    public function __construct(string $nrc)
    {
        $this->nrc = $nrc;

        $this->init();
    }

    /**
     * Initialize configs.
     *
     * @return void
     */
    private function init()
    {
        $this->districts = NrcConfig::getTownshipsPairs();
        $this->types = NrcConfig::getTypes();
    }

    /**
     * Get instance of NrcTool.
     *
     * @param string $nrc
     * @return \ThuraAung2493\NrcTool\NrcTool
     */
    public static function from(string $nrc): self
    {
        return new static($nrc);
    }

    /**
     * Convert NRC from Mm to Eng.
     *
     * @param bool $strict
     * @return \ThuraAung2493\NrcTool\Models\Nrc
     */
    public function toEng(bool $strict = false): Nrc
    {
        $option = NrcConfig::getConvertOption(Type::Mm, $strict);

        return $this->handleConvertException($option);
    }

    /**
     * Convert NRC from Eng to Mm.
     *
     * @param bool $strict
     * @return \ThuraAung2493\NrcTool\Models\Nrc
     */
    public function toMm(bool $strict = false): Nrc
    {
        $option = NrcConfig::getConvertOption(Type::Eng, $strict);

        return $this->handleConvertException($option);
    }

    /**
     * Check Nrc is english nrc.
     *
     * @return bool
     */
    public function isEng(): bool
    {
        return $this->checkValid(
            $this->getPattern(NrcConfig::getConvertOption(Type::Eng, true))
        );
    }

    /**
     * Check Nrc is myanmar nrc.
     *
     * @return bool
     */
    public function isMm(): bool
    {
        return $this->checkValid(
            $this->getPattern(NrcConfig::getConvertOption(Type::Mm, true))
        );
    }

    /**
     * Check Nrc format is valid.
     *
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->checkValid(
            NrcConfig::getPattern(Type::All)
        );
    }

    /**
     * Change Nrc string to Nrc instance.
     *
     * @param ConvertOption|null $option
     * @param bool $strict
     * @return \ThuraAung2493\NrcTool\Models\Nrc
     */
    public function toInstance(?ConvertOption $option = null, ?bool $strict = false): Nrc
    {
        if (!isset($option)) {
            $option = $this->isEng() ? ConvertOption::engToMm() : ConvertOption::mmToEng();
        }

        preg_match($this->getPattern($option->setStrict($strict)), $this->nrc, $matches);

        return Nrc::from($matches)->setLang($option->from);
    }

    /**
     * Handle convert exception.
     *
     * @param \ThuraAung2493\NrcTool\Config\ConvertOption $option
     * @return \ThuraAung2493\NrcTool\Models\Nrc
     */
    private function handleConvertException($option): Nrc
    {
        if (!$this->checkValid($this->getPattern($option))) {
            return Nrc::from(['origin' => $this->nrc])->setLang($option->from);
        }

        return $this->convert(
            $this->toInstance($option),
            $option,
        );
    }

    /**
     * Convert NRC.
     *
     * @param \ThuraAung2493\NrcTool\Models\Nrc $nrc
     * @param \ThuraAung2493\NrcTool\Config\ConvertOption $option
     * @return \ThuraAung2493\NrcTool\Models\Nrc
     */
    private function convert(Nrc $nrc, ConvertOption $option): Nrc
    {
        $nrc->stateNo = NumberConverter::convert($nrc->stateNo, $option);
        $nrc->district = Utils::transform($this->districts, $nrc->district, $option);
        $nrc->type = Utils::transform($this->types, $nrc->type, $option);
        $nrc->registerNo = NumberConverter::convert($nrc->registerNo, $option);

        return $nrc->setLang($option->to);
    }

    /**
     * Check Nrc format is valid.
     *
     * @param string $pattern
     * @return bool
     */
    private function checkValid(string $pattern): bool
    {
        return preg_match($pattern, $this->nrc);
    }

    /**
     * Get regex pattern by convert option.
     *
     * @param \ThuraAung2493\NrcTool\Config\ConvertOption $option
     * @return string
     */
    private function getPattern(ConvertOption $option): string
    {
        return NrcConfig::getPattern($option->strict ? $option->from : Type::All);
    }
}
