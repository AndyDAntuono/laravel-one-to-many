/*CONSEGNA*/

nome repo: laravel-one-to-many
Ciao ragazzi,
continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità Type. Per realizzare la repo nuova a partire da quella vecchia avete due modi: repo template oppure copiate la cartella.
Repo template: rendete la repo laravel-auth momentaneamente una repo template, createne una nuova chiamata laravel-one-to-many a partire da questa, clonatela in locale e quindi rendete laravel-auth nuovamente una repo normale.
Copiare la cartella: copiate la cartella laravel-auth. Rinominatela in laravel-one-to-many. Entrate dentro questa nuova cartella e cancellate la cartella nascosta .git.
L'entità Type rappresenta la tipologia di progetto ed è in relazione one to many con i progetti.
I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:
- creare la migration per la tabella types
- creare il model Type
- creare la migration di modifica per la tabella projects per aggiungere la chiave esterna
- aggiungere ai model Type e Project i metodi per definire la relazione one to many
- visualizzare nella pagina di dettaglio di un progetto la tipologia associata, se presente
- permettere all’utente di associare una tipologia nella pagina di creazione e modifica di un progetto
- gestire il salvataggio dell’associazione progetto-tipologia con opportune regole di validazione
Bonus 1:
creare il seeder per il model Type.
Bonus 2:
aggiungere le operazioni CRUD per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.

/*CONSEGNA*/

NB: dal momento che ieri non mi sono sentito bene, inizio questa repo oggi 10-10-24.
- creo la repo attraverso il metodo della template
- creo un nuovo database, intitolato laravel-one-to-many.
- modifico il nome del DB_DATABASE da laravel in laravel-one-to-many 
- lancio i comandi php artisan serve e npm run dev
- lancio il comando php artisan migrate:refresh --seed per rilanciare migrazione e seeder
- lancio il comando php atisan storage:link
- lancio il comando php artisan make:migration create_types_table per aggiiugere la colonna types alla tabella projects
- modifico i2024_10_10_151521_create_types_table.php
- lancio il comando php artisan make:migration add_type_id_to_projects_table --table=projects per aggiungere la colonna types alla tabella projects.
- modifico 2024_10_10_151042_add_type_id_to_projects_table.php
- lancio il comando php artisan make:model Type per creare l'omonimo modello
- modifico il modello Type secondo le mie necessità.
- decido di creare uno show.blade.php per visulizzare i dettagli di un progetto, come titolo, descrizione, immagine e adesso anche la tipologia.