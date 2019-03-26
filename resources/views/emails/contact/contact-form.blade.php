@component('mail::message')

#Thank for your message

<strong>Name</strong> {{ $data['name'] }}
<strong>Email</strong> {{ $data['email'] }}
<br>
<strong>Message</strong>

{{ $data['message'] }}

{{--@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}--}}
@endcomponent
