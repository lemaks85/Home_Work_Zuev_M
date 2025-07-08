FROM nginx:latest

COPY ./hosts/ /etc/nginx/conf.d/

WORKDIR /app
VOLUME /app

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]