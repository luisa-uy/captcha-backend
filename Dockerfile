FROM nginx:1.20-alpine

COPY index.html /usr/share/nginx/html/
COPY src /usr/share/nginx/html/src/
COPY js /usr/share/nginx/html/js/
COPY css /usr/share/nginx/html/css/

EXPOSE 80

