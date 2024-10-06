FROM nginx:1.19.0-alpine

RUN rm /etc/nginx/conf.d/default.conf
RUN chmod -R 755 /usr/share/nginx/html
COPY nginx.conf /etc/nginx/conf.d 