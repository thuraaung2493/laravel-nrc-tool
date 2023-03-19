<?php

namespace ThuraAung2493\NrcTool\Http\Livewire;

use ThuraAung2493\NrcTool\Config\ConvertOption;
use ThuraAung2493\NrcTool\Config\NrcConfig;
use ThuraAung2493\NrcTool\Enum\Type;
use ThuraAung2493\NrcTool\Http\Livewire\Traits\ForwardsAttributes;
use ThuraAung2493\NrcTool\Utils\NumberConverter;
use Illuminate\Support\Collection;
use Livewire\Component;

class NrcEditor extends Component
{
    use ForwardsAttributes;

    public string|Type $lang;

    public Collection $states;
    public string $state = '';

    public Collection $townships;
    public string $township = '';

    public Collection $types;
    public string $type = '';

    public string $registerNo = '';

    public function mount($lang = 'mm', ...$attrs)
    {
        $this->lang = Type::from($lang);
        $this->states = NrcConfig::getStatesAndDivisions($this->lang);
        $this->townships = collect();
        $this->types = NrcConfig::getTypes($this->lang);
        $this->mapAttributes(...$attrs);
    }

    public function changeState()
    {
        $this->townships = NrcConfig::getTownships($this->state);
    }

    public function changeNumber()
    {
        $this->registerNo = NumberConverter::convert(
            $this->registerNo,
            ConvertOption::to($this->lang)
        );
    }

    public function render()
    {
        return view('nrc-tool::nrc-editor');
    }
}
