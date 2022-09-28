<?php

namespace App\View\Components;

use App\Settings\GeneralSettings;
use Illuminate\View\Component;
use Vedmant\FeedReader\Facades\FeedReader;

class Footer extends Component
{
    public $lastPodcast;
    public $websiteName;
    public $copyright;
    public $facebook;
    public $instagram;
    public $youtube;
    public $spotify;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $f = FeedReader::read('https://anchor.fm/s/6c0cc8f0/podcast/rss');
        $item = $f->get_items()[0];
        $lastPodcast = [];
        $lastPodcast['title'] = $item->get_title();
        $lastPodcast['content'] = strip_tags($item->get_content());
        $lastPodcast['link'] = $item->get_link();
        $lastPodcast['embedLink'] = substr_replace($item->get_link(),'embed/', 34, 0);
        $lastPodcast['date'] = $item->get_date();
        $lastPodcast['image'] = $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'image')[0]['attribs'][""]["href"];
        $lastPodcast['type'] = $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'episodeType')[0]['data'];
        $lastPodcast['season'] = $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'season') ? $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'season')[0]['data'] : '0';
        $seconds = $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'duration')[0]['data'];
        if(!is_string($seconds)){           
                $lastPodcast['duration'] = sprintf('%02d:%02d', ($seconds/ 60 % 60), $seconds% 60);}
                else{
                $lastPodcast['duration'] = $seconds;}
       
 $lastPodcast['episode'] = $lastPodcast['type'] == 'full' ?  $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'episode')[0]['data'] : 'BONUS';
        $this->lastPodcast = $lastPodcast;

        $this->websiteName = app(GeneralSettings::class)->site_name;
        $this->copyright = app(GeneralSettings::class)->copyright;
        $this->facebook = app(GeneralSettings::class)->facebook;
        $this->instagram = app(GeneralSettings::class)->instagram;
        $this->youtube = app(GeneralSettings::class)->youtube;
        $this->spotify = app(GeneralSettings::class)->spotify;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
