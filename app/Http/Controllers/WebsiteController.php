<?php

namespace App\Http\Controllers;

use App\HtmlDom\HtmlDom;
use App\Models\Blog\Post;
use Illuminate\Http\Request;
use Vedmant\FeedReader\Facades\FeedReader;
class WebsiteController extends Controller
{
    public function index(){
        $f = FeedReader::read('https://anchor.fm/s/6c0cc8f0/podcast/rss');
        $items = [];
        foreach ($f->get_items() as $item)
        {
            $newItem = [];
            $newItem['title'] = $item->get_title();
            $newItem['content'] = strip_tags($item->get_content());
            $newItem['link'] = $item->get_link();
            $newItem['embedLink'] = substr_replace($item->get_link(),'embed/', 34, 0);
            $newItem['date'] = $item->get_date();
            $newItem['image'] = $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'image')[0]['attribs'][""]["href"];
            $newItem['type'] = $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'episodeType')[0]['data'];
            $newItem['season'] = $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'season') ? $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'season')[0]['data'] : '0';
            $seconds = $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'duration')[0]['data'];
            $newItem['duration'] = sprintf('%02d:%02d', ($seconds/ 60 % 60), $seconds% 60);;
            $newItem['episode'] = $newItem['type'] == 'full' ?  $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'episode')[0]['data'] : 'BONUS';

            $items[] = $newItem;
        }
        $data = [
            'items' => array_slice($items, 0, 3),
            'posts' => Post::query()->take(2)->with(['author', 'category'])->get()
        ];
        return view('welcome', $data);
    }
}
