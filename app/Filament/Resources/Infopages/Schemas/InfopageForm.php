<?php

namespace App\Filament\Resources\Infopages\Schemas;

use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Illuminate\Support\Str;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;

class InfopageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Основная информация')
                    ->description('Не изменяйте поле Slug после создания страницы!')
                    ->schema([
                        TextInput::make('title')
                            ->label('Заголовок')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                if (($get('slug') ?? '') !== Str::slug($old)) {
                                    return;
                                }

                                $set('slug', Str::slug($state));
                            }),
                        TextInput::make('subtitle')->label('Подзаголовок'),
                        TextInput::make('slug')
                            ->required()
                            ->helperText('Slug заполняется автоматически на основании поля "Заголовок"')
                            ->columnSpanFull(),
                        Toggle::make('published')
                            ->label('Опубликовано')
                            ->required(),
                        Toggle::make('is_form')
                            ->label('Подключить форму?')
                            ->required(),
                    ])->columnSpanFull()->columns(2),

                Section::make('Информационные блоки')->schema([
                    Builder::make('content')
                        ->label('Блоки')
                        ->blocks([
                            Block::make('Editor')
                                ->label('Редактор')
                                ->schema([
                                    TextInput::make('editor_title')->label('Заголовок')->required(),
                                    TextInput::make('editor_subtitle')->label('Подзаголовок'),
                                    RichEditor::make('editor_text')
                                        ->toolbarButtons([
                                            ['undo', 'redo'],
                                            ['clearFormatting', 'horizontalRule', 'textColor', 'code'],
                                            ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                                            ['h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd'],
                                            ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                            ['table', 'attachFiles'],
                                        ])
                                        ->fileAttachmentsDisk('public_uploads')
                                        ->fileAttachmentsDirectory('attachments')
                                        ->label('Текст')
                                        ->columnSpanFull(),
                                ])
                                ->columns(2),
                        ])
                ])->columnSpanFull(),
            ]);
    }
}
