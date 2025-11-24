
# coachchecktest
coachtech 確認テスト1



laravel環境
docker-compose exec php bash
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
.envの変数を変更



開発環境
お問い合わせ画:http://localhost/contact
登録画面:http://localhost/register
ログイン画面:http://localhost/login
管理者:http://admin/contacts
phpmyadmin:http://localhost:8080/

使用技術
php:.1.33
laravel:8.83.8
mysql:11.8.3
nginx:1.21.1
![alt text][def]

[def]: image-1.png