FROM alpine:3.12

RUN addgroup -S appgroup && adduser -S appuser -G appgroup

RUN mkdir /cont-init-sample
COPY ./helloworld /fix-attrs-sample/

RUN apk update && apk upgrade && \
    apk add --no-cache curl tzdata procps htop && \
    cp /usr/share/zoneinfo/Asia/Taipei /etc/localtime && \
    curl -L -s https://github.com/just-containers/s6-overlay/releases/download/v1.20.0.0/s6-overlay-amd64.tar.gz \
    | tar xvzf - -C /

COPY config /

ENTRYPOINT ["/init"]