<?php

namespace ThuraAung2493\NrcTool\Models;

use ThuraAung2493\NrcTool\Config\NrcConfig;
use ThuraAung2493\NrcTool\Enum\Type;
use Illuminate\Support\Collection;

class Nrc
{
    /**
     * NRC - origin, stateNo, delimiters, district, type, register no.
     *
     * @var \Illuminate\Support\Collection
     */
    private Collection $value;

    /**
     * Current NRC language (mm or eng).
     *
     * @var \ThuraAung2493\NrcTool\Enum\Type|null
     */
    private ?Type $lang;

    /**
     * Create NRC.
     *
     * @param \Illuminate\Support\Collection $value
     * @return void
     */
    public function __construct(Collection $value)
    {
        if ($value->count() === $this->getKeys()->count()) {
            $this->value = $this->getKeys()->combine($value);
        } else {
            $this->value = $value;
        }
    }

    /**
     * Get NRC keys of value.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getKeys()
    {
        return collect([
            'origin',
            'stateNo',
            'stateDelimiter',
            'district',
            'districtDelimiter',
            'type',
            'typeDelimiter',
            'registerNo',
        ]);
    }

    /**
     * Create NRC with value.
     *
     * @param array $value
     * @return \ThuraAung2493\NrcTool\Models\Nrc
     */
    public static function from(array $value)
    {
        return new static(collect($value));
    }

    /**
     * Set current NRC language.
     *
     * @param \ThuraAung2493\NrcTool\Enum\Type $lang
     * @return \ThuraAung2493\NrcTool\Models\Nrc
     */
    public function setLang(Type $lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get current NRC language.
     *
     * @return \ThuraAung2493\NrcTool\Enum\Type
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Get state.
     *
     * @return string
     */
    public function getState()
    {
        return NrcConfig::getStatesAndDivisions(stateNo: $this->value->stateNo);
    }

    /**
     * Get NRC string.
     *
     * @return string
     */
    public function toString()
    {
        return $this->value->skip(1)->implode('');
    }

    /**
     * Get NRC string.
     *
     * @return string
     */
    public function formatted()
    {
        $this->setDefaultDelimiter();

        return $this->toString();
    }

    /**
     * Set default delimiter
     *
     * @return void
     */
    private function setDefaultDelimiter()
    {
        NrcConfig::getDelimiter()->each(fn ($value, $key) => $this->{$key} = $value);
    }

    /**
     * Set property.
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        if ($this->value->has($name)) {
            $this->value->put($name, $value);
        }
    }

    /**
     * Get property.
     *
     * @param string $name
     * @return string
     */
    public function __get($name)
    {
        if ($this->value->has($name)) {
            return $this->value->get($name);
        }
    }
}
