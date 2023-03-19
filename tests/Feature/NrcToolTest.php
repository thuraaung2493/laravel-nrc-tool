<?php

use ThuraAung2493\NrcTool\NrcTool;

it('should convert Mm NRC to Formatted Eng NRC', function ($mmNrc, $formattedEngNrc) {
    expect(NrcTool::from($mmNrc)->toEng()->formatted())->toEqual($formattedEngNrc);
})->with('mm-nrcs', 'formatted-eng-nrc')->group('mm-eng', 'formatted');

it('should convert Eng NRC to Formatted Mm NRC', function ($engNrc, $formattedMmNrc) {
    expect(NrcTool::from($engNrc)->toMm()->formatted())->toEqual($formattedMmNrc);
})->with('eng-nrcs', 'formatted-mm-nrc')->group('eng-mm', 'formatted');

it('should convert Mm NRC to Unformatted Eng NRC', function ($mmNrc, $engNrc) {
    expect(NrcTool::from($mmNrc)->toEng()->toString())->toEqual($engNrc);
})->with('nrcs')->group('mm-eng', 'unformatted');

it('should convert Eng NRC to Unformatted Mm NRC', function ($mmNrc, $engNrc) {
    expect(NrcTool::from($engNrc)->toMm()->toString())->toEqual($mmNrc);
})->with('nrcs')->group('eng-mm', 'unformatted');

it('should convert Eng NRC to Formatted Eng NRC', function ($engNrc, $formattedEngNrc) {
    expect(NrcTool::from($engNrc)->toEng()->formatted())->toEqual($formattedEngNrc);
})->with('eng-nrcs', 'formatted-eng-nrc')->group('eng-eng', 'formatted');

it('should convert Mm NRC to Formatted Mm NRC', function ($mmNrc, $formattedMmNrc) {
    expect(NrcTool::from($mmNrc)->toMm()->formatted())->toEqual($formattedMmNrc);
})->with('mm-nrcs', 'formatted-mm-nrc')->group('mm-mm', 'formatted');

it('should convert Eng NRC to Unformatted Eng NRC', function ($mmNrc, $engNrc) {
    expect(NrcTool::from($engNrc)->toEng()->toString())->toEqual($engNrc);
    expect(NrcTool::from($engNrc)->toEng()->toString())->not->toEqual($mmNrc);
})->with('nrcs')->group('eng-eng', 'unformatted');

it('should convert Mm NRC to Unformatted Mm NRC', function ($mmNrc, $engNrc) {
    expect(NrcTool::from($mmNrc)->toMm()->toString())->toEqual($mmNrc);
    expect(NrcTool::from($mmNrc)->toMm()->toString())->not->toEqual($engNrc);
})->with('nrcs')->group('mm-mm', 'unformatted');

it('can convert formatted Mm NRC by strictly', function ($mmNrc, $formattedEngNrc) {
    expect(NrcTool::from($mmNrc)->toEng(strict: true)->formatted())->toEqual($formattedEngNrc);
})->with('mm-nrcs', 'formatted-eng-nrc')->group('formatted', 'strict');

it('can convert formatted Eng NRC by strictly', function ($engNrc, $formattedMmNrc) {
    expect(NrcTool::from($engNrc)->toMm(strict: true)->formatted())->toEqual($formattedMmNrc);
})->with('eng-nrcs', 'formatted-mm-nrc')->group('formatted', 'strict');

it('can convert unformatted Mm NRC to empty string by strictly', function ($unformatedMmNrc) {
    expect(NrcTool::from($unformatedMmNrc)->toEng(strict: true)->formatted())->toBeEmpty();
})->with('unformatted-mm-nrcs')->group('unformatted', 'strict');

it('can convert unformatted Eng NRC to empty string by strictly', function ($unformatedEngNrc) {
    expect(NrcTool::from($unformatedEngNrc)->toMm(strict: true)->formatted())->toBeEmpty();
})->with('unformatted-eng-nrcs')->group('unformatted', 'strict');
