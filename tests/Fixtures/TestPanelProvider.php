<?php

namespace JeffersonGoncalves\Filament\UsPrivacyNotices\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\UsPrivacyNotices\UsPrivacyNoticesPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                UsPrivacyNoticesPlugin::make(),
            ]);
    }
}
