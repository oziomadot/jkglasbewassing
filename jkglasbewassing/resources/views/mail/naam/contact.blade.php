<x-mail::message>
# Contact Opnaam
Bedankt voor uw interesse in JK Glasbewassing.

Binnenkork zullen we je contacten.

Uw indienen:
Naam: {{ $data['Naam'] }} <br>
Email: {{ $data['Email'] }} <br>
Telefoonnummer: {{ $data['Telefoonnummer'] }} <br>
Onderwerp: {{ $data['Onderwerp'] }} <br>
opmerking: {{ $data['opmerking'] }} <br>
Contact_1: {{ $data['Contact_1'] }} <br>
Contact_2: {{ $data['Contact_2'] }} <br>

Met vriendelijke groet,<br>
Jay
<br>
{{ config('app.name') }}
</x-mail::message>
