@component('mail::message')
Hello,
You received a message from : {{ $contact->name }}
 <p>{{ $contact->phone }}</p>
 <p>{{ $contact->email}}</p>
<p>{{ $contact->message }}</p>
@endcomponent
