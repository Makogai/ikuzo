<?php

namespace App\Observers;

use App\Models\Blog\Author;

class AuthorObserver
{
    /**
     * Handle the Author "created" event.
     *
     * @param  \App\Models\Blog\Author  $author
     * @return void
     */
    public function created(Author $author)
    {
        if ($author->photo == ''){
            $author->photo = 'user.png';
            $author->save();
        }
    }

    /**
     * Handle the Author "updated" event.
     *
     * @param  \App\Models\Blog\Author  $author
     * @return void
     */
    public function updated(Author $author)
    {
        if ($author->photo == ''){
            $author->photo = 'user.png';
            $author->save();
        }
    }

    /**
     * Handle the Author "deleted" event.
     *
     * @param  \App\Models\Blog\Author  $author
     * @return void
     */
    public function deleted(Author $author)
    {
        //
    }

    /**
     * Handle the Author "restored" event.
     *
     * @param  \App\Models\Blog\Author  $author
     * @return void
     */
    public function restored(Author $author)
    {
        //
    }

    /**
     * Handle the Author "force deleted" event.
     *
     * @param  \App\Models\Blog\Author  $author
     * @return void
     */
    public function forceDeleted(Author $author)
    {
        //
    }
}
