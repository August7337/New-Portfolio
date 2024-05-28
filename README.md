Add the first admin :

vendor/bin/sail mysql
USE AppDB;
INSERT INTO users (name, email, password) VALUES ('admin', 'SUPER@admin', '$2y$10$xbgid/MlCaA2k2HjstCuxOPvNawcClTmnUr/9UbSZVcD.F1v9N262');

user : SUPER@admin
password : admin

to do:
    - ckeditor dark mode
    - sitemap