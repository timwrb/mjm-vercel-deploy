<?php

namespace App\Filament\Resources\InternPostResource\Pages;

use App\Filament\Resources\InternPostResource;
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
