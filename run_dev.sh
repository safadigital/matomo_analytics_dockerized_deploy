#!/bin/sh
# исользовать самоподписной для теста
# для продакшена использовать lets encrypt через certbot

openssl req -x509 -nodes -newkey rsa:2048 -keyout key.pem -out cert.pem -sha256 -days 365 \
    -subj "/C=GB/ST=London/L=London/O=Safadigital/OU=IT Department/CN=localhost"

# sudo docker build . -t my_app

docker compose up
