### Uruchomienie aplikacji

Uruchomienie phoenix_api
1. cd phoenix_api
2. mix deps.get
3. mix ecto.create
4. mix phx.server

Uruchomienie symphony_app
1. cd symphony_app
2. composer install
3. php -S localhost:8000 -t public

### Inicjacja danych 
Po uruchomieniu phoenix_app w przeglądarce:
`http://localhost:4000/import` - zostanie zapisanych do bazy danych 100 losowych userów

### Korzystanie z aplikacji

`http://localhost:8000/users` - index userów

`http://localhost:8000/users/add` - new user

`http://localhost:8000/users/#{id}` - show user

`http://localhost:8000/users/#{id}/edit` - edit user

`http://localhost:8000/users/#{id}/delete` - delete user
