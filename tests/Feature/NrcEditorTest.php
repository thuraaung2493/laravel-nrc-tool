<?php

use ThuraAung2493\NrcTool\Config\NrcConfig;
use ThuraAung2493\NrcTool\Enum\Type;
use ThuraAung2493\NrcTool\Http\Livewire\NrcEditor;
use function Pest\Livewire\livewire;

it('can build component', function () {
    $component = livewire(NrcEditor::class);

    expect($component)->not->toBeNull();
});

it('can render a correct view', function () {
    livewire(NrcEditor::class)->assertViewIs('nrc-tool::nrc-editor');
});

it('has initial data correctly', function () {
    livewire(NrcEditor::class)
        ->assertSet('lang', Type::Mm);

    livewire(NrcEditor::class)
        ->assertSet('states', NrcConfig::getStatesAndDivisions(Type::Mm));

    livewire(NrcEditor::class)
        ->assertSet('townships', collect());

    livewire(NrcEditor::class)
        ->assertSee('နိုင်', 'ပြု');
})->group('initial');

it('has data passed correctly', function () {
    livewire(NrcEditor::class, ['lang' => 'eng'])
        ->assertSet('lang', Type::Eng)
        ->assertSet('states', NrcConfig::getStatesAndDivisions(Type::Eng))
        ->assertSet('types', NrcConfig::getTypes(Type::Eng))
        ->assertSee(...NrcConfig::getStatesAndDivisions(Type::Eng)->values()->toArray())
        ->assertSee('Naing', 'Pyu', 'N', 'P');

    livewire(NrcEditor::class, ['lang' => 'mm'])
        ->assertSet('lang', Type::Mm)
        ->assertSet('states', NrcConfig::getStatesAndDivisions(Type::Mm))
        ->assertSet('types', NrcConfig::getTypes(Type::Mm))
        ->assertSee(...NrcConfig::getStatesAndDivisions(Type::Mm)->values()->toArray())
        ->assertSee('နိုင်', 'ပြု');
})->group('data-passed');

it('should change townships data when state was changed', function () {
    livewire(NrcEditor::class)
        ->set('state', '၁')
        ->call('changeState')
        ->assertSee('(ဗမန)ဗန်းမော်မြို့နယ်');

    livewire(NrcEditor::class, ['lang' => 'eng'])
        ->set('state', '1')
        ->call('changeState')
        ->assertSee('(BaMaNa)Banmaw Township');
})->group('changeState');

it('should change numbers eng to mm when lang is mm', function () {
    livewire(NrcEditor::class, ['lang' => 'mm'])
        ->set('registerNo', '123456')
        ->call('changeNumber')
        ->assertSet('registerNo', '၁၂၃၄၅၆');

    livewire(NrcEditor::class)
        ->set('registerNo', '123456')
        ->call('changeNumber')
        ->assertSet('registerNo', '၁၂၃၄၅၆');
})->group('registerNo');

it('should change mm numbers to eng numbers when lang is eng', function () {
    livewire(NrcEditor::class, ['lang' => 'eng'])
        ->set('registerNo', '၁၂၃၄၅၆')
        ->call('changeNumber')
        ->assertSet('registerNo', '123456');
})->group('registerNo');
