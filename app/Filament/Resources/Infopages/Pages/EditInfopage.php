<?php

namespace App\Filament\Resources\Infopages\Pages;

use App\Filament\Resources\Infopages\InfopageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInfopage extends EditRecord
{
    protected static string $resource = InfopageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
