<?php

namespace App\Filament\Resources\InternPostResource\Pages;

use App\Filament\Resources\InternPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInternPosts extends ListRecords
{
    protected static string $resource = InternPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
