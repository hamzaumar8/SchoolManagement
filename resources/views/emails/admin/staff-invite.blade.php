@component('mail::message')
# Hi, {{$staff->title}} {{$staff->full_name}}
Kindly click on the link below to activate you account

@component('mail::button', ['url' => route('register',['uuid' => $staff->uuid, 'token' => $staff->token])])
Registration Link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent