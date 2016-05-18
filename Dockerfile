# Build form php 5.6.18
FROM php:5.6.18

# Set environment
ENV DEBIAN_FRONTEND noninteractive

# Use bin/bash instead bin/sh
RUN rm /bin/sh && ln -s /bin/bash /bin/sh

# Set environment
ENV DEBIAN_FRONTEND noninteractive

# Install basic tools
RUN apt-get update && apt-get install -y \
    vim \
    locate \
    curl \
    bash \
    git

# Copy php.ini file.
RUN cp /usr/src/php/php.ini-production /usr/local/etc/php/php.ini

# Install php extensions
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng12-dev

RUN docker-php-ext-install \
    mbstring \
    zip \
    mcrypt

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install mysql
RUN apt-get update && apt-get install -y mysql-server

# Fetch Node and install it
RUN curl -sL https://deb.nodesource.com/setup_0.12 | bash -
RUN apt-get update && apt-get -y install nodejs

# Update npm
RUN npm update -g npm

# Install gulp with npm
RUN npm install -g gulp

# Expose ports
EXPOSE 80
EXPOSE 8000
EXPOSE 443
EXPOSE 3306

# Run bash
CMD php -a
