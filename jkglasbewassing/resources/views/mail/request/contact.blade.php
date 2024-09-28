<x-mail::message>
# Contact verzoek

Naam: {{ $data['Naam'] }} <br>
Email: {{ $data['Email'] }} <br>
Telefoonnummer: {{ $data['Telefoonnummer'] }} <br>
Onderwerp: {{ $data['Onderwerp'] }} <br>
opmerking: {{ $data['opmerking'] }} <br>
Contact_1: {{ $data['Contact_1'] }} <br>
Contact_2: {{ $data['Contact_2'] }}





{{ config('app.name') }}
</x-mail::message>
