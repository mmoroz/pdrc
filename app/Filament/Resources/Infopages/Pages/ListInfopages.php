<?php

namespace App\Filament\Resources\Infopages\Pages;

use App\Filament\Resources\Infopages\InfopageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInfopages extends ListRecords
{
    protected static string $resource = InfopageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
