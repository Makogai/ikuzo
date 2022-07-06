<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_name;


    public string $instagram;
    public string $facebook;
    public string $youtube;
    public string $apple;
    public string $spotify;
    public string $copyright;

    public bool $site_active;

    public static function group(): string
    {
        return 'general';
    }
}
