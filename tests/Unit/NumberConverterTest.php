<?php

use ThuraAung2493\NrcTool\Config\ConvertOption;
use ThuraAung2493\NrcTool\Utils\NumberConverter;

it('can convert eng number to mm number', function () {
    $option = ConvertOption::engToMm();

    $result = NumberConverter::convert('12345', $option);

    expect($result)->toEqual('၁၂၃၄၅');
});

it('can convert mm number to eng number', function () {
    $option = ConvertOption::mmToEng();

    $result = NumberConverter::convert('၁၂၃၄၅', $option);

    expect($result)->toEqual('12345');
});

it('should return original number with wrong option', function () {
    $mmToEng = ConvertOption::mmToEng();
    $engToMm = ConvertOption::engToMm();

    expect(NumberConverter::convert('12345', $mmToEng))->toEqual('12345');
    expect(NumberConverter::convert('၁၂၃၄၅', $engToMm))->toEqual('၁၂၃၄၅');
});
