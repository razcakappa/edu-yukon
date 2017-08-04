#!/bin/bash
php /var/www/edu-yukon/api/bin/console doctrine:generate:entities EDUBundle
php /var/www/edu-yukon/api/bin/console doctrine:schema:update --force
#php /var/www/edu-yukon/api/bin/console translation:extract fr --config=EDUBundle --output-format=xliff &&
#php /var/www/edu-yukon/api/bin/console translation:extract en --config=EDUBundle --output-format=xliff &&
#php /var/www/edu-yukon/api/bin/console translation:extract fr --config=EDUBundle --output-format=xlf
#php /var/www/edu-yukon/api/bin/console translation:extract en --config=EDUBundle --output-format=xlf
chmod +x /var/www/edu-yukon/api/bin/console &&
/var/www/edu-yukon/api/bin/console --env=prod cache:clear &&
/var/www/edu-yukon/api/bin/console cache:clear &&
find /var/www/edu-yukon/api/ -type f -exec chmod 0664 {} + &&
find /var/www/edu-yukon/api/ -type d -exec chmod 2775 {} + &&
chmod +x /var/www/edu-yukon/api/bin/console;
