FROM alpine:latest

LABEL maintainer="justin@gomaji.com" verison="1.0"

WORKDIR /app

ENV GM_UAT=0 GM_ONLINE=1

COPY ./sample_csv/ /csv/
COPY ./helloworld ./documents/
ADD ./demo_compress.tar.gz ./
ADD https://ddad-gomaji.s3-ap-northeast-1.amazonaws.com/tmp/demo_compress.tar.gz /downloads/

RUN cd /downloads/ && tar -zxvf demo_compress.tar.gz
RUN apk --no-cache add busybox-extras && echo "Done"

EXPOSE 80

CMD ["sh", "-c", "while true; echo 'wait...'; do sleep 1000; done"]