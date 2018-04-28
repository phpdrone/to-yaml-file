FROM phpdrone/composer:php71-latest 

ENV PLUGIN_FILE config.yaml

RUN mkdir /plugin
WORKDIR /plugin
ADD . /plugin
RUN composer install --ansi --prefer-dist --no-dev
ENTRYPOINT [ "php", "/plugin/main.php" ]
