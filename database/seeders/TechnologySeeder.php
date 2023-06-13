<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            [
                "image" => "https://logowik.com/content/uploads/images/vue2883.jpg",
                "name" => "Vue",
                "body" => "Vue.js, spesso abbreviato come Vue, è un framework JavaScript progressivo per la creazione di interfacce utente. È progettato per essere adottato gradualmente e può essere utilizzato per aggiungere funzionalità interattive a una pagina web esistente o come base per sviluppare un'applicazione web completa. Vue.js si basa sul concetto di «reattività». Ciò significa che il framework è in grado di monitorare i dati e rilevare automaticamente le modifiche, consentendo di creare interfacce utente dinamiche e reattive. Vue collega il modello (l'HTML) alla logica dell'applicazione (JavaScript) in modo dichiarativo, consentendo di definire facilmente le interazioni tra gli elementi dell'interfaccia utente e i dati sottostanti."
            ],
            [
                "image" => "https://pbs.twimg.com/media/EtZYf1FWYAMmtHj.jpg",
                "name" => "Vite",
                "body" => "Vite è un ambiente di sviluppo rapido e leggero per le applicazioni web basato su JavaScript. È progettato per accelerare il processo di sviluppo e migliorare l'esperienza dello sviluppatore, fornendo un ambiente di sviluppo reattivo e performante."
            ],
            [
                "image" => "https://i.pinimg.com/736x/ab/8b/5e/ab8b5ea6637ebd8e5755c838d952b8c1.jpg",
                "name" => "Laravel",
                "body" => "Laravel è un framework open source di tipo MVC scritto in PHP per lo sviluppo di applicazioni web, creato nel 2011 da Taylor Otwell come derivazione di Symfony. Distribuito con licenza MIT, mantiene tutto il codice disponibile su GitHub e viene indicato, in base al punteggio GitHub e StackOverflow, come il framework PHP più popolare, seguito da Symfony, CodeIgniter e altri; ad agosto 2014 risulta essere il progetto PHP più seguito su GitHub. Alcune delle caratteristiche sono: un sistema di gestione dei pacchetti modulare con un gestore delle dipendenze dedicato, differenti modalità di accesso ai database relazionali, strumenti che aiutano la distribuzione e la manutenzione dell'applicazione, e la sua disposizione al Syntactic sugar."
            ]
        ];

        foreach($technologies as $technology)
        {
            $newTechnology = new Technology();
            $newTechnology->image = $technology['image'];
            $newTechnology->name = $technology['name'];
            $newTechnology->body = $technology['body'];
            $newTechnology->save();
        }
    }
}
