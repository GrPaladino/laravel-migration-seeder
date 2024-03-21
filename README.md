# Creiamo una tabella trains tramite la relativa Migration

### Ogni treno dovrà avere:

-   Azienda
-   Stazione di partenza
-   Stazione di arrivo
-   Orario di partenza
-   Orario di arrivo
-   Codice Treno
-   Numero Carrozze
-   In orario
-   Cancellato

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto
Inserite inizialmente i dati tramite PhpMyAdmin.
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

### Bonus

Create una seconda migration per aggiungere/modificare una colonna della tabella

# Aggiungiamo un seeder per la classe Train usando FakerPHP.

## BONUS 1

Implementare il seeder tramite un file csv.

## BONUS 2

Implementare la paginazione dei risultati.
Per formattare correttamente i links:
importare la classe Paginator con use Illuminate\Pagination\Paginator; nel file app\Providers\AppServiceProvider.php
aggiungere la riga Paginator::useBootstrap(); nel metodo boot()
