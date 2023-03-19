<?php

namespace ThuraAung2493\NrcTool\Http\Livewire\Traits;

trait ForwardsAttributes
{
    public $attributes = [
        'stateAttrs' => '',
        'townshipAttrs' => '',
        'typeAttrs' => '',
        'registerNoAttrs' => '',
    ];

    public function mount($attrs)
    {
        $this->mapAttributes($attrs);
    }

    public function mapAttributes(...$attrs)
    {
        collect(...$attrs)->map(function ($value, $key) {
            $attributes = '';

            collect($value)->each(function ($value, $attr) use (&$attributes) {
                $attributes .= " {$attr}=\"{$value}\"";
            });

            $this->attributes[$key] = $attributes;
        });
    }
}
