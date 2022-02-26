## Basta Bicol v2 (Current: Laravel 8.*)

### Deployment

1. run `composer install`
2. copy `.env.example` to `.env`
3. run `php artisan config:cache`
4. setup database `bastabikol` schema 
5. run `php artisan key:generate`
6. run `php artisan ide-helper:generate` (optional)
7. run `npm install && run dev`
8. run `php artisan migrate --seed`]
9. browse (http://basta-bicol-v2.test)

### Demo Credentials

**Admin:** admin@admin.com  
**Password:** secret

**User:** user@user.com  
**Password:** secret

