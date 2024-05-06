<?php

namespace App\Filament\Dashboard\Resources\InternPostResource\Pages;

use App\Filament\Dashboard\Resources\InternPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInternPost extends EditRecord
{
    protected static string $resource = InternPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
