git clone https://github.com/Loimur/moodul3.git
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
