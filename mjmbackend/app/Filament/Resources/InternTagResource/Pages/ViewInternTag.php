<?php

namespace App\Filament\Resources\InternTagResource\Pages;

use App\Filament\Resources\InternTagResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInternTag extends ViewRecord
{
    protected static string $resource = InternTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
