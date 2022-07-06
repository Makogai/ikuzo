@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            @if(isset($title))
                {{$title}}
            @else
                {{app(\App\Settings\GeneralSettings::class)->site_name}}
            @endif
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{app(\App\Settings\GeneralSettings::class)->site_name}} @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
