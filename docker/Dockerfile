FROM php

MAINTAINER Giovane Japa Jr <giovanejr@gmail.com>

RUN echo "deb http://packages.cloud.google.com/apt cloud-sdk-stretch main" > /etc/apt/sources.list.d/google-cloud-sdk.list
RUN echo "deb http://packages.cloud.google.com/apt gcsfuse-stretch main" > /etc/apt/sources.list.d/gcsfuse.list

RUN apt-get -q update \
    && DEBIAN_FRONTEND="noninteractive" apt-get -q upgrade -y -o Dpkg::Options::="--force-confnew" --no-install-recommends \
    && DEBIAN_FRONTEND="noninteractive" apt-get -q install -y -o Dpkg::Options::="--force-confnew"  --no-install-recommends --allow-unauthenticated \
      unzip procps wget python google-cloud-sdk gcsfuse \
    && apt-get -q autoremove\
    && apt-get -q clean -y && rm -rf /var/lib/apt/lists/* && rm -f /var/cache/apt/*.bin

RUN wget https://github.com/google/google-api-php-client/releases/download/v2.2.1/google-api-php-client-2.2.1.zip \
    && unzip google-api-php-client-2.2.1.zip \
    && rm google-api-php-client-2.2.1.zip

ADD google-api-php-client /google-api-php-client

COPY client_secret_861894563944-ptfffod077ou5iabqugi41uv0krkc93p.apps.googleusercontent.com.json /google-api-php-client/oauth-credentials.json

RUN php -r "copy('https://getcomposer.org/installer', '/tmp/composer-setup.php');" \
    && php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && composer require google/cloud-storage

COPY Gproject-7e905bd54814.json /tmp/Gproject-7e905bd54814.json
RUN gcloud auth activate-service-account --key-file=/tmp/Gproject-7e905bd54814.json
ENV GOOGLE_APPLICATION_CREDENTIALS=/tmp/Gproject-7e905bd54814.json
RUN mkdir -p /mnt/public /mnt/hr /mnt/legal /mnt/market_research /mnt/product_design \


CMD ["php","-S","0.0.0.0:8000","-t","/google-api-php-client/examples"]
