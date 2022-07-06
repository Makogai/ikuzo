@component('mail::message')
Hello,
There's a new post on {{ app(\App\Settings\GeneralSettings::class)->site_name  }}'s blog.

Go and check it out
@component('mail::panel')
    <img src="{{asset('storage/'.$post->image)}}" alt="">
    <p><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></p>
@endcomponent

@component('mail::button', ['url' => $url, 'color' => 'error'])
    Unsubscribe from newsletter
@endcomponent

<br>Best regards

{{ app(\App\Settings\GeneralSettings::class)->site_name  }}'s Team
@endcomponent
