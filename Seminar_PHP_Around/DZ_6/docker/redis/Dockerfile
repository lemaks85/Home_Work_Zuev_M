FROM redis:7-alpine as builder
RUN apk add \
    --no-cache \
    htop \
    tzdata


FROM builder
ENV TZ=Europe/Moscow
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
WORKDIR /app/mysite.local
EXPOSE 6379
CMD ["redis-server"]