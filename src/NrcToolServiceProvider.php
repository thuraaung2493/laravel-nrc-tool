<?php

namespace ThuraAung2493\NrcTool;

use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ThuraAung2493\NrcTool\Http\Livewire\NrcEditor;

class NrcToolServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-nrc-tool')
            ->hasConfigFile(['nrc-tool', 'divisions'])
            ->hasViews();
    }

    public function bootingPackage()
    {
        Livewire::component('nrc-editor', NrcEditor::class);
    }
}
