FROM php:8.2-apache

COPY . /php

EXPOSE 80

CMD ["apache2-foreground"]
