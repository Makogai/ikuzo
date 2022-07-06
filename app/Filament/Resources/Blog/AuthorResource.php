<?php

namespace App\Filament\Resources\Blog;

use App\Filament\Resources\Blog\AuthorResource\Pages;
use App\Models\Blog\Author;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class AuthorResource extends Resource
{
    protected static ?string $model = Author::class;

    protected static ?string $slug = 'blog/authors';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Blog';

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required(),
                        Forms\Components\TextInput::make('email')
                            ->required()
                            ->email()
                            ->unique(Author::class, 'email', fn ($record) => $record),
                        Forms\Components\RichEditor::make('bio')
                            ->columnSpan([
                                'sm' => 2,
                            ]),

                        Forms\Components\TextInput::make('instagram_handle')
                            ->label('Instagram'),
                        Forms\Components\TextInput::make('linkedin_handle')
                            ->label('Linkedin'),
                            Forms\Components\FileUpload::make('photo')
                                ->label('Image')
                                ->image(),
                        Forms\Components\Toggle::make('is_core')
                            ->label('Is creator (for about page).')
                            ->default(true),
                    ])
                    ->columns([
                        'sm' => 2,
                    ])
                    ->columnSpan([
                        'sm' => fn (?Author $record) => $record === null ? 3 : 2,
                    ]),
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Placeholder::make('created_at')
                            ->label('Created at')
                            ->content(fn (?Author $record): string => $record ? $record->created_at->diffForHumans() : '-'),
                        Forms\Components\Placeholder::make('updated_at')
                            ->label('Last modified at')
                            ->content(fn (?Author $record): string => $record ? $record->updated_at->diffForHumans() : '-'),
                    ])
                    ->columnSpan(1)
                    ->hidden(fn (?Author $record) => $record === null),
            ])
            ->columns([
                'sm' => 3,
                'lg' => null,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('instagram_handle')
                    ->label('Instagram'),
                Tables\Columns\TextColumn::make('linkedin_handle')
                    ->label('Linkedin'),
            ])
            ->filters([
                //
            ]);
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
            'index' => Pages\ManageAuthors::route('/'),
        ];
    }
}
