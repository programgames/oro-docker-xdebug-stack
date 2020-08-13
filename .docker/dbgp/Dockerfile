FROM alpine:3.11

MAINTAINER Grégory Planchat <gregory@kiboko.fr>

RUN set -ex \
    && apk update \
    && apk add \
        py2-pip \
    && pip2 install --upgrade pip \
    && pip2 install komodo-python-dbgp

CMD /usr/bin/pydbgpproxy -d 0.0.0.0:9001 -i 0.0.0.0:9002

EXPOSE 9001 9002