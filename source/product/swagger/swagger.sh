#!/bin/bash

mkdir ../public/swagger
php ../vendor/bin/openapi --bootstrap ./swagger-constants.php --format json --output ../public/swagger/dist/swagger.json ./swagger-v1.php ../app/controllers
