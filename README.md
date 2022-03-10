## 1AM Social Media (Current: Laravel 8.*)

### Local Deployment

1. run `composer install`
2. copy `.env.example` to `.env`
3. run `php artisan config:cache`
4. setup database `oneam-social-media` schema 
5. run `php artisan key:generate`
6. run `php artisan ide-helper:generate` (optional)
7. run `php artisan migrate --seed`
8. browse (https://oneam-social-media.test)

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

