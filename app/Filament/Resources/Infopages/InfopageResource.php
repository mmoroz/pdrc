<?php

namespace App\Filament\Resources\Infopages;

use App\Filament\Resources\Infopages\Pages\CreateInfopage;
use App\Filament\Resources\Infopages\Pages\EditInfopage;
use App\Filament\Resources\Infopages\Pages\ListInfopages;
use App\Filament\Resources\Infopages\Schemas\InfopageForm;
use App\Filament\Resources\Infopages\Tables\InfopagesTable;
use App\Models\Infopage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InfopageResource extends Resource
{
    protected static ?string $model = Infopage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Infopage';

    protected static ?string $label = 'инфостраницу';
    protected static ?string $pluralLabel = 'Инфостраницы';
    protected static bool $hasTitleCaseModelLabel = false;
    protected static ?string $navigationLabel = 'Инфостраницы';


    public static function form(Schema $schema): Schema
    {
        return InfopageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InfopagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListInfopages::route('/'),
            'create' => CreateInfopage::route('/create'),
            'edit' => EditInfopage::route('/{record}/edit'),
        ];
    }
}
