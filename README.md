# Myanmar NRC Tool for Laravel

**It supports Laravel 8+ and PHP 8.0+**

-   [Myanmar NRC Tool for Laravel](#myanmar-nrc-tool-for-laravel)
    -   [Installation](#installation)
        -   [Laravel](#laravel)
        -   [Configuration](#configuration)
    -   [Usage](#usage)
        -   [Instance Methods](#instance-methods)
        -   [Helper Functions](#helper-functions)
    -   [Convert NRC](#convert-nrc)
        -   [Convert ENG to MM](#convert-eng-to-mm)
        -   [Convert MM to ENG](#convert-mm-to-eng)
        -   [Convert String to NRC Instance](#convert-string-to-nrc-instance)
    -   [Check NRC](#check-nrc)
        -   [Is NRC Format Valid](#is-nrc-format-valid)
        -   [Is MM NRC Format](#is-mm-nrc-format)
        -   [Is ENG NRC Format](#is-eng-nrc-format)
    -   [NRC Editor](#nrc-editor)
    -   [Test](#test)
    -   [License](#license)

## Installation

### Laravel

Require this package with composer using the following command:

```bash
  composer require thuraaung2493/laravel-nrc-tool
```

### Configuration

The defaults are set in config/nrc-tool.php and config/divisions.php. Publish the config to copy those files to your own config:

```bash
  php artisan vendor:publish --tag="nrc-tool-config"
```

## Usage

### Instance Methods

```php
  use ThuraAung2493\NrcTool\NrcTool;

  $mmNrc = '၈/မမန(နိုင်)၄၃၉၀၄၂';
  $engNrc = '8/MaMaNa(Naing)439042';

  /** @return ThuraAung2493\NrcTool\Models\Nrc */
  NrcTool::from($mmNrc)->toEng();
  NrcTool::from($engNrc)->toMm();
```

### Helper Functions

```php
  nrcConvertToEng('၈/မမန(နိုင်)၄၃၉၀၄၂') // '8/MaMaNa(Naing)439042'
  nrcConvertToMm('8/MaMaNa(Naing)439042') // '၈/မမန(နိုင်)၄၃၉၀၄၂'
```

## Convert NRC

### Convert ENG to MM

```php
  /** @return ThuraAung2493\NrcTool\Models\Nrc */
  NrcTool::from($mmNrc)->toEng(strict: false);
  nrcConvertToMm('8/MaMaNa(Naing)439042') // '၈/မမန(နိုင်)၄၃၉၀၄၂
```

### Convert MM to ENG

```php
  /** @return ThuraAung2493\NrcTool\Models\Nrc */
  NrcTool::from($engNrc)->toMm(strict: false);
  nrcConvertToEng('၈/မမန(နိုင်)၄၃၉၀၄၂') // '8/MaMaNa(Naing)439042'
```

### Convert String to NRC Instance

```php
  /** @return ThuraAung2493\NrcTool\Models\Nrc */
  NrcTool::from('၈/မမန(နိုင်)၄၃၉၀၄၂')->toInstance();
  toNrc('၈/မမန(နိုင်)၄၃၉၀၄၂');
```

## Check NRC

### Is NRC Format Valid

```php
  /** @return bool */
  NrcTool::from($mmNrc)->isValid();
  checkNrcFormat($mmNrc);
```

### Is MM NRC Format

```php
  /** @return bool */
  NrcTool::from($mmNrc)->isMm() // true;
  isMmNrc($mmNrc) // true
```

### Is ENG NRC Format

```php
  /** @return bool */
  NrcTool::from($engNrc)->isEng(); // true
  isEngNrc($engNrc) // true
```

## NRC Editor

```php
  <livewire:nrc-editor lang="mm" :attrs="[
      'stateAttrs' => [
          'class' => 'w-full h-screen mt-1',
          'style' => 'color: red;',
      ],
      'townshipAttrs' => [
          'class' => 'w-full h-screen mt-1',
          'style' => 'color: red;',
      ],
      'typeAttrs' => [
          'class' => 'w-full h-screen mt-1',
          'style' => 'color: red;',
      ],
  ]" />

  <livewire:nrc-editor lang="eng" />
```

## Test

```bash
  composer test
```

## License

This Laravel NRC tool for Myanmar is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
