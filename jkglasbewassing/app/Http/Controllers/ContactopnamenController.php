<?php

namespace App\Http\Controllers;

use App\Mail\ContactNaam;
use App\Mail\Contactrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactopnamenController extends Controller
{
    public function store(Request $request)
    {
         $request->validate([

        'Naam' =>['string', 'required'],
      'Email' => ['email', 'required'],
      'Telefoonnummer' => ['string', 'nullable'],
      'Onderwerp' => ['string', 'required'],
      'opmerking' => ['string', 'required'],
      "Contact_1" => ['string'],
      "Contact_2" => ['string'],
        ]);
        $data= $request->all();

        $dataE= $request->Email;

        $jk = 'info@jkglasbewassing.nl';

        Mail::to($dataE)->send(new ContactNaam($data));
        Mail::to($jk)->send(new Contactrequest($data));

        return redirect('/')->with('status', 'Bedankt voor uw brieftje');

    }
}
