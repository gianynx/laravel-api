<?php

namespace App\Http\Controllers\Api;

use App\Mail\NewContact;
use App\Models\Lead;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // validiamo i dati "a mano" per poter gestire la risposta
        $validator = Validator::make($data, [
            'name' => 'required',
            'address' => 'required|email',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                // la funzione errors() della classe Validator resituisce un array
                // in cui la chiave è il campo soggetto a validazione
                // e il valore è un array di messaggi di errore
                'errors' => $validator->errors()
            ]);
        }

        // salviamo al db i dati inseriti nel form di contatto
        $new_lead = new Lead();
        $new_lead->fill($data);
        $new_lead->save();

        // inviamo la mail all'admin del sito, passando il nuovo oggetto Lead
        Mail::to('info@fashionshop.com')->send(new NewContact($new_lead));

        return response()->json([
            'success' => true,
        ]);
    }
}
