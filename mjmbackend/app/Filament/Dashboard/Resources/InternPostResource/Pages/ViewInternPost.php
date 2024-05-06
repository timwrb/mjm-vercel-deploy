<?php

namespace App\Filament\Dashboard\Resources\InternPostResource\Pages;

use App\Filament\Dashboard\Resources\InternPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInternPost extends ViewRecord
{
    protected static string $resource = InternPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
