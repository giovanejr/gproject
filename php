php

Creditos e exemplos
https://github.com/google/google-api-php-client


apt-get update
apt-get update; apt update; apt-get install apt-file git zip procps wget



wget https://github.com/google/google-api-php-client/releases/download/v2.2.1/google-api-php-client-2.2.1.zip

unzip google-api-php-client-2.2.1.zip 




Gerando credenciais

https://developers.google.com/api-client-library/php/auth/web-app

ClientID (API Key)
861894563944-ptfffod077ou5iabqugi41uv0krkc93p.apps.googleusercontent.com

ClientSecret
FMcD1UlgOBoTc0nkyxBRa33g



Copiar o credentials json (download do google em apis) para o root directory do php

root@eed6326c562a:/google-api-php-client/# cp -p /tmp/client_secret_861894563944-ptfffod077ou5iabqugi41uv0krkc93p.apps.googleusercontent.com.json oauth-credentials.json



php -r "copy('https://getcomposer.org/installer', '/tmp/composer-setup.php');"

php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer

composer require google/cloud-storage






