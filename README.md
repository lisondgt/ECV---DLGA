symfony server:start

symfony run -d yarn dev --watch
symfony run yarn dev

composer install
composer update

php bin/console make:entity
php bin/console make:admin:crud
php bin/console make:migration
php bin/console doctrine:migrations:migrate