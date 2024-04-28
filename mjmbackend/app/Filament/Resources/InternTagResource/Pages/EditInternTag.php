<?php

namespace App\Filament\Resources\InternTagResource\Pages;

use App\Filament\Resources\InternTagResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInternTag extends EditRecord
{
    protected static string $resource = InternTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
