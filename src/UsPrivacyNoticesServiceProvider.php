<?php

namespace JeffersonGoncalves\Filament\UsPrivacyNotices;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class UsPrivacyNoticesServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-us-privacy-notices';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
