<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Spatie');
        $this->migrator->add('general.site_active', true);
        $this->migrator->add('general.instagram', 'ikuzounscripted');
        $this->migrator->add('general.facebook', 'ikuzounscripted');
        $this->migrator->add('general.youtube', 'ikuzounscripted');
        $this->migrator->add('general.spotify', 'ikuzounscripted');
        $this->migrator->add('general.apple', 'ikuzounscripted');
        $this->migrator->add('general.copyright', 'ikuzounscripted');
    }
}
