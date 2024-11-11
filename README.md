# MoviesAPI

Dit is een hele simpele Laravel applicatie voor het showcasen van API routes in laravel.

## Installatie

1. Clone de repo naar de www folder van laragon
2. Stop en start laragon, en klik wanneer hij om rechten vraagt op "Ja".
3. Open de terminal in de projectmap, en voer `composer install` uit
4. Voer `cp .env.example .env` uit
5. Voer `php artisan key:generate` uit
6. Voer `php artisan migrate --seed` uit.

## Gebruik

Deze API heeft 2 endpoints:

GET: `http://moviesapi.test/api/movies`

GET: `http://moviesapi.test/api/secure/movies`

Beide endpoints geven een uitdraai van de movies tabel in de database, maar de secure route heeft een API token nodig. Deze wordt gegenereerd in de api_token waarde van de user in de database. Als deze als "Authorization" header meegegeven wordt in de API request, werkt de tweede endpoint ook.

API calls kunnen met bijvoorbeeld [HTTPie](https://httpie.io/download) gedaan worden.
