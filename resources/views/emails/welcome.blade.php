@component('mail::message')
# Introduction

<h1> Welcome to my Page, {{ $user->name }}</h1>

@component('mail::button', ['url' => 'http://localhost:8000/posts'])
		Comeback Soon!
@endcomponent

@component('mail::panel', ['url' => ''])
	lorem ipsum lorem ipsum lore ipsum
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
