@component('mail::message')
# Project: 

@component('mail::button', ['url' => ''])
	Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
