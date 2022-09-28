<?php

namespace App\View\Components;

use App\Settings\GeneralSettings;
use Illuminate\View\Component;

class ContentLayout extends Component
{
    public $websiteName;
    public $copyright;
    public $facebook;
    public $instagram;
    public $youtube;
    public $spotify;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = '')
    {
        $this->websiteName = app(GeneralSettings::class)->site_name;
        $this->copyright = app(GeneralSettings::class)->copyright;
        $this->facebook = app(GeneralSettings::class)->facebook;
        $this->instagram = app(GeneralSettings::class)->instagram;
        $this->youtube = app(GeneralSettings::class)->youtube;
        $this->spotify = app(GeneralSettings::class)->spotify;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.content');
    }
}
