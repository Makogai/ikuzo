@component('mail::message')
Hello,
You have successfully subscribed to {{ app(\App\Settings\GeneralSettings::class)->site_name  }}'s newsletter.
You will be informed about all new podcasts, giveaways and posts.
@component('mail::panel')
    If You don't want to receive any emails, click the button below.
@endcomponent

@component('mail::button', ['url' => $url, 'color' => 'error'])
    Unsubscribe from newsletter
@endcomponent

<br>Best regards

{{ app(\App\Settings\GeneralSettings::class)->site_name  }}'s Team
@endcomponent
