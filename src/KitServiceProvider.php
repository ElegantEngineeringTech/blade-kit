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

    /**
     * @source https://github.com/livewire/flux/blob/ca26ab81b07f6f1c9e76cc0f5937f575075fc50c/src/FluxServiceProvider.php#L47
     */
    public function bootFallbackBlazeDirectivesIfBlazeIsNotInstalled()
    {
        Blade::directive('blaze', fn () => '');

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
