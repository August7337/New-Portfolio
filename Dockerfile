FROM php:8.2

# Mettre à jour et installer les dépendances nécessaires
RUN apt-get update -y && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    zip \
    unzip \
    git \
    libonig-dev \
    libwebp-dev \
    curl

# Installer les extensions PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install gd pdo mbstring pdo_mysql

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier le contenu du projet dans le conteneur
COPY . .

# Exposer le port pour Laravel
EXPOSE 8000

# Commande par défaut
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]