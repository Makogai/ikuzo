<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\Mail\NewsletterSubscribedMail;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function store(NewsletterRequest $request)
    {
        if (Newsletter::query()->where('email', $request->validated()['email'])->first() == null) {

            $nl = Newsletter::query()->create($request->validated());

            Mail::to($nl->email)->queue(new NewsletterSubscribedMail($nl));


            return redirect()->back()->with([
                'message' => "Subscribed"
            ]);
        }else {
            return redirect()->back()->withErrors(['msg' => "You're already subscribed!"]);
        }
    }

    public function unsubscribe(Request $request)
    {
        dd($request->all());
    }
}
