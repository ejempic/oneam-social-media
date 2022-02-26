## Basta Bicol v2 (Current: Laravel 8.*)

### Deployment

1. run `composer install`
2. copy `.env.example` to `.env`
3. run `php artisan config:cache`
4. setup database `bastabikol` schema 
5. run `php artisan key:generate`
6. run `php artisan ide-helper:generate` (optional)
7. run `npm install && run watch`
8. run `php artisan pwa:install`
9. run `php artisan migrate --seed`
10. browse (https://basta-bicol-v2.test)

### First aid

````
php artisan config:cache
php artisan view:clear
composer dumpautoload
````

### Demo Credentials

**Admin:** admin@admin.com  
**Password:** secret

**User:** user@user.com  
**Password:** secret

