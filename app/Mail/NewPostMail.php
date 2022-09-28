<?php

namespace App\Mail;

use App\Models\Blog\Post;
use App\Models\Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPostMail extends Mailable
{
    use Queueable, SerializesModels;

    public Post $post;
    public string $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post, Newsletter $newsletter)
    {
        $this->post = $post;
        $this->url = route('newsletter.unsubscribe', ['id' => $newsletter->getKey()]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.new_post');
    }
}
