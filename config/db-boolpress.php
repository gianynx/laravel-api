<?php

return [
    'posts' => [
        [
            "image" => "https://logowik.com/content/uploads/images/vue2883.jpg",
            "title" => "Vue, hello",
            "body" => "Vue.js, spesso abbreviato come Vue, è un framework JavaScript progressivo per la creazione di interfacce utente. È progettato per essere adottato gradualmente e può essere utilizzato per aggiungere funzionalità interattive a una pagina web esistente o come base per sviluppare un'applicazione web completa. Vue.js si basa sul concetto di «reattività». Ciò significa che il framework è in grado di monitorare i dati e rilevare automaticamente le modifiche, consentendo di creare interfacce utente dinamiche e reattive. Vue collega il modello (l'HTML) alla logica dell'applicazione (JavaScript) in modo dichiarativo, consentendo di definire facilmente le interazioni tra gli elementi dell'interfaccia utente e i dati sottostanti."
        ],
        [
            "image" => "https://pbs.twimg.com/media/EtZYf1FWYAMmtHj.jpg",
            "title" => "Vite, hello world",
            "body" => "Vite è un ambiente di sviluppo rapido e leggero per le applicazioni web basato su JavaScript. È progettato per accelerare il processo di sviluppo e migliorare l'esperienza dello sviluppatore, fornendo un ambiente di sviluppo reattivo e performante."
        ],
        [
            "image" => "https://i.pinimg.com/736x/ab/8b/5e/ab8b5ea6637ebd8e5755c838d952b8c1.jpg",
            "title" => "Laravel, primi passi",
            "body" => "Laravel è un framework open source di tipo MVC scritto in PHP per lo sviluppo di applicazioni web, creato nel 2011 da Taylor Otwell come derivazione di Symfony. Distribuito con licenza MIT, mantiene tutto il codice disponibile su GitHub e viene indicato, in base al punteggio GitHub e StackOverflow, come il framework PHP più popolare, seguito da Symfony, CodeIgniter e altri; ad agosto 2014 risulta essere il progetto PHP più seguito su GitHub. Alcune delle caratteristiche sono: un sistema di gestione dei pacchetti modulare con un gestore delle dipendenze dedicato, differenti modalità di accesso ai database relazionali, strumenti che aiutano la distribuzione e la manutenzione dell'applicazione, e la sua disposizione al Syntactic sugar."
        ],
        [
            "image" => "https://i.pinimg.com/736x/ab/8b/5e/ab8b5ea6637ebd8e5755c838d952b8c1.jpg",
            "title" => "Laravel, Migration-Seeder",
            "body" => "In Laravel, la migrazione (migration) si riferisce al processo di gestione del database. Le migrazioni consentono di modificare lo schema del database in modo strutturato e ripetibile. In pratica, una migrazione è una classe PHP che definisce le operazioni per creare, modificare o eliminare tabelle nel database. Laravel fornisce un sistema di migrazione integrato che consente di creare facilmente tabelle e modificarle con un approccio basato su codice, anziché eseguire manualmente query SQL. Le migrazioni possono essere eseguite per applicare le modifiche allo schema del database o per annullare (rollback) le modifiche precedentemente apportate. D'altra parte, i «seeder» in Laravel sono utilizzati per popolare il database con dati di prova o di inizializzazione. I seeder sono classi PHP che contengono logica per inserire dati predefiniti nel database. Ad esempio, se si desidera popolare una tabella «users» con utenti di prova, è possibile creare un seeder per generare e inserire i dati di questi utenti. I seeder sono utili per creare un ambiente di sviluppo o per eseguire test con dati coerenti. Laravel fornisce un sistema di seeding integrato che semplifica la generazione e l'inserimento di dati di prova.
            In sintesi, le migrazioni sono utilizzate per modificare lo schema del database in modo strutturato, mentre i seeder sono utilizzati per popolare il database con dati di prova o di inizializzazione. Entrambi i concetti sono parte integrante del sistema di gestione del database di Laravel e consentono di lavorare con il database in modo semplice e coerente."
        ],
        [
            "image" => "https://i.pinimg.com/736x/ab/8b/5e/ab8b5ea6637ebd8e5755c838d952b8c1.jpg",
            "title" => "Laravel, Model-Controller",
            "body" => "In Laravel, un modello (model) rappresenta una tabella del database o una collezione di dati. I modelli consentono di interagire con il database definendo le operazioni di lettura, scrittura, aggiornamento e eliminazione dei dati. Ogni modello è associato a una tabella specifica nel database e contiene metodi che definiscono la logica di business per l'accesso e la manipolazione dei dati. I modelli in Laravel seguono il pattern architetturale ORM (Object-Relational Mapping), che permette di gestire i dati del database come oggetti, semplificando così l'interazione con il database stesso. Laravel fornisce un'implementazione ORM denominata Eloquent che semplifica notevolmente la gestione dei modelli e delle relazioni tra di essi. Un controller, invece, rappresenta la logica dell'applicazione e coordina le richieste degli utenti. Un controller è una classe PHP che gestisce le richieste HTTP provenienti dal browser o da altre fonti e restituisce una risposta appropriata. Il controller riceve i dati inviati dalla richiesta, interagisce con il modello per recuperare o manipolare i dati necessari e restituisce la risposta al browser o alla fonte che ha effettuato la richiesta. I controller in Laravel seguono il pattern architetturale MVC (Model-View-Controller), che separa la logica di business (nel modello), la presentazione (nella vista) e il controllo delle interazioni (nel controller). Utilizzando i controller, è possibile organizzare in modo ordinato la logica delle diverse funzionalità dell'applicazione e rispondere alle richieste degli utenti in modo coerente."
        ],
        [
            "image" => "https://i.pinimg.com/736x/ab/8b/5e/ab8b5ea6637ebd8e5755c838d952b8c1.jpg",
            "title" => "Laravel, DC Comics",
            "body" => "DC Comics, precedentemente nota come Detective Comics Inc., è una casa editrice statunitense specializzata nella pubblicazione di fumetti, divisione editoriale di DC Entertainment, sussidiaria di Warner Bros. Global Brands and Franchises e a sua volta di Warner Bros. Discovery. Nota nel panorama internazionale come una delle più eminenti esponenti dell'industria del fumetto, nel corso della sua esistenza ha dato alle stampe personaggi iconici del genere supereroistico, quali Superman, Batman e Wonder Woman; si è inoltre distinta per la creazione di personaggi e franchise esterni alla narrativa mainstream ma acclamate dalla critica, come la saga Watchmen, il Sandman Universe e il marchio Vertigo. A DC Comics sono inoltre direttamente correlate diverse opere trans-mediali, dai film ai videogiochi, passando per le serie televisive: tra i progetti più ambiziosi sotto questo punto di vista, si ricordano l'Arrowverse e il DC Extended Universe."
        ]
    ]
];
