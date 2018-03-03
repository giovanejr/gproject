FROM php

MAINTAINER Giovane Japa Jr <giovanejr@gmail.com>

RUN apt-get -q update \
    && DEBIAN_FRONTEND="noninteractive" apt-get -q upgrade -y -o Dpkg::Options::="--force-confnew" --no-install-recommends \
    && DEBIAN_FRONTEND="noninteractive" apt-get -q install -y -o Dpkg::Options::="--force-confnew"  --no-install-recommends \
      git zip procps wget \
    && apt-get -q autoremove\
    && apt-get -q clean -y && rm -rf /var/lib/apt/lists/* && rm -f /var/cache/apt/*.bin

RUN mkdir /root/.ssh && chmod 750 /root/.ssh
COPY .talend.key /root/.ssh/id_rsa
COPY run.sh /run.sh
RUN chmod 400 /root/.ssh/id_rsa && chmod +x /run.sh
RUN echo "Host github.com\n\tStrictHostKeyChecking no\n" > /root/.ssh/config

