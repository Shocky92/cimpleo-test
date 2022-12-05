# cimpleo-test
Test application

# Запустить Docker
Приложение использует оболочку Lando https://lando.dev/

Запустить приложение `lando start`

Остановить приложение `lando poweroff`

# Методы API
`GET /api/auth/login` - логин пользователя и получение токена

`GET /api/markers` - получить список меток

`Authorization Bearer <Token> GET /api/markers/search/{mobile}` - поиск метки по полю mobile

`Authorization Bearer <Token> POST /api/markers/store` - сохранить новый маркер

`Authorization Bearer <Token> DELETE /api/markers/delete/{id}` - удалить маркер

# Для генерирования меток используется сидер
`php artisan db:seed --class=MarkerSeeder`
