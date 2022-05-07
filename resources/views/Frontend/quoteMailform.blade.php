@component('mail::message')
# Introduction
{{ $title }} <br>

Nama    : {{$name}} <br>
Company : {{$company}}<br>
Phone   : {{$phone}}<br>
email   : {{$email}} <br>

Description <br>
 {{$description}} <br>

{{-- The body of your message. --}}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
