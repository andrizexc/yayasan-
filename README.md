# requirements
1. composer
1. php >= 7.2
1. mysql Ver 15.1 Distrib 10.1.34-MariaDB
1. xampp or something similar

# install
1. `git clone https://github.com/AnOrdinaryPeople/projek-yayasan.git`
1. `cd projek-yayasan`
1. `cp .env.example .env`
1. adjust the `.env`
1. `composer i`
1. `php artisan key:generate`
1. `php artisan migrate --seed`
1. run the app
