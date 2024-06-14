Add the first admin :

docker exec -it 404933a5821a bash
mysql -u root -p
USE AppDB;
INSERT INTO users (name, email, password) VALUES ('admin', 'SUPER@admin', '$2y$10$xbgid/MlCaA2k2HjstCuxOPvNawcClTmnUr/9UbSZVcD.F1v9N262');

user : SUPER@admin
password : admin

Generate sitemap.xml :
    php artisan sitemap:generate
    or
    ./vendor/bin/sail artisan sitemap:generate

to do:
    - html in ckeditor 
    - designe