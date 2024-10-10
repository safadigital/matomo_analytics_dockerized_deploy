#!/bin/sh

add-apt-repository ppa:certbot/certbot

apt-get update -y

apt-get install certbot -y

certbot certonly --standalone -d 3b1995ae1676.vps.myjino.ru 

docker compose -f docker-compose.prod,yml up -d