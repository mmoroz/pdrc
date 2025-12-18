<?php

namespace App\Filament\Resources\Infopages\Pages;

use App\Filament\Resources\Infopages\InfopageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateInfopage extends CreateRecord
{
    protected static string $resource = InfopageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
