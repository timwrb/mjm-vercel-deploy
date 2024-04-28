<?php

namespace App\Filament\Resources\InternTagResource\Pages;

use App\Filament\Resources\InternTagResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInternTags extends ListRecords
{
    protected static string $resource = InternTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
