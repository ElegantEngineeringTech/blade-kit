<?php

namespace Elegantly\Kit;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class KitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('blade-kit')
            ->hasConfigFile()
            ->hasViews('kit');
    }

    public function bootingPackage(): void
    {
        $this->bootFallbackBlazeDirectivesIfBlazeIsNotInstalled();
    }

    /**
     * @source https://github.com/livewire/blaze/blob/main/src/BlazeServiceProvider.php
     */
    public function bootFallbackBlazeDirectivesIfBlazeIsNotInstalled(): void
    {
        Blade::directive('blaze', function () {
            return '';
        });

        Blade::directive('unblaze', function ($expression) {
            return ''
                .'<'.'?php $__getScope = fn($scope = []) => $scope; ?>'
                .'<'.'?php if (isset($scope)) $__scope = $scope; ?>'
                .'<'.'?php $scope = $__getScope('.$expression.'); ?>';
        });

        Blade::directive('endunblaze', function () {
            return '<'.'?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>';
        });
    }
}
