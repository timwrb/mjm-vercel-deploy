<?php

namespace App\Filament\Dashboard\Pages;

use Filament\Pages\Page;

class Pricing extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static ?string $navigationLabel = 'Preise';

    protected static string $view = 'filament.dashboard.pages.pricing';

}
