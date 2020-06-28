@component('mail::message')


# Thank you for your message
<strong>Name:</strong>{{ $data['name']}}<br />
<strong>Email:</strong>{{ $data['email']}}<br />
<strong>Message:</strong><br />
{{ $data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent