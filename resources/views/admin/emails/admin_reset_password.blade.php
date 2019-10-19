@component('mail::message')
# Reset
welcome {{ $data['data']->name }}


@component('mail::button', ['url' => adminUrl('reset/password/'.$data['token'])])
Click Here To Reset Your Password
@endcomponent
OR <br>
Copy This Link 
<a href="{{ adminUrl('reset/password/'.$data['token']) }}">{{ adminUrl('reset/password/'.$data['token']) }}</a><br>
Thanks,<br>
@if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif
@endcomponent
