<x-mail::message>
  

     {{ $contactData['name'] }}
    {{ $contactData['email'] }}

    {{ $contactData['message'] }}
    
<br>
    {{ config('app.name') }}
</x-mail::message>