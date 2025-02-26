FROM rabbitmq:management-alpine as builder
RUN apk add \
    --no-cache \
    htop \
    tzdata


FROM builder
ENV TZ=Europe/Moscow
COPY run.sh /root
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
EXPOSE 15671 15672
CMD ["rabbitmq-server"]