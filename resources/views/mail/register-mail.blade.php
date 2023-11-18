<x-mail::message>
# Introduction
Bonjour {{ $user->name }},<br>
Vous avez reçu cet email parce que vous avez créé un compte sur notre site web.<br>

<x-mail::button :url="route('loginPage')">
Connectez vous
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
