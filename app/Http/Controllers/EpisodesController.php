<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vedmant\FeedReader\Facades\FeedReader;

class EpisodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
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
sscanf($seconds, "%d:%d:%d", $hhours, $mminutes, $sseconds);

$seconds = isset($sseconds) ? $hhours * 3600 + $mminutes * 60 + $sseconds : $hhours * 60 + $mminutes;
            $newItem['duration'] = sprintf('%02d:%02d', ($seconds/ 60 % 60), $seconds% 60);;
            $newItem['episode'] = $newItem['type'] == 'full' ?  $item->get_item_tags(SIMPLEPIE_NAMESPACE_ITUNES, 'episode')[0]['data'] : 'BONUS';

            $items[] = $newItem;
        }
        $offset = $request->page ? $request->page * 5 : 0;
        $data = [
            'items' => array_slice($items, $offset, 5),
            'pagination' => [
                'pages' => count($items)/5,
                'active' => $request->page ?? 1
            ]
        ];
        return view('episodes', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
