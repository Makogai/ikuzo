<?php

namespace App\Http\Controllers;

use App\Spiders\IkuzoInstagramSpider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use RoachPHP\Roach;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
      //its just a dummy data object.
//      $instagramLatest = Roach::collectSpider(IkuzoInstagramSpider::class);


      // Sharing is caring
//      View::share('user', $instagramLatest);
    }
}
