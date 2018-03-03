FROM php

MAINTAINER Giovane Japa Jr <giovanejr@gmail.com>

RUN apt-get -q update \
    && DEBIAN_FRONTEND="noninteractive" apt-get -q upgrade -y -o Dpkg::Options::="--force-confnew" --no-install-recommends \
    && DEBIAN_FRONTEND="noninteractive" apt-get -q install -y -o Dpkg::Options::="--force-confnew"  --no-install-recommends \
      unzip procps wget \
    && apt-get -q autoremove\
    && apt-get -q clean -y && rm -rf /var/lib/apt/lists/* && rm -f /var/cache/apt/*.bin

RUN wget https://github.com/google/google-api-php-client/releases/download/v2.2.1/google-api-php-client-2.2.1.zip \
    && unzip google-api-php-client-2.2.1.zip \
    && rm google-api-php-client-2.2.1.zip

ADD google-api-php-client /google-api-php-client

COPY client_secret_861894563944-ptfffod077ou5iabqugi41uv0krkc93p.apps.googleusercontent.com.json /google-api-php-client/oauth-credentials.json

CMD ["php","-S","0.0.0.0:8000","-t","/google-api-php-client/examples"]
