<?php

namespace App\Filament\Pages;

use App\Settings\FooterSettings;
use App\Settings\GeneralSettings;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;

class ManageSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = GeneralSettings::class;
    protected static ?string $navigationGroup = 'Settings';
    protected function getFormSchema(): array
    {
        return [
            TextInput::make('site_name')
                ->label('Website name')
                ->required(),
            TextInput::make('video_episodes')
                ->label('Video Episodes')
                ->required(),
            TextInput::make('total_guests')
                ->label('Total Guests')
                ->required(),
            TextInput::make('instagram')
                ->label('Instagram url')
                ->required(),
            TextInput::make('facebook')
                ->label('Facebook url')
                ->required(),
            TextInput::make('youtube')
                ->label('Youtube url')
                ->required(),
            TextInput::make('apple')
                ->label('Apple url')
                ->required(),
            TextInput::make('spotify')
                ->label('Spotify url')
                ->required(),
            RichEditor::make('copyright')
                ->label('Footer copyright')
                ->toolbarButtons([
                    'link',
                    'bold',
                    'italic'
                ])
                ->required(),
            RichEditor::make('about_podcast')
                ->label('About podcast')
                ->toolbarButtons([
                    'link',
                    'bold',
                    'italic',
                    'image'
                ])
                ->required(),
            Toggle::make('site_active')->label('Active')->default(true)->inline(),
        ];
    }
}
