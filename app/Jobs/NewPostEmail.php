<?php

namespace App\Jobs;

use App\Models\Blog\Post;
use App\Models\Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewPostEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public Post $post;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = Newsletter::all();
        $input['subject'] = $this->details['subject'];

        foreach ($data as $key => $value) {
            $input['email'] = $value->email;
            $input['name'] = $value->name;
            \Mail::send('mail.Test_mail', [], function($message) use($input){
                $message->to($input['email'], $input['name'])
                    ->subject($input['subject']);
            });
        }
    }
}
